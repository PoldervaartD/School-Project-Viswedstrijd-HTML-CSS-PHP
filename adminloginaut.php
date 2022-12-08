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
$Gebruikersnaam = $_POST['Gebruikersnaam'];
$Wachtwoord = $_POST['Wachtwoord'];
$sql= "SELECT 'gebruikersnaam', 'wachtwoord' FROM admins WHERE gebruikersnaam = '$Gebruikersnaam' AND wachtwoord = '$Wachtwoord' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);


if(isset($check))
{
  $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
    header("Location: /viswedstrijd/adminhome.php");
}

else
{
    echo 'Inloggen mislukt, controleer Voor- en Achternaam.';
}
}
?>