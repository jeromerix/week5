<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>add a new article</title>
	</head>
<body>
<!------------- form to insert articles ----------->
	<div class="form-group">
	<form action="insertinproducts.php" method="post">
	<label>Price:</label><br><input type="number" name="price" class="form-control"><br>
	<label>Article:</label><br><input type="text" name="articles" class="form-control"><br>
	<label>Description:</label><br><textarea name="info" value="info" class="form-control" rows="5" id="comment"></textarea><br>
<!------------- submit or go back------------>
	<br>
	<input type="submit" value="Submit" class="btn btn-default">
	<a href="welcome.php">back to main</a>
	</form></div>
</body>
</html>