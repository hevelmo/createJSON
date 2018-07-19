<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LiveEditor Table Demo</title>
        <style>
            table td { min-width: 40px; height:28px; }
            table tbody td { padding-left: 2px; }
            table tbody td.editing { padding-left: 0; }
            #saveButton { width:100px; background-color: green; color:white; font-size: 14px; padding:10px; border-radius: 10px; }
            #ajaxResponses { border:solid 2px black; padding:10px; margin:10px; background-color:#ccc; color:blue; min-height:100px; }
            .liveeditor-changed { background-color: #ffd800 !important; }
        </style>
    </head>
    <body>
        <h1>LiveEditor Table Demo</h1>
        <table id="editTable">
            <thead>
                <tr>
                    <?php 
                    for($colIndx=0;$colIndx<1;$colIndx++){
                        ?>
                    <th name="<?php echo "c".$colIndx ?>"><?php echo "Column $colIndx"?></th>
                        <?php
                    } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for($rowIndx=0;$rowIndx<2;$rowIndx++){
                    ?>
                <tr row="<?php echo $rowIndx ?>">
                    <?php
                    for($colIndx=0;$colIndx<1;$colIndx++){
                        ?>
                    <td><?php echo "R".$rowIndx."C".$colIndx ?></td>
                        <?php
                    } ?>
                </tr>
                    <?php
                } ?>
            </tbody>
        </table>
        <input id="saveButton" type="button" value="Save"/>
        <div id="ajaxResponses"></div>
    </body>
</html>
    <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="jquery.liveeditor.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#editTable tbody td").liveeditor({
                editingCss: 'editing',

                // Scroll to focused editor
                onEditorFocused: function () {
                    var $window = $(window);
                    var $body = $('html, body');
                    var elem = $(this);
                    var elemTop = elem.offset().top;
                    var elemLeft = elem.offset().left;
                    var windowWidth = $window.width();
                    var windowHeight = $window.height();
                    var docViewTop = $window.scrollTop();
                    var docViewLeft = $window.scrollLeft();
                    var scrollVertical = (elemTop + elem.height() > docViewTop + windowHeight) || (elemTop < docViewTop);
                    var scrollHorizontal = (elemLeft + elem.width() > docViewLeft + windowWidth) || (elemLeft < docViewLeft);
                    if (scrollVertical && scrollHorizontal) {
                        //Scroll diagonally
                        $body.stop()
                            .animate({
                                scrollTop: (elemTop - windowHeight / 2) + 'px', 
                                scrollLeft: (elemLeft - windowWidth / 2) + 'px'
                            }, 'fast');
                    } else if (scrollVertical) {
                        //Scroll vertically
                        $body.stop()
                            .animate({
                                scrollTop: (elemTop - windowHeight / 2) + 'px'
                            }, 'fast');
                    } else {
                        //Scroll horizontally
                        $body.stop()
                            .animate({
                                scrollLeft: (elemLeft - windowWidth / 2) + 'px'
                            }, 'fast');
                    }
                },
                
                //Track changes on row level
                onChanged: function () {
                    var row = $(this).closest('tr');
                    if ($('.liveeditor-changed',row).length > 0)
                        row.addClass('changed');
                    else
                        row.removeClass('changed');
                }
            });

            //Save changes
            $('#saveButton').click(function () {
                $.liveeditor.closeEditor($("#editTable tbody td"));
                var headers = $('#editTable thead tr th');
                $('#editTable tbody tr.changed').each(function () {
                    var row = $(this);
                    var data = "row=" + row.attr("row") + "&" + $.liveeditor.serialize($('td', row), headers);
                    $.ajax({
                        type:"POST",
                        url: "ajax.php",
                        data: data,
                        success: function(data){
                            $('#ajaxResponses').append("<p>" + data + "</p>");
                            $.liveeditor.reset($("#editTable tbody td"));
                        }, 
                        error: function(){
                            console.log("Failed to save changes");
                        }
                    });
                });
            });
        });

</script>