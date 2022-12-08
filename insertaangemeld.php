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
    $Locatie =          $_POST['Locatie'];

mysqli_query($conn, "INSERT INTO aangemeld (Voornaam, Tussenvoegsel, Achternaam, Locatie) 
VALUES ('$Voornaam', '$Tussenvoegsel', '$Achternaam', '$Locatie')");
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
        <h1>We hebben uw aanmelding succesvol ontvangen.</h1>
        <a href="home.php">Terug naar de home pagina</a>
      </body>
</html>