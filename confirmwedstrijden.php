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

$sql = "UPDATE deelnemers SET Locatie='', Begintijd='', Eindtijd='', Datum='', WHERE id='';

if ($conn->query($sql) === TRUE) {
  echo "Updaten van wedstrijden gelukt";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>