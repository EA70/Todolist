<?php

    $sql = 'SELECT id, tache FROM todolist ORDER BY id ASC' ;
    $toutesLesTaches = $bdd->prepare($sql);
    $toutesLesTaches->execute();

    $resultat = $toutesLesTaches->fetchAll(PDO::FETCH_ASSOC);

    