<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Senne van Drunen"
    <meta charset="UTF-8">
    <title>gar-read-auto.php</title>
    <link href="garage.scss" type="text/css" rel="stylesheet">
</head>
<body>
<h1>garage read auto</h1>
<p>
    Dit zijn alle gegevens uit de
    tabel auto van de database garage.
</p>
<?php
// tabel uitlezen en netjes afdrukken -----------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
select klantid,
       autokenteken,
       automerk,
       autotype,
       autokmstand
from   auto
");

$sql->execute();

echo "<table>";
foreach($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantid"]        . "</td>";
    echo "<td>" . $rij["autokenteken"]      . "</td>";
    echo "<td>" . $rij["automerk"]     . "</td>";
    echo "<td>" . $rij["autotype"]  . "</td>";
    echo "<td>" . $rij["autokmstand"]    . "</td>";
}
echo "</table>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>
