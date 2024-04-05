<?php

    // On récupère les données configurées dans connect.json pour se connecter à la base //
    $dataString = file_get_contents('connect.json');
    $dataJSON= json_decode($dataString);

    if(is_object($dataJSON)){
        $con = mysqli_connect("".$dataJSON->host,"".$dataJSON->user,"".$dataJSON->password,"". $dataJSON->database, "". $dataJSON->port);
    }else{
        printf("Echec de connexion. Verifiez vos entrées dans connect.json");
    }

    if (mysqli_connect_errno()) {
        printf("", mysqli_connect_error());
    }

?>