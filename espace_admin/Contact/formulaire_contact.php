<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
    <div>
        <h1>Contactez-moi !</h1>
    </div>
    <form method="POST" action="contact.php">
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
</body>
</html>