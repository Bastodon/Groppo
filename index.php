<?php
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
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="assets/grop.ico">
  </head>

    <body>
        
        <header>
            <a href="index.php"> <img src="assets/grop.ico" alt="logo"> </a>
            <a href="index.php"> <h1> Groppo </h1> </a>
            
            <h2> Rechercher </h2>
            
        </header>

        <div class="contact-main">
            <table class="table">

                <thead>
                <tr>
                    <td> ID </td>
                    <td> Nom </td>
                    <td> Prénom(s) </td>
                    <td> Telephone </td>
                    <td> Region </td>
                </tr>
                </thead>

                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>  
                    
                    <td> <?php echo $row["id"]; ?> </td>
                    <td> <?php echo $row["nom"]; ?> </td>
                    <td> <?php echo $row["prenoms"]; ?> </td>
                    <td> <?php echo $row["telephone"]; ?> </td>
                    <td> <?php echo $row["region"]; ?> </td>
                    
                    <?php
                        }
                    ?>      
                </tbody>

            </table>
        </div>

        <footer>
            <h4> Groppo, par Thomas LERAY 2024 </h4>
        </footer>

    </body>

</html>