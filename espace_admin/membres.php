<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=flixnet;charset=utf8','root','');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
$requete = "SELECT * FROM eleves";
            $utilisateur = $db->query($requete)->fetchAll(PDO::FETCH_ASSOC);
            foreach($flixnet as $utilisateur){}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les membres</title>
</head>
<body>
    
</body>
</html>