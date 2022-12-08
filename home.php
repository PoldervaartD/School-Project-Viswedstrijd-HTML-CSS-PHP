<?php
    session_start();
	if (!isset($_SESSION['Voornaam'])) {
		header("Location: /viswedstrijd/login.php");
	}
	    // verbinden met database
		$conn = mysqli_connect('localhost', 'root', '', 'viswedstrijd');

		//check connectie
		if(!$conn){
			echo 'Connection error: ' . mysqli_connect_error();
		}
		$sql = 'SELECT Datum, Begintijd, Eindtijd, Locatie FROM wedstrijden ORDER BY Datum';
		$result = mysqli_query($conn, $sql);
		$wedstrijden = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn)

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="style2.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Hoofd pagina de Gouden Hengel</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Uitloggen</a>
				<a href="adminlogin.php">Admin</a>
				<a href="uitslag.php">Uitslag</a>
			</div>
		</nav>
		<div class="content">
			<p>Welkom vismaat <?php echo $_SESSION['Voornaam'];?>, geef je op voor een van de 3 onderstaande wedstrijden.</p>
			<p>Na afloop van de wedstrijd komt op de website de score te staan. We hebben voor 1e, 2e en 3e plaats een mooie prijs.</p>
			<p>Op basis van het aantal gevangen vissen bepalen we de winnaar. </p>
		</div>
		<div class="container">
			<div class="row">
			<?php foreach($wedstrijden as $wedstrijd){ ?>
				<article class="card">
        <header class="card-header">
          <h2 id="WitteTekst"><?php echo htmlspecialchars($wedstrijd['Locatie']); ?></h2>
          <p><?php echo htmlspecialchars($wedstrijd['Datum']);?><p>
          <div id="BeginTime"><?php echo htmlspecialchars($wedstrijd['Begintijd']); ?></div>
          <div id="EndTime"><?php echo htmlspecialchars($wedstrijd['Eindtijd']); ?></div>
          
        </header>
    </article>
	<?php } ?>
			</div>
			</div>
			<a href="aanmelden.php"><input class="kont" type="submit" value="Klik hier om je aan te melden">
</html>