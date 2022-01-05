<?php

require('actions/database.php');

//Récupérer l'identifiant de l'utilisateur
if(isset($_GET['id']) && !empty($_GET['id'])){

    //L'id de l'utilisateur
    $idOfUser = $_GET['id'];

    //Vérifier si l'utilisateur existe
    $checkIfUsersExists = $bdd->prepare('SELECT pseudo, nom, prenom FROM users WHERE id = ?');
    $checkIfUsersExists->execute(array($idOfUser));

    if($checkIfUsersExists->rowCount() > 0){

        //Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUsersExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['nom'];
        $user_firstname = $usersInfos['prenom'];

        //Récupérer toutes les questions publiées par l'utilisateur
        $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur = ? ');
        $getHisQuestions->execute(array($idOfUser));


    }else{
        $errorMsg = "Aucun utilisateur trouvé";
    }

}else{
    $errorMsg = "Aucun utilisateur trouvé";
}

