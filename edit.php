<?php

// connect naar de database
require_once "server.php";

// check if loggedin
require_once "welcomelogincheck.php";

	// get id
	$id = $_GET['id'];

// als er op de update button wordt geklikt
if (isset($_POST['update'])){
	$price = $_POST["price"];
	$articles = $_POST["articles"];
	$info = $_POST["info"];
	$sql = "UPDATE products SET price='$price',articles='$articles',info='$info'WHERE id=$id";
	echo"Post updated!";
	$res = mysqli_query($link, $sql);
}
?>

<?php		
	// selecteerd op id uit de database
	$sql_get = "SELECT * FROM products WHERE id=$id";
	$result = mysqli_query($link, $sql_get);
		
				
// opvragen rows uit de database
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	$price = $row['price'];
	$articles = $row['articles'];
	$info = $row['info'];
 }
}	
	// form om artikel aan te passen
	echo"<form action='edit.php?id=$id'method='post'>";
	echo"price:<br> <input type='number' name='price' value='$price'  class='form-control'><br>";
	echo"article:<br> <input type='text' name='articles' value='$articles'class='form-control'><br>";
	echo"info:<br> <textarea name='info' placeholder='$info' class='form-control' rows='5'></textarea>";
	
	//update button
	echo"<br><input name='update' type='submit' value='update'>";
		
?>

<html>
	<head>
	</head>
<body>
<a href="myarticles.php">go back</a>
</form>
</body>
</html>