<html>
<head>
<title>user profiles</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>Profiles</h1>
<hr>



<?php

// include server
require_once "server.php";

//include logincheck
include "welcomelogincheck.php";

// data ordenen op id
	$query = "SELECT username FROM users";
	$result = $link->query($query);
	
// data ophalen
if($result-> num_rows > 0){
	while($row = $result->fetch_object()){
		echo "Username:&nbsp<a href='profile.php?id=" .$row->username ."'>".$row->username ."</a>&nbsp<br>";
		echo "<hr>";
}
	} else{
		echo"NO DATA FOUND!";
		  }

?>
<p><a class="btn btn-primary" href="welcome.php" role="button">go back</a></p>
</body>
</html>