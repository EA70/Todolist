<?php


$user = 'root';
$mdp = '' ;

try {
    //connexion à la base de données
    $bdd = new PDO ('mysql:host=localhost; dbname=sql', $user, $mdp);
} catch (PDOException $error) {
    echo 'Cause erreur : ' .$error->getMessage();
    die () ; //Arret de l'éxecution du code
}
