<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viswedstrijd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

    $Voornaam =         $_POST['Voornaam'];
    $Tussenvoegsel =    $_POST['Tussenvoegsel'];
    $Achternaam =       $_POST['Achternaam'];
    $Straatnaam =       $_POST['Straatnaam'];
    $Huisnummer =       $_POST['Huisnummer'];
    $Woonplaats =       $_POST['Woonplaats'];

mysqli_query($conn, "INSERT INTO deelnemers (Voornaam, Tussenvoegsel, Achternaam, Straatnaan, Huisnummer, Woonplaats) 
VALUES ('$Voornaam', '$Tussenvoegsel', '$Achternaam', '$Straatnaam', '$Huisnummer', '$Woonplaats')");
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
        <h1>Aanmelden voltooid vismaat, welkom bij de Gouden Hengel!</h1>
        <h4>U bent nu aangemeld. Klik op de link hieronder om in te loggen.</h4>
        <a href="login.php">Naar de login pagina!</a>
        <h4>Daar kunt u zich aanmelden voor een wedstrijd naar keus.</h4>
      </body>
</html>