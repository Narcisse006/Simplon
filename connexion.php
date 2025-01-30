<?php
/*
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if ($conn) {
    die ("Vous etes connectées");
}
*/
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
?>


