<?php
session_start();
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id']; 
    $recupUser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $recupUser->execute(array($getid));
    }if($recupUser->rowCount() > 0){
}else{
    echo "L'identifiant n'a pas été récupéré";
}
?>