<?php

require ('database.php');

if(isset($_POST['enregistrerConnexion'])){

    if(!empty($_POST['pseudoUtilisateur']) AND !empty($_POST['mdpUtilisateur'])){

        $user_pseudo = $_POST['pseudoUtilisateur'];
        $user_password = $_POST['mdpUtilisateur'];


        $checkIfUserExist = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudoUtilisateur = ?');
        $checkIfUserExist->execute(array($user_pseudo));


        if($checkIfUserExist->rowCount() > 0){

            $usersInfos = $checkIfUserExist->fetch();

            if(password_verify($user_password, $usersInfos['mdpUtilisateur'])){

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['Id_Utilisateur '];
                $_SESSION['pseudo'] = $usersInfos['pseudoUtilisateur'];
                $_SESSION['email'] = $usersInfos['emailUtilisateur'];

                header('Location: index.php');

            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }
        }else{
            $errorMsg = "Votre pseud est incorrect...";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}