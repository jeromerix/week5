<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="stylesheet.css">
	<?php include "welcomelogincheck.php"?>
	<?php include "articlesearch.php"?>
</head>
<body>
<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
	<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="myarticles.php">my articles</a></li>
	  <li><a href="insert.php">sell an item</a></li>
      <li><a href="resetpassword.php">password reset</a></li>
	  <li><a href="Profiles.php">users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
	<div class="test">
	<form action="welcome.php" method="post">
	<input type="text" name="valueToSearch" placeholder="search"><br>
	<div class='filterbackbutton'>
	<input type="submit" name="search" value="filter">
	&nbsp;
	<a href='welcome.php'>reset</a>
</div><table class="table table-striped">
	<tr>
	<br><th>seller</th>
		<th>price</th>
		<th>articles</th>
		<th>info</th>
		<th>timestamp</th>
	</tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
	<tr>
	<td><?php echo $row['seller_id'];?></td>
	<td><?php echo "&euro;".$row['price'];?></td>
	<td><?php echo '<a href="articles.php?id='.$row['id'].'">'.$row['articles'].'</a>';?></td>
	<td><?php echo $row['info'];?></td>
	<td><?php echo $row['timestamp'];?></td>
	</tr>
<?php endwhile;?>
</table>
</form></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</body>
</html>