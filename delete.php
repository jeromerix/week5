<?php
// database connection
require_once "server.php";

// check if loggedin
require_once "welcomelogincheck.php";

	// selecteer op id en delete
	$id = $_GET['id'];
if (isset($_GET['id'])){
	$sql="DELETE FROM `products` WHERE id= $id";
	$result = mysqli_query($link, $sql);
	header('Location: myarticles.php');
}
?>