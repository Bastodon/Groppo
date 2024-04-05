<!DOCTYPE html>

<!-- Par soucis de debug, la base de donnée n'est récupérée que sur ajout_db.php. Ici, on se contente de fournir le formulaire à l'utilisateur et le transmettre -->

<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Groppo - Ajout</title>
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
            
            <form action="ajout_db.php" method="post">
                <div class="field">
                    <label for="nom" class="label">Nom</label>
                    <div class="control">
                        <input type="text" class="input" size="50" id="nom" name="nom" placeholder="Smith" />
                    </div>
                </div>

                <div class="field">
                    <label for="prenoms" class="label">Prénom(s)</label>
                    <input type="text" class="input" id="prenoms" name="prenoms" placeholder="Philippe, Auguste, Laurent" />
                </div>

                <div class="field">
                    <label for="telephone" class="label">N°.Téléphone</label>
                    <input type="tel" class="input" id="telephone" name="telephone" placeholder="+33601020304" />
                </div>

                <div class="field">
                    <label for="region" class="label">Région</label>
                    <input type="text" class="input" id="region" name="region" placeholder="Normandie, Eure" />
                </div>

                <input type="submit" class="button">
            </form>    
                
        </div>

        <footer>
            <h4> Groppo, par Thomas LERAY 2024 </h4>
        </footer>

    </body>

</html>