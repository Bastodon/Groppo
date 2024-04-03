<?php
        $con = mysqli_connect("localhost","root","","sql_groppo");

        if (mysqli_connect_errno()) {
            printf("", mysqli_connect_error());
        }

        if (count($_POST)>0) 
        {
            mysqli_query($con,"UPDATE contacts SET nom='" . $_POST['nom'] . "',
            prenoms='" . $_POST['prenoms'] . "',
            telephone='" . $_POST['telephone'] . "',
            region='" . $_POST['region'] . "' 
            WHERE id='" . $_POST['id'] . "'" );
            header("Location: index.php");
        }

        $result = mysqli_query($con,"SELECT * FROM contacts WHERE id='" . $_GET['id'] . "'");
        $lig = mysqli_fetch_array($result);

?>

<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Groppo - Edit</title>
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
        </header>

        <div class="ajout-main">
            
            <form name="update" action="" method="post">
                <div class="field">
                    <label for="nom" class="label">ID</label>
                    <div class="control">
                        <input type="text" class="input" size="50" id="id" name="id" value="<?php echo $lig['id']; ?>" disabled />
                    </div>
                </div>

                <div class="field">
                    <label for="nom" class="label">Nom</label>
                    <div class="control">
                        <input type="text" class="input" size="50" id="nom" name="nom" placeholder="Smith" value="<?php echo $lig['nom']; ?>" />
                    </div>
                </div>

                <div class="field">
                    <label for="prenoms" class="label">Prénom(s)</label>
                    <input type="text" class="input" id="prenoms" name="prenoms" placeholder="Philippe, Auguste, Laurent" value="<?php echo $lig['prenoms']; ?>" />
                </div>

                <div class="field">
                    <label for="telephone" class="label">N°.Téléphone</label>
                    <input type="tel" class="input" id="telephone" name="telephone" placeholder="+33601020304" value="<?php echo $lig['telephone']; ?>" />
                </div>

                <div class="field">
                    <label for="region" class="label">Région</label>
                    <input type="text" class="input" id="region" name="region" placeholder="Normandie, Eure" value="<?php echo $lig['region']; ?>" />
                </div>

                <input type="submit" name="submit" class="button">
            </form>    
                
        </div>

        <footer>
            <h4> Groppo, par Thomas LERAY 2024 </h4>
        </footer>

    </body>

</html>