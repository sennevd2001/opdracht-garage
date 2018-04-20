<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Senne van Drunen"
    <meta charset="UTF-8">
    <title>gar-read-klant.php</title>
    <link href="garage.scss" type="text/css" rel="stylesheet">
</head>
<body>
<h1>garage zoek op kenteken 2</h1>
<p>
    Op kenteken gegevens zoeken uit de
    tabel auto van de database garage
</p>
<?php
// klantid uit het formulier halen -------------------------
$autokenteken = $_POST["autokentekenvak"];

// klantgegevens uit tabel halen ---------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
select klantid,
       autokenteken,
       automerk,
       autotype,
       autokmstand
from   auto
where  autokenteken = :autokenteken
");
$sql->execute(["autokenteken" => $autokenteken]);

// klantgegevens laten zien ---------------------------------
echo "<table>";
foreach($sql as $rij)
{
    echo "<tr>";
    echo "<td>" . $rij["klantid"]       . "</td>";
    echo "<td>" . $rij["autokenteken"]     . "</td>";
    echo "<td>" . $rij["automerk"]    . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"]   . "</td>";
    echo "<tr>";
}
echo "<table><br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>
