<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
</head>
<body>
    <p>Bonjour</p>
    <a href="membres.php">Afficher tous les membres</a>
    <a href="logout.php">Déconnexion</a>
</body>
</html>