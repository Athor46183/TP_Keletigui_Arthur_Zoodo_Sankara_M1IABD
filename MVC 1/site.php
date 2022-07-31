<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>site</title>
    <link rel="stylesheet" href="site.css" type="text/css">
</head>
<body>

<header>
   <h1>SITE D'ACTUALITE DU MIABD</h1> 
</header>
   
<div id="inter">
    <div id=menu>
       
    <p class="cate">CATEGORIE</p>
    
    <a href="affiche.php?id=0">tout</a><br>
    <a href="affiche.php?id=1">Sport</a><br>
    <a href="affiche.php?id=2">Sante</a><br>
    <a href="affiche.php?id=3">Education</a><br>
    <a href="affiche.php?id=4">Politique</a><br>

   
    </div>
       
    <?php
    	foreach ($posts as $post) {
    	?>
        	<div id="article">
            	<h3>
                	<?php echo htmlspecialchars($post['titre']); ?>
                	
            	</h3>
            	<p>
                	<?php
                	
                   echo nl2br(htmlspecialchars($post['contenu'])); 
                	
                	?>
                	<br />
                	
            	</p>
                </div>
    	<?php
    	} 
    	?> 

    

    
</div>
</body>
</html>