<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Casting</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
    include('header.php');
?>



<!-- DÉBUT SECTION -->

<!-- FIN SECTION -->

<section>

    <div class="compartimentPhotoInfo">
        <img id="photoCasting" src="images/ProfilBlanc.png" alt="photoCasting">

        <div id="infoCasting">
            <h2 class="marginEnMoins">Nom Casting</h2>

            <p class="marginEnMoins">Naissance : (code PHP)</p>
            <p class="marginEnMoins">Âge : (code PHP)</p>

            <h3 class="marginEnMoins">Métier</h3>

            <p class="marginEnMoins">(code PHP)</p>

            <h3 class="marginEnMoins">Nationalité</h3>

            <p class="marginEnMoins">(code PHP)</p>

        </div>

    </div>

    <div id="infoCastingBas">

        <div class="column">

            <h3 class="marginEnMoins">Années de carrière</h3>

            <p class="marginEnMoins">(code PHP)</p>

        </div>

        <div class="column">

            <h3 class="marginEnMoins">Films et séries</h3>

            <p class="marginEnMoins">(code PHP)</p>

        </div>

        <div class="column">

            <h3 class="marginEnMoins">Prix</h3>

            <p class="marginEnMoins">(code PHP)</p>

        </div>

    </div>

    <h2 class="text-align-center">Biographie</h2>

        <p class="text-align-center" id="biographie"> 
            insérer texte PHP insérer texte PHP insérer texte PHP insérer texte PHP
            insérer texte PHP insérer texte PHP insérer texte PHP insérer texte PHP
            insérer texte PHP insérer texte PHP insérer texte PHP insérer texte PHP
            insérer texte PHP insérer texte PHP.

        </p>



    <h2 class="text-align-center">Filmographie</h2>

    <div id="compartimentFilmographie">

        <div class="column">
            <img src="" alt="Image Film" class="imageFilm">
            <h2 class="marginEnMoins">Film PHP</h2>
        </div>
        <div class="column">
            <img src="" alt="Image Film" class="imageFilm">
            <h2 class="marginEnMoins">Film PHP</h2>
        </div>
        <div class="column">
            <img src="" alt="Image Film" class="imageFilm">
            <h2 class="marginEnMoins">Film PHP</h2>
        </div>
        <div class="column">
            <img src="" alt="Image Film" class="imageFilm">
            <h2 class="marginEnMoins">Film PHP</h2>
        </div>

    </div>

    <h2 class="text-align-center">Commentaires</h2>


        <form id="envoyerUnCommentaire" action="" method="POST">

            <textarea name="commentaire" id="" cols="30" rows="5">    
            </textarea>

            <button class="boutons">Envoyer</button>

        </form>

    
    <br><br>


    <!-- Mettre une boucle while en php, afin de générer
        les commentaire à coup d'echo récupérant
        les infos de la BDD inscritent dans des variables.
    -->
    <div class="commentaires">
        <h2>CODE PHP PHP</h2>
        <p>code php</p>
    </div>



</section>

<?php
    include("footer.php");
?>


</body>
</html>