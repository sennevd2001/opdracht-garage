<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-klant1.php</title>
    <link href="garage.scss" type="text/css" rel="stylesheet">
</head>
<body>
<h1>garage delete klant 1</h1>
<p>
    Dit formulier zoekt een klant op uit
    de tabel klanten van database garage
    om hem te kunnen verwijderen.
</p>
<form action="gar-delete-klant2.php" method="post">
    Welk klantid wilt u verwijderen?
    <input type="text" name="klantidvak"> <br />
    <input type="submit">
</form>
</body>
</html>
