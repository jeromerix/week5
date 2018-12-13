<html>
<head>
<title>my articles</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<h1>My articles</h1>



<?php
 
// check if loggedin
include"welcomelogincheck.php";

// include server
include "server.php";

	// session id variable
	$userid = $_SESSION['id'];

	// data ordenen op id
	$query = "SELECT * FROM products WHERE seller_id = '$userid' ORDER BY id DESC";
	$result = $link->query($query);
// data ophalen
if($result-> num_rows > 0){
	while($row = $result->fetch_object()){
		echo  $row->seller_id . "<br>";
		echo "&euro;" . $row->price . "<br>";
		echo  $row->articles . "<br>";
		echo  $row->info . "<br>";
		echo  $row->timestamp . "<br>";
		echo "<a href='edit.php?id=" . $row->id . "'>Edit</a>&nbsp";
		echo "<a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
		echo "<hr>";
}
	} else{
		echo"NO DATA FOUND!";
		echo"<hr>";
		  }


?>
<p><a class="btn btn-primary" href="welcome.php" role="button">go back</a></p>
</body>
</html>