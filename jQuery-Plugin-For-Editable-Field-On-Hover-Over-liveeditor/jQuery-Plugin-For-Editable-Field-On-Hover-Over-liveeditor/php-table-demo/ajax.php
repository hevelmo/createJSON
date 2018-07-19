<?php

$info = array();
foreach($_POST as $key => $value){
    $info[] = "$key = $value";
}
echo "Storing to DB: ". implode(', ', $info);
//echo "Ajax return";
//throw new Exception("Ajax error", 404)
?>
