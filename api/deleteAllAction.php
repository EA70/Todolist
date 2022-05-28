<?php

   

  if (isset($_POST['deleteAll'])) {

    $sql = 'DELETE FROM todolist';
    $deleteAll = $bdd->prepare($sql);
    $deleteAll->execute();
    header('Location: index.php');

  } 