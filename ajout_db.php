<?php
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $telephone = $_POST['telephone'];
    $region = $_POST['region'];


    // On récupère les données configurées dans connect.json pour se connecter à la base //
    $dataString = file_get_contents('connect.json');
    $dataJSON= json_decode($dataString);

    if(is_object($dataJSON)){
        $con = mysqli_connect("".$dataJSON->host,"".$dataJSON->user,"".$dataJSON->password,"". $dataJSON->database, "". $dataJSON->port);
    }else{
        $con = mysqli_connect("localhost","root","","sql_groppo");
    }

    if (mysqli_connect_errno()) {
        printf("Echec de connexion", mysqli_connect_error());
    }
    else
    {
        $stmt = $con->prepare("INSERT INTO contacts(nom,prenoms,telephone,region)values(?,?,?,?)");
        $stmt->bind_param("ssss", $nom, $prenoms, $telephone, $region);
        $stmt->execute();
        $stmt->close();
        $con->close();
        header("Location: index.php");
    }

?>