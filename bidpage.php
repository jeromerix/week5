<!DOCTYPE html>
<html>
	<head>
	<title>add bidding</title>
	<?php include "welcomelogincheck.php";?>
	<?php include "insertinbids.php";?>
	<?php include "getbids.php";?>
	<?php mysqli_close($link); ?>
	</head>
<body>
	<!------------- form to insert articles ----------->
	<div class="form-group">
		<!----- onveilig verbeter indien mogelijk ------>
		<form method="post" >
		<label>bid:</label><br><input type="number" name="bid" class="form-control"><br>
		<!------------- submit or go back------------>
		<br>
		<input type="submit" value="Submit" class="btn btn-default">
		<a href="welcome.php">back to main</a>
	</form></div>
</body>
</html>