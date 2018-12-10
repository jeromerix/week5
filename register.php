<html>
	<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<?php include "registerindb.php" ?>
	<title>Register</title>
</head>
<body>
	<div class = "header">
	<h2> Register</h2>
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> "method="post">
	<!-- display validition errors here -->
	<div class = "input-class <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
	<label>Username</label>
	<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
	</div>
	<div class = "input-class <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
	<label>Email</label>
	<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
	</div>
	<div class = "input-class <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
	<label>Password</label>
	<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
	</div>
	<div class = "input-class <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
	<label>Confirm Password</label>
	<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
	<div class = "input-class">
	<button type="submit" name="register" class ="btn" value="Submit">Register</button>
	</div>
	<p>
	Already a member? <a href="login.php">Sign in</a>
	</form>

</body>
</html> 