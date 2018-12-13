<?php

// include server
require_once "server.php";

//include bidpage
include "bidpage.php";


	$id = $_GET['id'];
	$query= "SELECT id FROM products WHERE id = '$id' ";



?>