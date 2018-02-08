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
        <h1>FBI</h1>
        <h4>Veuillez taper le mot de passe :</h4>
        
        <form action="password.php" method="post">
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
        </form>
        
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>