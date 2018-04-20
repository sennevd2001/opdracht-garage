<?php
// gar-connect.php
// maakt een connectie met de database 'garage'
// Senne van Drunen

$servername = "localhost";
$dbname     = "garage";
$username   = "root";
$password   = "Sennevd2001";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connectie gelukt <br />";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}
?>