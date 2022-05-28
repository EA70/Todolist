<?php

  if (isset($_POST['validate'])) {
        if (isset($_POST['tache']) AND !empty($_POST['tache'])) {

            $tache = strip_tags($_POST['tache']);

            // On vérifie sur la tache existe dejà
            
            $sql = 'SELECT tache FROM todolist WHERE tache = ?';
            $checkingTacheExist = $bdd->prepare($sql);
            $checkingTacheExist->execute(array($tache));

            if ($checkingTacheExist->rowCount() == 0) {
                $sql = 'INSERT INTO todolist (tache) VALUES (?)';
                $insertTache = $bdd->prepare($sql);
                $insertTache->execute(
                    array(
                        $tache
                    )
                );
                //redirection vers index
                header('Location: index.php');
            } else {
                echo "existe deja " ;
            }



            


        } else {
            $erreur = " Veuillez écrire une tache à ajouter ! ";
        }
  }