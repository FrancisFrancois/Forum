<?php 
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="class container"></div>
    <?php 
        if(isset($errorMsg)){ echo $errorMsg; }

        if(isset($getHisQuestions)){

            ?>
            <div class="card">
                <div class="class card-body">
                    <h4>@<?= $user_pseudo; ?></h4>
                    <hr>
                    <p><?= $user_lastname . ' ' . $user_firstname?></p>
                </div>
            </div>
            <br>
            <?php
            while($question =$getHisQuestions->fetch()){
                ?>
                <div class="class card-header">
                    <?= $question['titre']; ?>
                </div>
                <div class="class card-body">
                    <?= $question['description']; ?>
                </div>
                <div class="class card-footer">
                    <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication']; ?>
                </div>
                <br>
                <?php

            }




        

        }
    ?>
    </div>



</body>
</html>