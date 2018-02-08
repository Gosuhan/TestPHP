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
        <h1>Bonjour !</h1>
        
        <p>
            Ton prénom est : <?php echo $_POST['prenom']; ?> !
        </p>

        <p>
            En es-tu certains ? Ou souhaites-tu le modifier en cliquant sur ce lien : <a href="formulaire.php">Clique ici</a>
            pour revenir à la page formulaire.php
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>