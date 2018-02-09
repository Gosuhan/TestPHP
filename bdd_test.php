<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');



// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
    ?>
        <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à 
        <?php echo $donnees['prix']; ?> euro !<br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à 
        <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php $donnees['possesseur']; ?> a laissé ces commentaires sur 
        <?php $donnees['nom']; ?> : <em><?php $donnees['commentaires']; ?></em>
        </p>
    <?php
    }
    
    $reponse->closecursor(); // Termine le traitement de la requête
    
?>