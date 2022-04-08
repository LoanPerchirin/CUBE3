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
               if($width>639){
                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Watchlist</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";


                echo"
                <section id='section10000'>
                <div style='display: flex;justify-content: center;' class='item'>
                <img style='height: 192px;' src='https://m.media-amazon.com/images/M/MV5BOGZiY2E3ZGQtNDM3NS00ZGNkLTk1MzctNmZlNjJiM2I1NDQ0XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg' alt='Describe Image'>
              </div>
                <div style='display: flex;justify-content: center;'  class='item'>
                <img  style='height: 192px;' src='https://m.media-amazon.com/images/M/MV5BOGZiY2E3ZGQtNDM3NS00ZGNkLTk1MzctNmZlNjJiM2I1NDQ0XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg' alt='Describe Image'>
              </div>
              </section>


    </div>
    </section>
    </div>
</div>";

               }else if($width<=639){

                echo " 
                <div class='titreAccueil'>
                    <h2 class='indicateurAccueil'>Watchlist</h2>
                </div>
                <div class='carousselAccueil'>
                  <div class='wrapper'>";


                echo"
                <section id='section10000'>
                <a href='#section20000' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>  
                <div style='display: flex;justify-content: center;' class='item'>
                <img style='height: 192px;' src='https://m.media-amazon.com/images/M/MV5BOGZiY2E3ZGQtNDM3NS00ZGNkLTk1MzctNmZlNjJiM2I1NDQ0XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg' alt='Describe Image'>
              </div>
                <a href='#section20000' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
              </section>


              <section id='section20000'>
              <a href='#section10000' class='arrow__btnL' onclick= \"disableScroll()\">‹</a>
              <div style='display: flex;justify-content: center;' class='item'>
              <img style='height: 192px;' src='https://m.media-amazon.com/images/M/MV5BOGZiY2E3ZGQtNDM3NS00ZGNkLTk1MzctNmZlNjJiM2I1NDQ0XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg' alt='Describe Image'>
            </div>
              <a href='#section10000' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
            </section>

          <a href='#section10000' class='arrow__btnR' onclick= \"disableScroll()\">›</a>
    </div>
    </section>

            </div>
        </div>";
               }
     }     
     else {     
         echo "juste bad";
               // Resolution not detected     
     }     
}     
?>