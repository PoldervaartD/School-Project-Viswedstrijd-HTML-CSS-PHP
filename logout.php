<?php
session_start();
session_destroy();
// terug naar de login pagina:
header('Location: login.php');
?>