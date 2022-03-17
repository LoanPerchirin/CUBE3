<?php

require ('database.php');

if(isset($_POST['enregistrerConnexion'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

        $user_pseudo = $_POST['pseudo'];
        $user_password = $_POST['mdp'];


        $checkIfUserExist = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
        $checkIfUserExist->execute(array($user_pseudo));


        if($checkIfUserExist->rowCount() > 0){

            $usersInfos = $checkIfUserExist->fetch();

            if(password_verify($user_password, $usersInfos['mdp'])){

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['email'] = $usersInfos['email'];

                header('Location: index.html');

            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }
        }else{
            $errorMsg = "Votre pseudo est incorrect...";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}