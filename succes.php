<?php
header('Refresh: 5; url=index.php');
include_once ('functions.php');

$ID = $_POST['ID'];
$weer = $_POST['weer'];
$hash = $_POST['hash'];
$log = $_POST['log'];
$schoolname = $_POST['School'];
$author = $_POST['author'];
$pin = $_POST['pin'];
$zaden = $_POST['zaden'];
$planten = $_POST['planten'];
$data = $_POST['start'];


newCyberfarm($pin,$hash,$schoolname,$author,$data,$log,$db)

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/succes.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/succes.js"></script>
    <title>CyberFarm TM</title>
</head>
<body>

<div id = "message">
    <div id="myProgress">
        <div id="myBar"></div>
    </div>

    <script>move()</script>


    <img src="Afbeeldingen/zon.gif" >

    <h1>Bedankt namens Team Groente GO!</h1>
    <h2>Je wordt doorgestuurd!</h2>

</div>

</body>
</html>
