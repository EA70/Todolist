<?php

    require_once('./db/connect.php');
    require_once('./api/action.php');
    require_once('./api/ajoutTacheAction.php');
    require_once('./api/deleteAllAction.php');
   

?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('./includes/head.php'); ?>
<body>

<div class="container mb-5">
    <h1 class="display-4 mt-5 text-center">ToDo List</h1>


    <div class="row mb-4 mt-3">
        <div class="col-md-8 mx-auto">

        
        <?php 
                    if (isset($erreur)) {

                        echo ' <div class="alert alert-danger text-center" role="alert"> ' . $erreur.'</div> ';
                        $erreur = "";
                        
                    }
                ?>

            <form method="post">
                <input type="text" name="tache" id="" class="form-control me-3" placeholder="Ajouter une tache"> 
                <button type="submit" name="validate" class="btn btn-danger mt-2">Ajouter Tache </button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Numero Taches</th>
                    <th scope="col">Taches à réaliser</th>
                    <th scope="col">Actions Tache</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($resultat as $tache ) {
                    ?>
                        <tr>
                            <td> <i class="fa fa-asterisk"></i> </td>
                            <td> <?= $tache['tache']; ?> </td>
                            <td> 
                                <a href="./editTache.php?id=<?= $tache['id']; ?>" class="me-4" > <i class="fa fa-edit btn btn-primary"></i> </a>
                                <a href="./deleteTache.php?id=<?= $tache['id']; ?>"><i class="fa fa-times-circle btn btn-danger"></i> </a> 

                            </td>
                        </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>

            <div>
                <form method="post">
                    <button type="submit" name="deleteAll" class="btn btn-danger" >Supprimer toutes les taches</button>
                </form>
            </div>

        </div>
    </div>
</div>

    
</body>
</html>