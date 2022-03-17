<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Flixnet</title>
    <link rel='stylesheet' href='main.css'>
    <script type='text/javascript' src='script.js' defer></script>
</head>

<body>
      <!--Header correspond à l'en-tête de la page-->
   <?php
      require_once('header.php');
   ?>
     <!--fin Header-->

    <!--Début Section-->
    <section id='sectionAccueil'>

      <div class='compartimentAccueil'></div>
          <div class='titreAccueil'>
            <h2 class='indicateurAccueil'>Nouveautés</h2>
          </div>
          <div class='carousselAccueil'>

                <div class='wrapper'>
                  <?php
                    require_once('carouselNouveaute.php');
                  ?>
                </div><!--COMPARTIMENTNOUVEAUTÉ-->
              </div>


      <div class='compartimentAccueil'></div>
          <div class='titreAccueil'>
            <h2 class='indicateurAccueil'>Explorer</h2>
          <div>
          <div class='carousselAccueil'>

            <div class='wrapper'>
            <?php
                    require_once('carouselExplorer.php');
                  ?>
            </div>
          </div><!--COMPARTIMENTWATCHLIST-->

        <div class='compartimentAccueil'></div>
          <div class='titreAccueil'>
            <h2 class='indicateurAccueil'>Mes films</h2>
          <div>
          <div class='carousselAccueil'>

            <div class='wrapper'>
            <?php
                    require_once('carouselMesFilms.php');
                  ?>
            </div>
          </div><!--COMPARTIMENTWATCHLIST-->

    

  
          <div class='carousselAccueil'>

    <div class='compartimentAccueil'></div>
          <div class='titreAccueil'>
            <h2 class='indicateurAccueil'>Watchlist</h2>
          <div>

            <div class='wrapper'>
            <?php
                    require_once('carouselWatchlist.php');
                  ?>
            </div>
          </div><!--COMPARTIMENT WATCHLIST-->

        </div><!--COMPARTIMENTACCUEIIL-->


    </section> 
    <!--Fin Section-->

<!--Début Footer-->
    <?php
      require_once('footer.php');
    ?>
<!--Fin Footer-->
</body>


</html>