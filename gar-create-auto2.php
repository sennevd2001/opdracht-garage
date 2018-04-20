<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Senne van Drunen"
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel
    auto in de database garage.
</p>
<?php
// autogegevens uit het formulier halen ------------------------
$autokenteken  = $_POST["autokentekenvak"];
$automerk      = $_POST["automerkvak"];
$autotype      = $_POST["autotypevak"];
$autokmstand   = $_POST["autokmstandvak"];
$klantid       = $_POST["klantidvak"];
// autogegevens invoeren in de tabel ---------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
insert into auto values
(
:autokenteken, :automerk, :autotype,
:autokmstand, :klantid
)
");

// manier 1 (of manier 2 gebruiken) -----------------------------
// $sql->bindParam("klantid",         $klantid);
// $sql->bindParam("klantnaam",       $klantnaam);
// $sql->bindParam("klantadres",      $klantadres);
// $sql->bindParam("klantpostcode",   $klantpostcode);
// $sql->bindParam("klantplaats",     $klantplaats);

//$sql-> execute();

//manier 2 ------------------------------------------------------
$sql->execute([
    "autokenteken"   => $autokenteken,
    "automerk"       => $automerk,
    "autotype"       => $autotype,
    "autokmstand"    => $autokmstand,
    "klantid"        => $klantid,
]);

echo "De auto is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>