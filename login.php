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
			<h1>Login bij de Gouden Hengel</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Voornaam" placeholder="Voornaam" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="Achternaam" placeholder="Achternaam" id="password" required>
				<input type="submit" value="Login">
				<h3>Meld je&nbsp;<a href="index.php">hier</a>&nbsp;aan!</h3>

			</form>
		</div>
	</body>
</html>