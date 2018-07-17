<?php
    //if ( !empty($_POST)) {
        /*
        $cad = array(
            '{"jerarquia"'. => . '"'. $_POST['jerarquia'] .'"}';
        )
        $url = $cad;
        $json = json_encode( $url );

        $file = 'jerarquia.json';
        file_put_contents( $file, $json, FILE_APPEND);
        */
        function changeArrayIntoJSON($nameJSON, $array) {
            return (trim($nameJSON) !== '') 
                    ? '{"' . $nameJSON . '": ' . json_encode($array) . '}' 
                    : json_encode($array);
        }
        $jerarquia = $_POST['jerarquia'];
        echo changeArrayIntoJSON($jerarquia, $array);
   //}
?>