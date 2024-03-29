<?php include ("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="register.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Register</title>
</head>
<body>

<div id="wrapper">
	<div class="container">
		<span class="heading">Copenhagen Sign Up</span>
		
		<form action="register.php" method="post" onsubmit="return validate()">
			<?php include ("error.php"); ?>
			<div id="error"></div>
			<div class="input-group">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<span class="bar"></span>
			</div>

			<div class="input-group">
				<i class="fas fa-envelope"></i>
				<input type="email" name="email" placeholder="Email" id="email">
				<span class="bar"></span>
			</div>

			<div class="input-group">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<span class="bar"></span>
			</div>

			<div class="input-group">
				<i class="fas fa-lock"></i>
				<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
				<span class="bar"></span>
			</div>

			<div class="input-group">
				<button id="submit" type="submit" name="submitBtn">
					<i class="fab fa-telegram-plane"></i>
				</button>
			</div>

			<div class="switch-login">
				<a href="index.php">Already have an account? <span>Login</span></a>
			</div>


		</form>
	</div>
</div>


<script src="register.js"></script>
</body>
</html>
