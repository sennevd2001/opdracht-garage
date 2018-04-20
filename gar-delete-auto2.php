<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-auto2.php</title>
</head>
<body>
<h1>garage delete auto 2</h1>
<p>
    Op auto gegevens zoeken uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
// klantid uit het formulier halen -----------------------------
$autokenteken = $_POST["autokentekenvak"];

// klantgegevens uit de tabel halen ----------------------------
require_once "gar-connect.php";

$auto = $conn->prepare("
select  klantid,
        autokenteken,
        automerk,
        autotype,
        autokmstand
from    auto
where   autokenteken = :autokenteken
");

$auto->execute(["autokenteken" => $autokenteken]);

// klantgegevens laten zien -------------------------------------
echo "<table>";
foreach ($auto as $autos)
{
    echo "<tr>";
    echo "<td>"  .$autos["klantid"]       . "</td>";
    echo "<td>"  .$autos["autokenteken"]     . "</td>";
    echo "<td>"  .$autos["automerk"]    . "</td>";
    echo "<td>"  .$autos["autotype"] . "</td>";
    echo "<td>"  .$autos["autokmstand"]   . "</td>";
    echo "</tr>";
}
echo "</table><br />";

echo "<form action='gar-delete-auto3.php' method='post'>";
// klantid mag niet meer geqijzigd worden
echo "<input type='hidden' name='autokentekenvak' value=$autokenteken>";
// Waarde 0 doorgegeven als er niet gecheckt wordt
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze auto. <br />";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>








