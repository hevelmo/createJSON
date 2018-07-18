<?php
?>


<form name="codexworld_frm" action="" method="post">
    <div class="field_wrapper">
        <div>
            <input type="text" name="field_name[]" value="">
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"></a>
        </div>
    </div>
    <input type="submit" name="submit" value="SUBMIT">
</form>

<form action="_guardar_jerarquia_JSON.php" method="post">
    <input type="text" name="jerarquia" id="jerarquia" placeholder="Crear jerarquia">
    <button type="submit" id="guardaJerarquia">
        Guardar
    </button>
</form>

<?php 
    // Get multiple input field's value 
    $field_values_array = $_POST['field_name'];

    foreach($field_values_array as $value){
        echo $field_values_array;
    }
?>



        
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
