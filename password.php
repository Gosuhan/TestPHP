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
        
        <!-- Bien évidemment, il est possible d'ajouter le code ci-dessous dans la même page que le formulaire
        (chemin (action) à modifier). 
        Voir le sublimer en mettant une condition (tjrs dans formulaire_password.php) du style :
        if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "ikki") { ... -->

        <?php
            if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "ikki") {
                //print_r($_POST); // Affiche le conternu d'une superglobale et voir ce qu'elle contient si besoin
        ?>
            <!-- ajout HTML plutôt que "echo" pour le style ou autre -->
            <h2>Mot de pass reconnu !</h2>
            <h3><strong>Bonjour Agent H</strong></h3>
        <?php
                echo "Voici la clé secrète : 0794-0943-4342";
            } else {
                //print_r($_POST); // Affiche le conternu d'une superglobale et voir ce qu'elle contient si besoin
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