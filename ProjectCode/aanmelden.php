<?php
$school_name = $_POST["school_naam"];
$aantal_leerlingen = $_POST["aantal_leerlingen"];
$datum = $_POST["datum"];
$opmerkingen = $_POST["Opmerkingen"];
$klas = $_POST["klas"];
$status = TRUE ;
require_once('Aanmelden/db_connection.php');


//Check to see if the server connects properly
$connectionCyber = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sqlCyberfarm = "INSERT INTO cyberfarm ( School_naam, Klas, Leerlingen, Status) VALUES ('$school_name', '$klas', '$aantal_leerlingen', '$status')";


if ($connectionCyber->query($sqlCyberfarm) === TRUE) {

} else {
    $status = FALSE ;
}

$connectionCyber -> close();

//Check to see if the server connects properly
$connectionGroep = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sqlGroepen = "INSERT INTO groepen (School_naam, Aantal_leerlingen, Datum, Opmerkingen) VALUES ('$school_name', '$aantal_leerlingen', '$datum', '$opmerkingen')";

if ($connectionGroep->query($sqlGroepen) === TRUE) {

} else {
    $status = FALSE ;
}

$connectionGroep -> close();
?>

<html lang="en">
    <link rel="stylesheet" type="text/css" href="Aanmelden/index.css" media="screen">
    <link rel="shortcut icon" href="Aanmelden/logo.png" type="image/x-icon">
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

<div class="message">
    <p>
        Uw aanmelding is:  <?php echo $status; ?> <br>
        U heeft uw school aangemeld met de volgende gegevens:<br>
        School: <?php echo $school_name; ?><br>
        Aantal leerlingen: <?php echo $aantal_leerlingen; ?><br>
        Datum: <?php echo $datum; ?><br>
        Opmerkingen: <?php echo $opmerkingen; ?><br>
    </p>
</div>
</body>

</html>

