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
        
        <?php
            if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "ikki") {
        ?>
            <h2>Mot de pass reconnu !</h2>
            <h3><strong>Bonjour Agent H</strong></h3>
        <?php
                echo "Voici la clé secrète : 0794-0943-4342";
            } else {
                echo "Vous devez indiquez le bon mot de passe !!";
            }
        ?>

    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>