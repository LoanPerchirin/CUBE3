<?php

include 'database.php';

$email = $_POST ['email'];
$firstname = $_POST ['firstname'];
$surname = $_POST ['surname'];
$objet = $_POST ['objet'];
$message = $_POST ['message'];

echo 'Email: ' .$_POST ['email'].'<br>';
echo 'Firstname: ' .$_POST ['firstname'].'<br>';
echo 'Surname: ' .$_POST ['surname'].'<br>';
echo 'Objet: ' .$_POST ['objet'].'<br>';
echo 'Message: ' .$_POST ['message'].'<br>';    /*modif : db -> bdd */
    
    try{
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

        $query = $bdd->prepare("
            INSERT INTO formulaire(emailFormulaire, prenomFormulaire, nomFormulaire, objetFormulaire, messageFormulaire)
            VALUES(:email, :prenom, :nom, :objet, :message)");
        $query->bindParam(':email', $email);
        $query->bindParam(':prenom', $firstname);            
        $query->bindParam(':nom', $surname);
        $query->bindParam(':objet', $objet);
        $query->bindParam(':message', $message); 
        $query->execute();
        
        header("Location:formulaire_contact.php#contact");
    }catch(PDOException $erreur){
        echo 'Impossible de traiter les donnÃ©es. Erreur : '.$erreur -> getMessage();
    }