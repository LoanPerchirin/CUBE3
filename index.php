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
        <?php
        require_once('explorerINC/carouselNouveaute.php');
        ?>

            <?php
                    require_once('carouselExplorer.php');
                  ?>
            </div>
          </div><!--COMPARTIMENTWATCHLIST-->

            <?php
                require_once('mesFilmINC/carouselMesFilms.php');
            ?>

            <?php
                require_once('mesFilmINC/carouselWatchlist.php');
            ?>


    </section> 
    <!--Fin Section-->

<!--Début Footer-->
    <?php
      require_once('footer.php');
    ?>
<!--Fin Footer-->
</body>


</html>