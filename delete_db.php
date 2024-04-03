<?php

    $con = mysqli_connect("localhost","root","","sql_groppo");

    $sql = "DELETE FROM contacts WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
    } else {
        echo"" . mysqli_error($con);
    }
    mysqli_close($con);

?>