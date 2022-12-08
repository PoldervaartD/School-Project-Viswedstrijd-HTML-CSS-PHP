<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viswedstrijd";

// Create connectie
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectie
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
$voornaam = $_POST['Voornaam'];
$achternaam = $_POST['Achternaam'];
$sql= "SELECT * FROM deelnemers WHERE Voornaam = '$voornaam' AND Achternaam = '$achternaam' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);


if(isset($check))
{
  $_SESSION['Voornaam'] = $_POST['Voornaam'];
    header("Location: /viswedstrijd/home.php");
}

else
{
    echo 'Inloggen mislukt, controleer Voor- en Achternaam.';
}
}
?>