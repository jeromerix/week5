<?php

// include server
require_once "server.php";

	// session id variable
	$id = $_get['id'];
	$query= "SELECT id FROM products WHERE id = '$id' ORDER BY id DESC";
	$result = $link->query($query);
if($result-> num_rows > 0){
	while($row = $result->fetch_object()){
	echo  $row->bid. "<br>";
	echo "<hr>";
	}
	}else{
	echo"NO BIDS FOUND!";
	echo"<hr>";
}



?>