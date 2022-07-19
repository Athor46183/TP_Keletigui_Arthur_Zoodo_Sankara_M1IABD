<?php

function Article(){
    include('db.php');
    $req="SELECT titre,contenu from Article ";

    $resultat=mysqli_query($conn,$req);
    if(mysqli_num_rows($resultat)){ 
    while($ligne=mysqli_fetch_assoc($resultat)){
        
        echo "<div id='article'><h2 class='titre'> " .$ligne["titre"]. "</h2>";
        echo "<p class='tx'> " .$ligne["contenu"]. "</p></div>";


    ;}
    
}else{ echo "<div id='article'>Pas d'article disponible</div>";}
}

function ArtSport(){
    include('db.php');
    $req="SELECT titre,contenu from Article where categorie=1";

    $resultat=mysqli_query($conn,$req);
    if(mysqli_num_rows($resultat)){ 
    while($ligne=mysqli_fetch_assoc($resultat)){
        
        echo "<div id='article'><h2 class='titre'> " .$ligne["titre"]. "</h2>";
        echo "<p class='tx'> " .$ligne["contenu"]. "</p></div>";


    ;}
    
}else{ echo "<div id='article'>Pas d'article disponible</div>";}
}

function ArtSante(){
    include('db.php');
    $req="SELECT titre,contenu from Article where categorie=2";

    $resultat=mysqli_query($conn,$req);
    if(mysqli_num_rows($resultat)){ 
    while($ligne=mysqli_fetch_assoc($resultat)){

        echo "<div id='article'><h2 class='titre'>" .$ligne["titre"]. "</h2>";
        echo "<p class='tx'> " .$ligne["contenu"]. "</p></div>";



    ;}
}else{ echo "Pas d'article disponible";}
}



function ArtEducation(){
    include('db.php');
    $req="SELECT titre,contenu from Article where categorie=3";

    $resultat=mysqli_query($conn,$req);
    if(mysqli_num_rows($resultat)){
    while($ligne=mysqli_fetch_assoc($resultat)){

        echo "<div id='article'><h2 class='titre'> " .$ligne["titre"]. "</h2>";
        echo "<p class='tx'> " .$ligne["contenu"]. "</p></div>";



    ;}
    }else{ echo "Pas d'article disponible";}
}




function ArtPolitique(){
    include('db.php');
    $req="SELECT titre,contenu from Article where categorie=4";

    $resultat=mysqli_query($conn,$req);
    if(mysqli_num_rows($resultat)){
    while($ligne=mysqli_fetch_assoc($resultat)){

        echo "<div id='article'><h2 class='titre'> " .$ligne["titre"]. "</h2>";
        echo "<p class='tx'>" .$ligne["contenu"]. "</p></div>";



    ;}
}else{ echo "Pas d'article disponible";}
}


?>