<?php
    // Test si il y a un fichier d'envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {

        // On test si le fichier n'est pas trop volumineux
        if ($_FILES['monfichier']['size'] <= 1000000) {

            // Test si l'extension est autorisé
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_uplaod = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($extension_uplaod, $extensions_autorisees)) {

                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' .  // J'ai créé un dossier "uploads" dans TestPHP !!!
                basename($_FILES['monfichier']['name']));
                // OU: move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/newName.jpg'); SI CHGT NOM FICHIER TELECHARGE
                // Si un fichier porte le même nom, il écrase le précédent !! = Il est alors nécessaire de choisir le nom à la place du client (compteur qui s'incrémente par exemple pour éviter doublon).
                echo "L'envoi de votre fichier a bien été effectué !";
            }
        }

    }
?>

<!-- Lorsque vous mettrez le script sur Internet à l'aide d'un logiciel FTP, vérifiez que le dossier « uploads » sur le serveur existe et qu'il a les droits d'écriture. Pour ce faire, sous FileZilla par exemple, faites un clic droit sur le dossier et choisissez « Attributs du fichier ».
Cela vous permettra d'éditer les droits du dossier (on parle de CHMOD). Mettez les droits à 733, ainsi PHP pourra placer les fichiers uploadés dans ce dossier. -->