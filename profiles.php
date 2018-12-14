<html>
<head>
<title>user profiles</title>
</head>
<body>

<center><h1>Profiles</h1><p><a class="btn btn-primary" href="welcome.php" role="button">go back</a></p></center>
<hr></div>



<?php

// include server
require_once "server.php";

//include logincheck
require_once "welcomelogincheck.php";

// data ordenen op id
	$query = "SELECT username FROM users";
	$result = $link->query($query);
	
// data ophalen
if($result-> num_rows > 0){
	while($row = $result->fetch_object()){
		echo "<div class='col-md-2 col-md-offset-5'>";
		echo "Username:&nbsp<a href='profile.php?id=" .$row->username ."'>".$row->username ."</a>&nbsp<br>";
		echo "<hr>";
		echo "</div>";
}
	} else{
		echo"NO DATA FOUND!";
		  }

?>
</body>
</html>