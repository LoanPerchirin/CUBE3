
<?php
echo"
<header>

    <nav>
    <div class='sous-header'>
          <ul id='menu-demo2'>
                <li><a href='#'><img id='logoMenu' src='images/LogoMenu.png' alt='Logo Menu'></a>
                    <ul>
                        <li><a href='index.php'>Accueil</a></li>
                        <li><a href='explorer.php'>Explorer</a></li>
                        <li><a href='mesFilms.php'>Mes flims</a></li>
                        <li><a href='contact.php'>Contact</a></li>
                    </ul>
                </li>
            </ul>  
            <a id='linkAccueil' href=''>
              <img id='logodusite' src='images/flixnetblanc3.png' alt='Logo FlixNet'>
    
                <h1 id='titre'>FlixNet</h1>
            </a>
    
    </div>
</nav>
    
    
    <div class='sous-header'>
                <a href='index.php'><div class='bouton'>Accueil</div></a>
                <a href='explorer.php'><div class='bouton'>Explorer</div></a>
    
                <input id='recherche' onkeyup='search_element()' type='text'
                name='search' placeholder='Recherche'>
                <!-- https://fr.acervolima.com/barre-de-recherche-utilisant-html-css-et-javascript/#:~:text=La%20balise%20d'entr%C3%A9e%20est,'espace%20r%C3%A9serv%C3%A9%2C%20le%20nom%20. -->
    
    
                <a href='mesFilms.php'><div class='bouton'>Mes films</div></a>
                <a href='contact.php'><div class='bouton'>Nous contacter</div></a>
    
              </div>
              <div class='sous-header' id='header1'>
    
                <div class='utilisateur'> 
                    <a href='GestionDuProfil/GestionDuProfil.html' target='_bank'><img class='image' src='images/ProfilBlanc.png'></a>
                </div>
            </div>
            </div>
        </header>";

?>