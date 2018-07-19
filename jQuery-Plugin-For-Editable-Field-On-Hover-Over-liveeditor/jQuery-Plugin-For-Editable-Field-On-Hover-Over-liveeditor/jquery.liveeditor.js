﻿///
/// LiveEditor jQuery plugin
///
/// Copyright 2013 Trustfall AB
/// Author Mattias Åslund
/// Licensed according to the MIT-license. Please read the file LICENSE for details.
///
;//Protection against other malformed scripts that can interfere 
(function ($, window, document, undefined) {
    var LIVEEDITOR_OPTIONS_STRING = 'liveeditor-options';
    var LIVEEDITOR_OLD_STRING = 'liveeditor-old';
    var LIVEEDITOR_ENABLED_STRING = 'liveeditor-enabled';
    var LIVEEDITOR_ORIGINAL_VALUE_STRING = 'liveeditor-original-value';
    var LIVEEDITOR_ORIGINAL_HTML_STRING = 'liveeditor-original-html';

    var defaultOptions = {

        fillControls: false,

        changedCss: 'liveeditor-changed',
        editingCss: null,
        editorCss: null,

        combobox: {
            css: 'combo'
        },

        checkbox: {
            css: 'checkbox',
            checked: {
                value: 'true',
                html: 'X'
            },
            unchecked: {
                value: 'false',
                html: ''
            }
        },

        ///
        /// Container events
        ///


        onGetValue: null,

        onSetValue: null,
        
        /// Called (after any edit has been closed) when the container has changed its value.
        onChanged: null,

        /// Called when an editor is being created to allow developers to implement their own editors for certain containers.
        onEditorCreating: null,

        /// Called to get valid options for a combobox Editor.
        /// this event must be overloaded if the comboboxes shall have any options.
        /// Return a string with <option /> elements to display.
        onEditorOptions: function (container) { return '<option value=""></option>'; },

        /// Called after the editor is visible.
        onEditorOpened: null,

        /// Called after the editor receives focus.
        onEditorFocused: null,

        /// Called after the editor has been closed.
        onEditorClosed: null,
    };


    var EDITOR_MARGIN = 5;//TODO: WHY do we need to remove this margin to make the input/select fit its parent container?


    ///
    /// Public LiveEditor Commands
    ///

    $.liveeditor = {

        ///
        /// Enables editing for an unregistered or previously disabled container.
        ///
        isEnabled: function (container) {
            
            return isEnabled(container);
        },

        ///
        /// Enables editing for an unregistered or previously disabled container.
        ///
        enable: function (container) {
            
            return enable(container);
        },

        ///
        /// Disables editing for a registered container.
        ///
        disable: function (container) {
            
            return disable(container);
        },

        ///
        /// Forces the open editor to save its changes back to its container and close.
        /// Call this method before saving to make sure all changes have been committed.
        ///
        closeEditor: function (selector) {
            
            selector.each(function () { commitEditor(this); });
            return selector;
            
        },

        ///
        /// Gets the liveeditor values of all fields in a selector
        ///
        get: function (selector) {
            
            var values = [];
            selector.each(function () {
                var container = $(this);
                var editor = container.children(0);
                if (!editor.length || editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING) == null) {
                    //No editor
                    values.push(getContainerValue(container));
                }
                else {
                    //Editor open
                    values.push(getEditorValue(editor));
                }
            });
            return values.length === 1 ? values[0] : values;
        },

        ///
        /// Serializes all liveeditor fields in a selector to a postable string, just like $.serialize() works on forms.
        /// Any control not registered to liveeditor are ignored. Liveeditor-fields without data-name or name attribute are also ignored.
        /// Unlike $.serialize() this function includes unchecked checkboxes for now. This may change in the future.
        /// For the special case of serializing a single row in a liveeditor table a second selector with headers can be included,
        /// in which case the data-name or name will be taken from the column header if it is not found on the field itself.
        ///
        serialize: function (selector, namesSelector) {
            
            var result = [];
            selector
                .filter(function () {
                    var that = $(this);
                    return (namesSelector || that.is('[data-name]') || that.is('[name]'))
                        && that.data(LIVEEDITOR_OPTIONS_STRING);
                })
                .each(function () {
                    var that = $(this);
                    var name = that.attr('data-name') || that.attr('name') || namesSelector.eq(that.index()).attr('data-name') || namesSelector.eq(that.index()).attr('name');
                    result.push(
                        encodeURIComponent(name)
                        + '='
                        + encodeURIComponent(getContainerValue(that))
                        );
                });
            return result.join('&');
        },

        serializeRow: function (row, header, rowIndex) {
            var thisRow = $(row).get(0);
            var result = [];
            $('*', row).filter(function () { return $(this).data(LIVEEDITOR_OPTIONS_STRING); })
                .each(function () {

                    var indexes = getIndexes(row, this);
                    var name = getName(header, indexes);
                    if (name !== undefined) {
                        if (rowIndex !== undefined) {
                            name = name.replace("[]", "[" + rowIndex + "]");
                        }
                        var value = getContainerValue($(this));
                        result.push(name + '=' + encodeURIComponent(value));
                    }
                    else {
                        var msg = 'FAILED to get data-name for row editor at index: ' + indexes.join(',') + '!';
                        if (console) { console.log(msg) }
                        else { alert(msg); }
                    }
                });
            return result.join('&');
        },

        getIndexes: function (parentElement, childElement) {
            return getIndexes(parentElement, childElement);
        },
        followIndexes: function (parentElement, indexes) {
            return followIndexes(parentElement, indexes);
        },
        getName: function(parentElement, indexes){
            return getName(parentElement, indexes);
        },

        ///
        /// Changes the value of a container as if the user had edited it with the editor.
        ///
        set: function (selector, value, html) {
            
            selector.each(function () {
                var container = $(this);
                var originalValue = getContainerValue(container);
                if (container.data(LIVEEDITOR_OLD_STRING) == null) {
                    container.data(LIVEEDITOR_OLD_STRING, originalValue);
                    
                }
                if (updateContainer(container, value, html)) {
                    var oldValue = container.data(LIVEEDITOR_OLD_STRING); //Reload the "old" value in case onSetValue() event reset the control
                    
                    if (value !== oldValue) {
                        containerChanged(container);
                    }
                }
            });
            return selector;
        },

        ///
        /// Resets the container to consider its current value the unchanged state.
        /// Call this method for all containers after saving to setup new change-tracking without reloading the entire page.
        ///
        reset: function (selector) {
            
            selector.each(function () {
                var container = $(this);
                var oldValue = container.data(LIVEEDITOR_OLD_STRING);
                if (oldValue != null) {
                    
                    var newValue = getContainerValue(container);
                    
                    if (newValue !== oldValue) {
                        container.data(LIVEEDITOR_OLD_STRING, newValue);
                        
                        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
                        if (options.changedCss)
                            container.removeClass(options.changedCss);
                    }
                }
                else{
                    
                }
            });
            return selector;
        }
    };

    ///
    /// Private Event Listeners
    ///

    //Display the editor when the user hovers over the container
    function container_mouseenter() {
        
        displayEditor($(this));
    }

    function container_mouseleave() {
        
        cancelEditor(this);
    }

    //Make the editor "sticky" when focused so it doesn't disappear when the mouse is moved from the container
    function editor_focus() {
        

        var editor = $(this)
            .unbind('focus', editor_focus)
            .select();
        var container = editor.parent()
            .unbind('mouseleave', container_mouseleave);

        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        if (container[0] === options._focusedContainer) {
            
            return true; //Since the current containers editor is focused there is no other editor to close
        }

        if (options._focusedContainer) {
            
            if (!commitEditor(options._focusedContainer))
                return false;
        }

        
        options._focusedContainer = container[0];
        editor.keydown(editor_keydown);
        if ($.isFunction(options.onEditorFocused)) {
            
            options.onEditorFocused.call(container, editor);
        }
        return true;
    }

    //Handle editor TAB and ESC keys
    function editor_keydown(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode == 13) {        // Enter
            e.preventDefault();
            var container = $(this).parent();
            commitEditor(container);
        }
        else if (keyCode == 27) {       // ESC
            e.preventDefault();
            var container = $(this).parent();
            cancelEditor(container);
        }
        else if (keyCode == 9) {    //TAB
            e.preventDefault();
            var container = $(this).parent();
            var options = container.data(LIVEEDITOR_OPTIONS_STRING);

            //Close the current editor
            commitEditor(container);

            //Find the next element in the initialized selector
            
            var elementList = e.shiftKey ? $(options._selector.get().reverse()) : options._selector;
            var nextContainer = null;
            var found = false;
            do {
                elementList.each(function () {
                    if (found && isEnabled($(this))) {
                        //This is the next element in the selector
                        nextContainer = $(this);
                        return false;//Breaks out of the .each() statement
                    }
                    else if (this === container[0]) {
                        //This is the current element in the selector
                        if(found){
                            //This is the second time we find this element, so we seem to be in an 
                            // endless loop looking for a control to step to. Abort!
                            found = false;
                            return false;//Breaks out of the .each() statement
                        }
                        else{
                            found = true;//Flag the next enabled container as a target
                        }
                    }
                });
                if(!found) {
                    //Although we looped twice we still didn't find a control to step to, so abort
                    
                    break; //Breaks out of the do/while() statement
                }
            }
            while(nextContainer == null);
            //Open the new editor
            if(nextContainer !== null) {
                displayEditor(nextContainer).focus();
            }
        }
    }









    ///
    /// Private methods
    ///
    function isEnabled(container) {
        return container.data(LIVEEDITOR_ENABLED_STRING) === true;
    }
    function enable(container) {
        if (!isEnabled(container)) {
            container
                .data(LIVEEDITOR_ENABLED_STRING, true)
                .mouseenter(container_mouseenter);
        }
        return container;
    }
    function disable(container) {
        if (isEnabled(container)) {
            container
                .data(LIVEEDITOR_ENABLED_STRING, false)
                .unbind('mouseenter', container_mouseenter);
        }
        return container;
    }

    ///
    /// Method called to get the current value of a container before displaying its editor.
    /// Implement the events onGetValue() and onSetValue() if the container does not store its value in LiveEditors default way.
    /// Returns the containers current value as a string.
    ///
    function getContainerValue (container) { 
        var value;
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        if ($.isFunction(options.onGetValue)) {
            
            value = options.onGetValue.call(container);
        }
        if (value === undefined) {
            
            value = container.hasClass(options.combobox.css) || container.hasClass(options.checkbox.css)
                ? (container.attr('value') || '')
                : container.text();
        }
        
        return value;
    }

    ///
    /// Method called to set the new value of a container. If the container has an open editor it is closed by this commmand.
    /// Implement the events onGetValue() and onSetValue() if the container does not store its value in LiveEditors default way.
    /// Returns true if the value was written successfully and false if the operation was cancelled.
    ///
    function updateContainer(container, newValue, newHtml, isCancel) {
        
        if (isCancel === undefined)
            isCancel = false;
        var success;

        //Let the user override the setting of the value to the container if he likes
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        if ($.isFunction(options.onSetValue)) {
            var success = options.onSetValue.call(container, newValue, newHtml, isCancel);
            if (success === false)
                return false;
        }

        if (success === undefined) {
            //Set the new value to the container
            
            if (container.hasClass(options.combobox.css)) {
                container.attr('value', newValue);
            }
            else if (container.hasClass(options.checkbox.css)) {
                container.attr('value', newValue);
                if (newHtml == null)
                    newHtml = (newValue == options.checkbox.checked.value) 
                        ? options.checkbox.checked.html 
                        : options.checkbox.unchecked.html;
            }
            if (newHtml == null)
                newHtml = newValue;
            container.html(newHtml);
        }

        container
            .unbind('mouseleave', container_mouseleave)
            .removeClass(options.editingCss);

        if (container[0] === options._focusedContainer) {
            
            options._focusedContainer = null;
        }

        //Update the containers change-status
        var oldValue = container.data(LIVEEDITOR_OLD_STRING);
        
        if (newValue != oldValue) {
            
            if (options.changedCss)
                container.addClass(options.changedCss);
        }
        else {
            
            if (options.changedCss)
                container.removeClass(options.changedCss);
        }
        return true;
    }

    function containerChanged (container) {
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        if ($.isFunction(options.onChanged)) {
            
            options.onChanged.call(container);
        }
    }

    ///
    /// Method called to get the index tree between a parent and nested child element.
    /// This method is meant to be used together with getName().
    ///
    function getIndexes(thisRow, field) {
        var walker = $(field);
        var indexes = [];
        while (walker.get(0) != thisRow) {
            indexes.push(walker.index());
            walker = walker.parent();
            if (walker.index() === -1)
                throw 'thisRow is not a parent of field!';
        }
        indexes = indexes.reverse();
        return indexes;
    };

    ///
    /// Method follows the indexes created by getIndexes() and returns a child node below the header
    ///
    function followIndexes(header, indexes) {
        var walker = header;
        for (var i in indexes) {
            walker = walker.children().eq(indexes[i]);
        }
        return walker;
    };

    ///
    /// Method called to get the data-name value for a nested child of a header element
    /// This method is meant to be used together with getIndexes().
    ///
    function getName(header, indexes) {
        var walker = followIndexes(header, indexes);
        var name = walker.attr('data-name') || walker.attr('name');
        return name;
    };



    ///
    /// Private Editor methods
    ///

    //Display editor when mouse hovers over an editable container
    function displayEditor(container) {
        
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);

        var editor = container.children(0);
        if (editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING) != null) {
            
            return editor; //Already an editor in this container
        }

        var currentValue = getContainerValue(container);
        if (container.data(LIVEEDITOR_OLD_STRING) == null) {
            container.data(LIVEEDITOR_OLD_STRING, currentValue);
            
        }

        var editor = createEditor(container, currentValue);
        editor.focus(editor_focus);
        editor.data(LIVEEDITOR_ORIGINAL_HTML_STRING, container.html());
        container
            .html(editor)
            .mouseleave(container_mouseleave)
            .addClass(options.editingCss);
        

        if ($.isFunction(options.onEditorOpened)) {
            
            options.onEditorOpened.call(container, editor);
        }

        
        return editor;
    }

    function createEditor(container, value) {
        var editor;
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);

        var event = options.onEditorCreating;
        if (event) {
            editor = event(container, value);
        }

        if (!editor) {
            if (container.hasClass(options.combobox.css)) {
                editor = $('<select>').width(container.width() - EDITOR_MARGIN);
                var select_options = options.onEditorOptions.call(container);
                switch ($.type(select_options)) {
                    case "string": editor.append($(select_options)); break;
                    default:
                        
                        break;
                }
                $('option[value="' + value + '"]', editor).prop('selected', true);
            } else if (container.hasClass(options.checkbox.css))
                editor = $('<input type="checkbox"/>').prop('checked', (value == options.checkbox.checked.value));
            else {
                editor = $('<input type="text"/>').width(container.width() - EDITOR_MARGIN).val(value);
            }
        }

        editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING, value);
        if (options.editorCss) {
            editor.addClass(options.editorCss);
        }

        return editor;
    }

    //Restore "label" in the container with the new value from the editor
    function commitEditor(obj) {
        
        var container = $(obj);
        var editor = container.children(0);
        if (!editor.length || editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING) == null) {
            return true; //No editor to hide
        }
        var originalValue = editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING);
        var newValue = getEditorValue(editor);
        var newHtml = getEditorHtml(editor);
        if (!updateContainer(container, newValue, newHtml)) {
            return false;
        }
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        if (originalValue != newValue) {
            containerChanged(container);
        }
        //Throw the hidden event
        if ($.isFunction(options.onEditorClosed)) {
            
            options.onEditorClosed.call(container);
        }
        return true;
    }

    //Restore "label" in the container with the original value from the editor
    function cancelEditor(obj) {
        
        var container = $(obj);
        var editor = container.children(0);
        if (!editor.length || editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING) == null) {
            return true; //No editor to hide
        }
        var originalValue = editor.data(LIVEEDITOR_ORIGINAL_VALUE_STRING);
        var originalHtml = editor.data(LIVEEDITOR_ORIGINAL_HTML_STRING);
        if (!updateContainer(container, originalValue, originalHtml, true)) {
            return false;
        }
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);
        //Throw the hidden event
        if ($.isFunction(options.onEditorClosed)) {
            
            options.onEditorClosed.call(container);
        }
        return true;
    }

    ///
    /// Method to get the current value from the editor.
    /// Returns the editors value, which MAY differ from its displayed text (for checkboxes/comboboxes for instance).
    ///
    function getEditorValue(editor) {
        
        var value;
        var container = editor.parent();
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);

        if ($.isFunction(options.onEditorGetValue)) {
            
            value = options.onEditorGetValue.call(editor);
        }

        if (value === undefined) {
            
            if (editor.is(':checkbox'))
                value = (editor.prop('checked')
                    ? options.checkbox.checked.value
                    : options.checkbox.unchecked.value);
            else if (editor.is('select'))
                value = $('option:selected', editor).val();
            else
                value = editor.val();
        }

        
        return value;
    }

    ///
    /// Method to get the current display text from the editor
    /// Returns the displayed text in the editor, which MAY differ from its value (for checkboxes/comboboxes for instance).
    ///
    function getEditorHtml (editor) {
        
        var html;
        var container = editor.parent();
        var options = container.data(LIVEEDITOR_OPTIONS_STRING);

        if ($.isFunction(options.onEditorGetValue)) {
            
            html = options.onEditorGetHtml.call(editor);
        }

        if (html === undefined) {
            
			if (editor.is('select'))
				html = $(':selected', editor).text();
			else
				html = null;
		}

        
        return html;
    }









    //called on the native object directly, wrap with $(container) if needed.
    function initializeObject(container, options) {
        //assign the options to the object instance.
        var $container = $(container);
        $container.data(LIVEEDITOR_OPTIONS_STRING, options);

        if (options.fillControls) {
            //Initialize the controls with the html that corresponds to their values
            if ($container.hasClass(options.combobox.css)) {
                var value = getContainerValue($container);
                $container.data(LIVEEDITOR_OLD_STRING, value);

                var select_options = options.onEditorOptions.call(container);
                switch ($.type(select_options)) {
                    case "string":
                        var option = $('<select>').append(select_options).find('option[value="' + value + '"]');
                        var html = option.html();
                        updateContainer($container, value, html, true);
                        break;
                    default:
                        
                        break;
                }
            }
            else if ($container.hasClass(options.checkbox.css)) {
                var value = getContainerValue($container);
                $container.data(LIVEEDITOR_OLD_STRING, value);
                updateContainer($container, value, null, true);
            }
        }

        //do other initialization tasks on the individual item here...
    }

    ///
    /// LiveEditor Initiator
    /// Use this method to unobtrusively initialize liveeditor for a group of containers.
    /// For example: $('table tbody tr td.editable').liveeditor();
    ///

    $.fn.liveeditor = function (options) {
        

        //Build options for the new instance
        var mergedOptions = $.extend({}, defaultOptions, options)
        //This is just an internal state-variable, so DON'T expose it in defaultOptions!
        mergedOptions._focusedContainer = null;
        mergedOptions._selector = this;

        //Initialize all objects in the selection
        this.each(function () {
            initializeObject(this, mergedOptions);
        });
        //Enable all objects in the selection
        
        $.liveeditor.enable(this);

        //TODO: Consider iterating all items in the selector and updating their html if they are checkboxes or comboboxes, to make sure the server generated code isn't diffrent from client side
        //TODO: $('.combo,.checkbox', this).each(function(){ updateContainer(this, this.attr(value)); });

        
        return this;
    }

    

}(jQuery, window, document));