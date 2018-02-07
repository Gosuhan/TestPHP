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
        <h1>Mon super site</h1>
        
        <p>
            <!-- Bonjour et Bienvenue sur mon super site <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> ! -->

            <!-- <?php
            if (isset($_GET['prenom']) AND isset($_GET ['nom'])) { // On a le nom et le prénom
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
            } else {
                echo 'Il faut renseigner un nom et un prénom !';
            }
            ?> -->

            <?php
            if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) {
                // 1. On force la convertion en nombre entier = Transtypage
                $_GET['repeter'] = (int) $_GET['repeter'];

                // 2. Le nombre doit être comptris entre 1 et 100 sinon il ne se passe rien
                if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <=100) {
                    for ($i = 0; $i < $_GET['repeter']; $i++) {
                        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
                    }
                }
            } else {
                echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
            }
            ?>
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>