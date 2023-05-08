<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="login.php" method="post">
		<h2>Sign In</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<input type="text" name="uname" placeholder="Username">

		<input type="password" name="password" placeholder="Password">

		<button type="submit">Login</button>
	</form>
</body>
</html>