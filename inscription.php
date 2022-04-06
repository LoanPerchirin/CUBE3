<?php
 require('questions/inscriptionAction.php');
 require('questions/connexionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flixnet-Connexion/inscription</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>

    <!--Header correspond à l'en-tête de la page-->
   
    <header>

<div class="sous-header">
        <a class='goBack' href="index.php">
          <img id="logodusite" src="images/flixnetblanc3.png" alt="Logo FlixNet">
          <h1>FlixNet</h1>
        </a>
</div>

</header>


   <!--fin Header-->


  
   
<!-- <div id="compartimentInscriptionConnexion">   -->



  <h2 class="text-align-center">Inscrivez-vous à Flixnet</h2>


  <div class="text-align-center">
    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
  </div>


    <form action="" method="POST">

        <div class="cssFormulaire">

            <label class="label">Pseudonyme :</label> 
            <input class="inputFormInscription" type="text" name="pseudoUtilisateur" placeholder="Pseudonyme" required class="txtBox" />
    
            <label class="label">E-Mail :</label>        
            <input class="inputFormInscription" type="email" name="emailUtilisateur" placeholder="E-Mail" required class="txtBox"/>

            <label class="label">Mot de passe :</label> 
            <input class="inputFormInscription" type="password" name="mdpUtilisateur" placeholder="Mot de passe" required class="txtBox" />

        </div>

        <div class="annuler-enregistrer">
            <input type="reset" class="btn" value="Annuler"/>     
            <input type="submit" class="btn" value="Enregistrer" name="enregistrerInscription" /> 
        </div>
    </form>



      <h2 class="text-align-center">Connectez-vous à FlixNet</h2>


      <div class="text-align-center"> 
        <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'</p>';}?>
      </div>
          <form action="" method="POST">

              <div class="cssFormulaire">

                  <label class="label">Pseudonyme :</label> 
                  <input class="inputFormInscription" type="text" name="pseudoUtilisateur" placeholder="Pseudonyme" required class="txtBox" />

                  <label class="label">Mot de passe :</label> 
                  <input class="inputFormInscription" type="password" name="mdpUtilisateur" placeholder="Mot de passe" required class="txtBox" />

              </div>

              <div class="annuler-enregistrer">
                  <input type="submit" class="btn" value="Annuler"/>     
                  <input type="submit" class="btn" value="Connexion" name="enregistrerConnexion" /> 
              </div>
          </form>










<!--Début Footer-->
<?php 
    include('footer.php');
?>


</body>
</html>
