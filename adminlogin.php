<!DOCTYPE html>
<html>
    <link href="style.css" rel="stylesheet" type="text/css">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>AdminLogin de Gouden Hengel</h1>
			<form action="adminloginaut.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="Wachtwoord" placeholder="Wachtwoord" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>