<?php

function Article(){
    try {
        $database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $statement = $database->query(
        "SELECT titre,contenu from Article"
    );
    
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'titre' => $row['titre'],
            'contenu' => $row['contenu'],
        ];
    
        $posts[] = $post;
    }
     return $posts;
}

function Sport(){
    try {
        $database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $statement = $database->query(
        "SELECT titre,contenu from Article where categorie=1"
    );
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'titre' => $row['titre'],
            'contenu' => $row['contenu'],
        ];
    
        $posts[] = $post;
    }
     return $posts;
}

function Sante(){
    try {
        $database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $statement = $database->query(
        "SELECT titre,contenu from Article where categorie=2"
    );
    
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'titre' => $row['titre'],
            'contenu' => $row['contenu'],
        ];
    
        $posts[] = $post;
    }
     return $posts;
}

function Education(){
    try {
        $database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $statement = $database->query(
        "SELECT titre,contenu from Article where categorie=3"
    );
    
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'titre' => $row['titre'],
            'contenu' => $row['contenu'],
        ];
    
        $posts[] = $post;
    }
     return $posts;
}

function Politique(){
    try {
        $database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $statement = $database->query(
        "SELECT titre,contenu from Article where categorie=4"
    );
    
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'titre' => $row['titre'],
            'contenu' => $row['contenu'],
        ];
    
        $posts[] = $post;
    }
     return $posts;
}

?>