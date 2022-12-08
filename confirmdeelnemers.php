<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viswedstrijd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE deelnemers SET Voornaam='', Tussenvoegsel='', Achternaam='', Straatnaan='', Huisnummer='', Woonplaats='' WHERE id='';

if ($conn->query($sql) === TRUE) {
  echo "Updaten van deelnemers gelukt";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>