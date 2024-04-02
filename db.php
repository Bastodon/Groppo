<?php

    $con = mysqli_connect("localhost","root","toor","sql_groppo");

    if (mysqli_connect_errno()) {
        printf("", mysqli_connect_error());
    }

    if ($con) {
        die("Erreur de connexion : " .$con->connect_error);
    }

    echo"Connexion reussie";
?>