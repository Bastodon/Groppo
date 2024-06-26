<?php
    // Récupération de la base de données initiale //
    require_once('db.php');
    $query = "SELECT * FROM contacts";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Groppo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <!-- CSS réalisé avec l'aide de Bulma (https://bulma.io) -->
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="assets/grop.ico">
  </head>

    <body>
        
        <!-- Entête en rouge, avec logo et titre cliquable et barre de recherche -->
        <header>
            <a href="index.php"> <img src="assets/grop.ico" alt="logo"> </a>
            <a href="index.php"> <h1> Groppo </h1> </a>        
        </header>

        <!-- Tableau principal. Affiche toutes les entrées de la base de donnée -->
        <div class="contact-main">
            <table class="table">

                <thead>
                    <!-- Entête du tableau -->
                    <tr>
                        <td> ID </td>
                        <td> Nom </td>
                        <td> Prénom(s) </td>
                        <td> Telephone </td>
                        <td> Region </td>
                        <td> Editer </td>
                        <td> Supprimer </td>
                    </tr>
                </thead>

                <tbody>

                    <!-- Récupération des lignes de la bdd -->
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) 
                        {
                    ?>  
                    
                    <!-- Chaque ligne indique une donnée. Une icone de crayon et de poubelle servent à éditer ou supprimer l'entrée -->
                    <tr>

                        <td> <?php echo $row["id"]; ?> </td>
                        <td> <?php echo $row["nom"]; ?> </td>
                        <td> <?php echo $row["prenoms"]; ?> </td>
                        <td> <?php echo $row["telephone"]; ?> </td>
                        <td> <?php echo $row["region"]; ?> </td>
                        <td> <a href="edit_db.php?id=<?php echo $row["id"]; ?>"> <img src="assets/pen.ico" alt="edit"> </a> </td>
                        <td> <a href="delete_db.php?id=<?php echo $row["id"]; ?>"> <img src="assets/bin.ico" alt="delete"> </a> </td>
                    
                    </tr>

                    <?php
                        }
                    ?>      
                </tbody>

            </table>

            <!-- Boutons permettant d'accéder à la page d'ajout ou de recherche -->
            <button class="button" onclick="window.location.href='ajout.php';"> Nouveau </button>
            <button class="button is-white" onclick="window.location.href='search.php';"> Rechercher </button>
        </div>

        <footer>
            <h4> Groppo, par Thomas LERAY 2024 </h4>
        </footer>

    </body>

</html>