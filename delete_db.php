<?php
    //Récupération de la DB initiale//
    require_once('db.php');

    //Une requête DELETE est générée à partir de l'ID récupérée depuis l'index//
    $sql = "DELETE FROM contacts WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
    } else {
        echo"" . mysqli_error($con);
    }
    mysqli_close($con);

?>