<?php
require_once('db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="index.css" media="screen">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <title>Cyberfarm</title>
</head>
<body>
<div class = "Menu">
    <ul>
        <li>
            <a href="home.html">Home</a>
        </li>

        <li>
            <a href="cursussen.php">Cursussen</a>
        </li>

        <li>
            <a href="rooster.html">Rooster</a>

        </li>

        <li>
            <a href="cyberfarm.php">cyberfarm</a>
        </li>

    </ul>
</div>

<div class = "Content"></div>
</body>
</html>

<?php
//Check to see if the server connects properly
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$sql = "SELECT id, School_naam, Klas, Leerlingen, Status FROM cyberfarm";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]."<br> "." School: " . $row["School_naam"]."<br> ". " Klas: " . $row["Klas"]."<br> ". "Leerlingen: ".$row["Leerlingen"]."<br> "."Status: ".$row["Status"]."<br> "."<br>";
}
} else {
echo "Er staan geen curssussen in het systeem";
}
$connection->close();
?>