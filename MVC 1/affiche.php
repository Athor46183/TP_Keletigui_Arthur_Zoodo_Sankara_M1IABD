<?php

 require('db.php');
 $posts=[];
if(isset($_GET['id'])){
  if($_GET['id']==0){

    $posts = Article();

  }elseif($_GET['id']==1){
    $posts = Sport();
  }elseif($_GET['id']==2){
    $posts = Sante();
  }elseif($_GET['id']==3){
    $posts = Education();
  }elseif($_GET['id']==4){
   $posts=Politique();
  }
}



require('site.php');
?>