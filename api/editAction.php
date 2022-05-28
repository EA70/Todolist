<?php

// Vérification de l'id passer en paramètres 
if (isset($_GET['id']) AND !empty($_GET['id'])) {

    $idTache = strip_tags($_GET['id']);

    //on vérifie si l'id existe reelement dans la base de données 
    $sql = 'SELECT * FROM todolist WHERE id = ?';
    $idVerif = $bdd->prepare($sql);
    $idVerif->execute(array($idTache));

    
    if ($idVerif->rowCount() > 0 ) {
        $resultat = $idVerif->fetch();
        $tacheOfId = $resultat['tache'];
    } else {
        $erreur = " cette tache n'existe pas ! ";
    }


} else {
    $erreur = " cette tache n'existe pas ! ";

}

// Modification de la tache !

if (isset($_POST['validate'])) {
    
    if (!empty($_POST['tache'])) {
        //les données à mettre à jours
        $new_tache = strip_tags($_POST['tache']);

        $sql = 'UPDATE todolist SET tache = ? WHERE id = ?' ;
        $modifTache = $bdd->prepare($sql);
        $modifTache->execute(array(
            $new_tache,
            $idTache
        ));

        header('Location: index.php');
    } else {
        $erreur = "Vos champs sont vides ! ";
    }

}    