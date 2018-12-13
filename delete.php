<?php
// database connection
include('server.php');

// check if loggedin
include"welcomelogincheck.php";

	// selecteer op id en delete
	$id = $_GET['id'];
if (isset($_GET['id'])){
	$sql="DELETE FROM `products` WHERE id= $id";
	$result = mysqli_query($link, $sql);
	header('Location: myarticles.php');
}
?>