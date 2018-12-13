<?php
	
// verbinding met de server
require_once "server.php";

// check if loggedin
include "welcomelogincheck.php";

var_dump($_POST);

if(isset($_POST['bid'])) {
	$id = $_GET['id'];
	$bid = $_POST["bid"];
	$sql = "INSERT INTO `bids`(`bid`,`user_id`,`product_id`)
	VALUES ('$bid'," . $_SESSION['id'] . ",'$id')";
}	
// connection to the database
if(!empty($_POST['bid'])){
	$result=mysqli_query($link, $sql);
	//header('Location: bidpage.php');
	
	
if(!$result) {
	printf("Error: %s\n", mysqli_error($link));
 } 
}
mysqli_close($link); 


?>