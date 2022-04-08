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
  $rep=$bdd->query("SELECT lienFilm from film where newFilm=1");
  $img=$rep->fetch();
  if($img==true){    
// Code to be displayed if resolutoin is detected     
     if(isset($_GET['width'])) {     
               // Resolution  detected     
               $width=$_GET['width'];
               if($width>=1597){
                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Nouveautés</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section1'>
                <a href='#section3' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=4;$i<=8;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section2' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section2'>
             <a href='#section1' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>3;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section3' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section3'>
               <a href='#section2' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=4;$i<=8;$i++){
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section1' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;


               }else if($width<=1597&&$width>1341){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Nouveautés</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section1'>
                <a href='#section3' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=4;$i<=7;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section2' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section2'>
             <a href='#section1' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>4;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section3' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section3'>
               <a href='#section2' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=4;$i<=7;$i++){
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section1' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;

        }else if($width<=1341&&$width>938){

          echo " 
          <div class='titreAccueil'>
              <h2 class='indicateurAccueil'>Nouveautés</h2>
          </div>
          <div class='carousselAccueil'>
            <div class='wrapper'>";

      echo"
          <section id='section1'>
          <a href='#section3' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

      for($i=4;$i<=6;$i++){
        $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
        $img=$rep->fetch();
        echo"<div style='display: flex;justify-content: center;' class='item'>
                <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
            </div>";
      }
      echo"
      <a href='#section2' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
       </section>" ;
       
       echo"
       <section id='section2'>
       <a href='#section1' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
       
   for($i=8;$i>5;$i--){
     $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
     $img=$rep->fetch();
     echo"<div style='display: flex;justify-content: center;' class='item'>
             <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
         </div>";
   }
   echo"
   <a href='#section3' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
     </section>" ;

     echo"
       <section id='section3'>
         <a href='#section2' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

 for($i=4;$i<=6;$i++){
   $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
   $img=$rep->fetch();
   echo"<div style='display: flex;justify-content: center;' class='item'>
           <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
       </div>";
 }
 echo"
   <a href='#section1' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
  </div>
</section>
</div>
      </div>" ;

               }else if($width<=938&&$width>639){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Nouveautés</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section1'>
                <a href='#section3' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=4;$i<=5;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section2' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section2'>
             <a href='#section1' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>6;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section3' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section3'>
               <a href='#section2' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=4;$i<=5;$i++){
        //  $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section1' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
        </div>
      </section>
      </div>
            </div>" ;

               }else if($width<=639){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Nouveautés</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";

            echo"
                <section id='section1'>
                <a href='#section3' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

            for($i=4;$i<=4;$i++){
              $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
              $img=$rep->fetch();
              echo"<div style='display: flex;justify-content: center;' class='item'>
                      <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
                  </div>";
            }
            echo"
            <a href='#section2' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
             </section>" ;
             
             echo"
             <section id='section2'>
             <a href='#section1' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;
             
         for($i=8;$i>7;$i--){
           $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
           $img=$rep->fetch();
           echo"<div style='display: flex;justify-content: center;' class='item'>
                   <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
               </div>";
         }
         echo"
         <a href='#section3' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
           </section>" ;

           echo"
             <section id='section3'>
               <a href='#section2' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>" ;

       for($i=5;$i<=5;$i++){ 
         $rep=$bdd->query("SELECT lienFilm from film where id_film=$i and newFilm=1");
         $img=$rep->fetch();
         echo"<div style='display: flex;justify-content: center;' class='item'>
                 <img style='height: 192px;' src='$img[lienFilm]' alt='Describe Image'>
             </div>";
       }
       echo"
         <a href='#section1' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
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
}     
?>