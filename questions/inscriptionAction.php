<?php
session_start();
require ('database.php');

if(isset($_POST['enregistrerInscription'])){

    if(!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])){

        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $user_email = htmlspecialchars($_POST['email']);

        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM utilisateurs WHERE pseudo = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mdp, email) VALUES(?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_password, $user_email));

            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, email FROM utilisateurs WHERE pseudo = ? AND email = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));

            $userInfos = $getInfosOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];
            $_SESSION['email'] = $userInfos['email'];

            header('Location: index.html');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site...";
        }



    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}