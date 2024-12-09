<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<img src="./img/logo.jpeg" style="width: 100%;">
		<form class="login_form" action="login2.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Username</div>
      <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
			<div class="font font2">Password</div>
      <input type="password" name="password" placeholder="Password" value = "<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
			<button type="submit">Login</button>

			<div class="login-help">
				<input type="checkbox" id="rememberme" name="rememberme" value="rememberme">
				<label for="rememberme"> Remember me</label><br>
			</div>
		</form>
	</div>	
	<script src="valid.js"></script>
</body>
</html>