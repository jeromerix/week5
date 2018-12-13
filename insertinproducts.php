<?php
	
// Initialize the session
session_start();

// verbinding met de server
include "server.php";

// check if loggedin
include"welcomelogincheck.php";


	$price = $_POST["price"];
	$articles = $_POST["articles"];
	$info = $_POST["info"];
	
	$sql = "INSERT INTO `products`(`seller_id`,`price`,`articles`, `info`,`timestamp`)
	VALUES (" . $_SESSION['id'] . ",'$price', '$articles','$info',CURRENT_TIMESTAMP)";
	
// connection to the database
if(!empty($_POST['price'])&& $_POST['articles']&& $_POST['info']){
	$result=mysqli_query($link, $sql);
	header('Location: insert.php');
	
	
if(!$result) {
	printf("Error: %s\n", mysqli_error($link));
 } 
}

mysqli_close($link); 

?>