<?php

    // Vérification de l'id passer en paramètres 
if (isset($_GET['id']) AND !empty($_GET['id'])) {

    $idTache = strip_tags($_GET['id']);

    //on vérifie si l'id existe reelement dans la base de données 
    $sql = 'SELECT * FROM todolist WHERE id = ?';
    $idVerif = $bdd->prepare($sql);
    $idVerif->execute(array($idTache));

    
    if ($idVerif->rowCount() > 0 ) {

        $sql = 'DELETE FROM todolist WHERE id = ?';
        $suppresion = $bdd->prepare($sql);
        $suppresion->execute(array($idTache));
        header('Location: index.php');
    } else {
        $erreur = " cet id n'existe pas";
    }


} else {
    $erreur = " Impossible de supprimer ! ";

}


