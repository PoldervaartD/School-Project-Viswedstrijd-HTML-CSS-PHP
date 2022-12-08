<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vis Wedstrijd</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login">
        <h1>Aanmelden voor een Wedstrijd</h1>
        <form action="insertaangemeld.php" method="post" autocomplete="off">
            <input id="Voornaam" type="text" name="Voornaam" placeholder="Voornaam" id="Voornaam" required>
            <input id='Tussenvoegsel' type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel" id="Tussenvoegsel" required>
            <input id="Achternaam" type="text" name="Achternaam" placeholder="Achternaam" id="Achternaam" required>
            <input id="Locatie" type="text" name="Locatie" placeholder="Locatie" id="Locatie" required>
            <input id="Aanmelden" type="submit" value="Aanmelden">
            <h3>Log&nbsp;<a href="login.php">hier</a>&nbsp;in!</h3>
        </form>
</body>
</html>