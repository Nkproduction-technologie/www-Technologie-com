<?php
$host = "localhost";
$user = "root";      // Ton utilisateur MySQL
$pass = "";          // Ton mot de passe MySQL
$db   = "reseau_social";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
