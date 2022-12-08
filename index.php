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
        <h1>Aanmelden bij de Gouden Hengel</h1>
        <form action="insert.php" method="post" autocomplete="off">
            <input id="Voornaam" type="text" name="Voornaam" placeholder="Voornaam" id="Voornaam" required>
            <input id="Tussenvoegsel" type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel" id="Tussenvoegsel">
            <input id="Achternaam" type="text" name="Achternaam" placeholder="Achternaam" id="Achternaam" required>
            <input id="Straatnaam" type="text" name="Straatnaam" placeholder="Straatnaam" id="Straatnaam" required>
            <input id="Huisnummer" type="text" name="Huisnummer" placeholder="Huisnummer" id="Huisnummer" required>
            <input id="Woonplaats" type="text" name="Woonplaats" placeholder="Woonplaats" id="Woonplaats" required>
            <input id="Aanmelden" type="submit" value="Aanmelden">
            <h3>Log&nbsp;<a href="login.php">hier</a>&nbsp;in!</h3>
        </form>
</body>
</html>