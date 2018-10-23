<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 20/06/2018
 * Time: 13:02
 */

    $myfile = fopen("fichero.log", "a") or die("Unable to open file!");
    fwrite($myfile, "------------------------------------------------\n");
    $currentDate = date("Y-m-d H:i:sa");
    $txt = $currentDate." Init proxy\n";
    fwrite($myfile, $txt);

    //Params received in POST
    if (!empty( $_POST )) {
        fwrite($myfile, "Recibida petición con parametros POST \n");
            fwrite($myfile, print_r($_POST, true));
    }else{
        fwrite($myfile, "Recibida petición sin parámetros POST \n");
    }

    fclose($myfile);
