<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       
    </header>
    
    <!-- Le menu via une inclusion -->
    
<?php include("menus.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Veuillez taper votre prénom :</h1>
        
        <form method="post" action="cible.php">
            <p>
                <input type="text" name="prenom" />
                <input type="submit" name="valider" />
            </p>
        </form>

        <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
            <p>Formulaire d'envoi de fichier
            <input type="file" name="monfichier" />
            <input type="submit" value="Envoyer le fichier" />
            </p>
        </form>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>