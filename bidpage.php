<!DOCTYPE html>
<html>
	<head>
	<title>add bidding</title>
	<?php include "insertinbids.php"?>
	<?php include "getbids.php"?>
	</head>
<body>
	<!------------- form to insert articles ----------->
	<div class="form-group">
	<!----- onveilig ------>
	<form method="post">
		<label>bid:</label><br><input type="number" name="bid" class="form-control"><br>
		<!------------- submit or go back------------>
		<br>
		<input type="submit" value="Submit" class="btn btn-default">
		<a href="welcome.php">back to main</a>
	</form></div>
</body>
</html>