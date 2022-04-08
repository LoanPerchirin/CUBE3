<?php 

include('questions/database.php');

if(!isset($_GET['r']))     
{     
echo "<script language=\"JavaScript\">     
<!--      
document.location=\"$PHP_SELF?r=1&width=\"+screen.width+\"&Height=\"+screen.height;     
//-->     
</script>";     
}     
else {         
// Code to be displayed if resolutoin is detected     
     if(isset($_GET['width'])) {     
               // Resolution  detected     
               $width=$_GET['width'];
               if($width>=1920){
                    echo " 
                        <div class='titreAccueil'>
                            <h2 class='indicateurAccueil'>Explorer</h2>
                        </div>
                        <div class='carousselAccueil'>
                          <div class='wrapper'>";

                    echo"
                        <section id='section10'>
                        <a href='#section30' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

                    for($i=1;$i<=5;$i++){
                      $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
                      $img=$rep->fetch();
                      echo"<div style='display: flex;justify-content: center;' class='item'>
                              <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                          </div>";
                    }
                    echo"
                    <a href='#section20' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
                     </section>" ;
                     
                     echo"
                     <section id='section20'>
                     <a href='#section10' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
                     
                 for($i=8;$i>3;$i--){
                   $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
                   $img=$rep->fetch();
                   echo"<div style='display: flex;justify-content: center;' class='item'>
                           <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                       </div>";
                 }
                 echo"
                 <a href='#section30' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
                   </section>" ;

                   echo"
                     <section id='section30'>
                       <a href='#section20' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

               for($i=1;$i<=5;$i++){
                 $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
                 $img=$rep->fetch();
                 echo"<div style='display: flex;justify-content: center;' class='item'>
                         <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                     </div>";
               }
               echo"
                 <a href='#section10' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
                </div>
              </section>
              </div>
                    </div>" ;


               }else if($width<=1597&&$width>1341){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Explorer</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section10'>
                <a href='#section30' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=1;$i<=4;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section20' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section20'>
             <a href='#section10' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>4;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section30' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section30'>
               <a href='#section20' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=1;$i<=4;$i++){
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section10' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;


        }else if($width<=1341&&$width>938){
          echo " 
          <div class='titreAccueil'>
              <h2 class='indicateurAccueil'>Explorer</h2>
          </div>
          <div class='carousselAccueil'>
            <div class='wrapper'>";

      echo"
          <section id='section10'>
          <a href='#section30' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

      for($i=1;$i<=3;$i++){
        $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
        $img=$rep->fetch();
        echo"<div style='display: flex;justify-content: center;' class='item'>
                <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
            </div>";
      }
      echo"
      <a href='#section20' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
       </section>" ;
       
       echo"
       <section id='section20'>
       <a href='#section10' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
       
   for($i=8;$i>5;$i--){
     $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
     $img=$rep->fetch();
     echo"<div style='display: flex;justify-content: center;' class='item'>
             <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
         </div>";
   }
   echo"
   <a href='#section30' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
     </section>" ;

     echo"
       <section id='section30'>
         <a href='#section20' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

 for($i=1;$i<=3;$i++){
   $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
   $img=$rep->fetch();
   echo"<div style='display: flex;justify-content: center;' class='item'>
           <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
       </div>";
 }
 echo"
   <a href='#section10' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
  </div>
</section>
</div>
      </div>" ;


               }else if($width<=938&&$width>639){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Explorer</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section10'>
                <a href='#section30' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=1;$i<=2;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section20' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section20'>
             <a href='#section10' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>6;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section30' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section30'>
               <a href='#section20' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=1;$i<=2;$i++){
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section10' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;


               }else if($width<=639){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Explorer</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section10'>
                <a href='#section30' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=1;$i<=1;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section20' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section20'>
             <a href='#section10' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>7;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section30' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section30'>
               <a href='#section20' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=2;$i<=2;$i++){
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section10' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;
      }
     }     
     else {     
         echo "juste bad";
               // Resolution not detected     
     }     
}     
?>