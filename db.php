<?php

    // On récupère les données configurées dans connect.json pour se connecter à la base //
    $dataString = file_get_contents('connect.json');
    $dataJSON= json_decode($dataString);

    if(is_object($dataJSON)){
        $con = mysqli_connect("".$dataJSON->host,"".$dataJSON->user,"".$dataJSON->password,"". $dataJSON->database, "". $dataJSON->port);
    }else{
        $con = mysqli_connect("localhost","root","","sql_groppo");
    }

    if (mysqli_connect_errno()) {
        printf("", mysqli_connect_error());
    }
    
?>