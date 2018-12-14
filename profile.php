<?php

// include server
require_once "server.php";

//include logincheck
require_once "welcomelogincheck.php";

	$username = $_GET['id'];
	$query= "SELECT username FROM users WHERE username = '$username' ";
	echo "<div class='col-md-2 col-md-offset-5'><h2>profile of: <b>$username</b></h2></div>"



?>