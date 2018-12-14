<html>
<head>
<title>my articles</title>
</head>
<body>
<center><h1>My articles</h1><p><a class='btn btn-primary' href='welcome.php' role='button'>go back</a></p></center>



<?php
 
// check if loggedin
require_once "welcomelogincheck.php";

// include server
require_once "server.php";

	// session id variable
	$userid = $_SESSION['id'];

	// data ordenen op id
	$query = "SELECT * FROM products WHERE seller_id = '$userid' ORDER BY id DESC";
	$result = $link->query($query);
// data ophalen
if($result-> num_rows > 0){
	while($row = $result->fetch_object()){
		echo "<div class='col-md-2 col-md-offset-5'>";
		echo  $row->seller_id . "<br>";
		echo "&euro;" . $row->price . "<br>";
		echo  $row->articles . "<br>";
		echo  $row->info . "<br>";
		echo  $row->timestamp . "<br>";
		echo "<a href='edit.php?id=" . $row->id . "'>Edit</a>&nbsp";
		echo "<a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
		echo "<hr>";
		echo "</div>";
}
	} else{
		echo"NO DATA FOUND!";
		echo"<hr>";
		  }


?>
</body>
</html>