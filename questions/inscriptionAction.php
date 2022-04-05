<?php
session_start();
require ('database.php');

if(isset($_POST['enregistrerInscription'])){

    if(!empty($_POST['pseudoUtilisateur']) && !empty($_POST['mdpUtilisateur']) && !empty($_POST['emailUtilisateur'])){

        $user_pseudo = htmlspecialchars($_POST['pseudoUtilisateur']);
        $user_password = password_hash($_POST['mdpUtilisateur'], PASSWORD_DEFAULT);
        $user_email = htmlspecialchars($_POST['emailUtilisateur']);

        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudoUtilisateur FROM utilisateur WHERE pseudoUtilisateur = ?');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO utilisateur(pseudoUtilisateur, mdpUtilisateur, emailUtilisateur) VALUES(?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_password, $user_email));

            $getInfosOfThisUserReq = $bdd->prepare('SELECT Id_Utilisateur , pseudoUtilisateur, emailUtilisateur FROM utilisateur WHERE pseudoUtilisateur = ? AND emailUtilisateur = ?');
            $getInfosOfThisUserReq->execute(array($user_pseudo, $user_email));

            $userInfos = $getInfosOfThisUserReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['Id_Utilisateur '];
            $_SESSION['pseudo'] = $userInfos['pseudoUtilisateur'];
            $_SESSION['email'] = $userInfos['emailUtilisateur'];

            header('Location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site...";
        }



    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}