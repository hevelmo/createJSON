<?php
    if ( !empty($_POST)) {
        $jerarquia = $_POST['jerarquia'];
        $key_jerarquia = $jerarquia;
        $cad = array(
            $key_jerarquia => array(
            )
        );
        print_r("<pre>". json_encode($cad) . "</pre>");
        $handler = fopen($_POST['jerarquia'].".json", "w+") or die ("Ocurrio un error.....");
        fwrite ($handler, json_encode($cad));
        fclose($handler);
    }
?>
