<?php
$servername = "localhost";
$database = "mglsi_news";
$username = "mglsi_user";
$password = "passer";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));
// Check connection


//echo "Connected successfully";
//mysqli_close($conn);
?>