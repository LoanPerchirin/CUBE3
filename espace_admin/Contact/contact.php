<?php
$db = new PDO('mysql:host=localhost;dbname=flixnet;charset=utf8','root','');

$email = $_POST ['email'];
$firstname = $_POST ['firstname'];
$surname = $_POST ['surname'];
$objet = $_POST ['objet'];
$message = $_POST ['message'];

echo 'Email: ' .$_POST ['email'].'<br>';
echo 'Firstname: ' .$_POST ['firstname'].'<br>';
echo 'Surname: ' .$_POST ['surname'].'<br>';
echo 'Objet: ' .$_POST ['objet'].'<br>';
echo 'Message: ' .$_POST ['message'].'<br>';
    
    try{
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

        $query = $db->prepare("
            INSERT INTO formulaire(emailFormulaire, prenomFormulaire, nomFormulaire, objetFormulaire, messageFormulaire)
            VALUES(:email, :prenom, :nom, :objet, :message)");
        $query->bindParam(':email', $email);
        $query->bindParam(':prenom', $firstname);            
        $query->bindParam(':nom', $surname);
        $query->bindParam(':objet', $objet);
        $query->bindParam(':message', $message); 
        $query->execute();
        
        header("Location:formulaire_contact.php#contact");
    }
    catch(PDOException $erreur){
        echo 'Impossible de traiter les données. Erreur : '.$erreur -> getMessage();
    }
    var_dump($query);
?>