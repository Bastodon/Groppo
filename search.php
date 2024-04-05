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



        <div class="contact-main">

            <!-- Radio pour les filtres -->
            <form method="post">
                <div class="control">
                    <label class="radio"> Filtres : </label>
                    <label class="radio">
                        <input type="radio" name="option" value="id" />
                        ID
                    </label>
                    <label class="radio">
                        <input type="radio" name="option" value="nom" checked/>
                        Nom
                    </label>
                    <label class="radio">
                        <input type="radio" name="option" value="prenoms" />
                        Prénom(s)
                    </label>
                    <label class="radio">
                        <input type="radio" name="option" value="telephone" />
                        Telephone
                    </label>
                    <label class="radio">
                        <input type="radio" name="option" value="region" />
                        Région
                    </label>
                </div>

                <div class="field">
                    <input class="input is-focused" name="search" type="text" placeholder="ID,Nom,Prenom... (laisser vide pour afficher tableau entier)">
                </div>

                <div class="control">
                    <label class="radio"> Trier par : </label>
                    <label class="radio">
                        <input type="radio" name="ordre" value="id" checked />
                        ID
                    </label>
                    <label class="radio">
                        <input type="radio" name="ordre" value="ASC"/>
                        Prénoms [A-Z]
                    </label>
                    <label class="radio">
                        <input type="radio" name="ordre" value="DESC"/>
                        Prénoms [Z-A]
                    </label>
                </div>

                <button class="button is-white" name="submit"> Rechercher </button>
                
            </form>
            

            <hr>


            <table class="table is-bordered">

                <!-- Affichage des résultats. Si aucune entrée n'est donnée, le tableau standard est montré par défaut. -->
                <?php
                    if (isset($_POST['submit'])){
                        $search=$_POST['search'];
                        $radioval=$_POST['option'];
                        $order=$_POST['ordre'];

                        if ($radioval=='id')
                        {
                            $sql="SELECT * FROM contacts WHERE $radioval = $search ";
                        }else {
                            $sql="SELECT * FROM contacts WHERE $radioval LIKE '%" . $search ."%'";
                        }

                        if ($order!='id')
                        {
                            $sql.= "ORDER BY prenoms $order";
                        }

                        $result = mysqli_query($con, $sql);
                        
                        if (mysqli_num_rows($result)<= 0) {
                            echo '<span class="tag is-large is-danger">Aucun résultat trouvé</span>';
                        }
                    }
                ?>

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

            <button class="button" onclick="window.location.href='ajout.php';"> Nouveau </button>
        </div>



        <footer>
            <h4> Groppo, par Thomas LERAY 2024 </h4>
        </footer>

    </body>

</html>