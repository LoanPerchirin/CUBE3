<?php include 'questions/contacterAction.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    
    <!--HEADER-->
        <?php require_once('includes/header.php'); ?>
    <!--HEADER-->


    <div>
        <h1>Contactez-nous !</h1>
    </div>
    <form method="POST" >
        <div>
            <label for="email">Adresse-mail: </label>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
        </div>
        <label for="name">Nom & prénom: </label>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
            <input type="text" name="surname" id="surname" placeholder="Nom" required>
        </div>
        <div style=>
            <label for="object">Objet: </label>
            <input type="text" name="objet" id="objet" placeholder="Objet" required>
        </div>
        <div>
            <label for="object">Message: </label>
            <input type="text" name="message" id="message" placeholder="Message" required>
        </div>
        <div>
            <input type="submit" type="submit" value="Send!">
        </div>
    </form>




    <!--Début Footer-->
        <?php require_once('includes/footer.php'); ?>
    <!--Fin Footer-->


</body>
</html>