<?php

// include server
require_once "server.php";

//include logincheck
include "welcomelogincheck.php";

	$username = $_GET['id'];
	$query= "SELECT username FROM users WHERE username = '$username' ";
	echo " profile of: $username"



?>