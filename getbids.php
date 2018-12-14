<?php

// include server
require_once "server.php";

	// session id variable
if(isset($_GET['id']))
	$id = $_GET['id'];
	$query = "SELECT bid FROM bids WHERE product_id = '$id' ORDER BY id DESC";
	$result = $link->query($query);
if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
	echo  "<div class='col-md-2 col-md-offset-5'>&euro;".$row["bid"]."</div>";
	echo "<hr>";
	}
	}else{
	echo"<div class='col-md-2 col-md-offset-5'>NO BIDS FOUND!</div>";
	echo"<hr>";
}



?>