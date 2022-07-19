<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>site</title>
    <link rel="stylesheet" href="site.css" type="text/css">
    <script>
        function Asport(){
            var result = "<?php  include('affiche.php'); ArtSport();?>"
            document.getElementById("docu").innerHTML = result;
            
        }
        function Art(){
            var result = "<?php   Article();?>"
            document.getElementById("docu").innerHTML = result;
            
        }

        function Asante(){
            var result = "<?php   ArtSante();?>"
            document.getElementById("docu").innerHTML = result;
        }
        function AEducation(){
            var result = "<?php   ArtEducation();?>"
            document.getElementById("docu").innerHTML = result;
        }

        function Apolitique(){
            var result = "<?php   ArtPolitique();?>"
            document.getElementById("docu").innerHTML = result;
        }


    </script>
</head>
<body>

<header>
   <h1>SITE D'ACTUALITE DU MIABD</h1> 
</header>
   
<div id="inter">
    <div id=menu>
    <p class="cate">CATEGORIE</p>
    
    <button class="bt" onclick="Art()">tout</button><br>
    <button class="bt" onclick="Asport()">Sport</button><br>
    <button class="bt" onclick="Asante()">Sante</button><br>
    <button class="bt" onclick="AEducation()">Education</button><br>
    <button class="bt" onclick="Apolitique()">Politique</button><br>
    </div>
    <div id="docu"></div>

    
</div>
</body>
</html>