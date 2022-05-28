<?php

    require_once('./db/connect.php');
    require_once('./api/editAction.php');

    

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('./includes/head.php'); ?>
<body>

    <div class="container">
        <div class="row">
            <div class="row mb-4 mt-3">
                <div class="col-md-8 mx-auto">
                    <form method="post">
                       
                        <input type="text" name="tache" value="<?= $tacheOfId ?>"  id="" class="form-control me-3" placeholder="Ajouter une tache"> 
                        <button type="submit" name="validate" class="btn btn-danger mt-2">Modifier </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>