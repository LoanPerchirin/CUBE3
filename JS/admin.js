let compteurShowlist = 2;
let compteurShowlist2 = 2;


function showList(){

    if(compteurShowlist%2 == 0){
        document.querySelector('#listeUtilisateurs').style.display = "flex";
        compteurShowlist ++;
    }
    else{
        document.querySelector('#listeUtilisateurs').style.display = "none"
        compteurShowlist ++;
    }

}

function showList2(){

    if(compteurShowlist2%2 == 0){
        document.querySelector('#listeInscription').style.display = "flex";
        compteurShowlist2 ++;
    }
    else{
        document.querySelector('#listeInscription').style.display = "none"
        compteurShowlist2 ++;
    }

}