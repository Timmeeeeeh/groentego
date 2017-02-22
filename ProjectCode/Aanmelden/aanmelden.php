<?php
$school_name = $_POST["school_naam"];
$aantal_leerlingen = $_POST["aantal_leerlingen"];
$datum = $_POST["datum"];
$opmerkingen = $_POST["Opmerkingen"];
require_once('db_connection.php');


//Check to see if the server connects properly
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "INSERT INTO groepen (School_naam, Aantal_leerlingen, Datum, Opmerkingen) VALUES ('$school_name', '$aantal_leerlingen', '$datum', '$opmerkingen')";

if ($connection->query($sql) === TRUE) {
    echo "Je hebt succeful een cursus aangemeld!";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection -> close();

?>

<html lang="en">
    <link rel="stylesheet" type="text/css" href="index.css/CSS" media="screen">
    <link rel="shortcut icon" href="/HTML/IMG/logo.png" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <title>Aanmelden Cursus</title>
</head>

<body>
<div class = "Menu">
    <ul>
        <li>
            <a  href="index.html">Home</a>
        </li>

        <li>
            <a href="#doel">Doelen</a>
        </li>

        <li>
            <a class="active" href="aanmelden.html">Aanmelden cursus</a>

        </li>

        <li>
            <a href="#Over">Over Groente GO</a>
        </li>

        <li>
            <a href="#contact" >Contact</a>
        </li>
    </ul>
</div>
</body>
</html>
