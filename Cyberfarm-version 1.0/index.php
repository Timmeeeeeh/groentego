<?php
require_once ('data.php');
$school = 'Onbekend';
$author = 'Onbekend';
$pin    = '0000';
$log = 'Geen LOG beschikbaar ...';
$zaden ='Currently Unavailable ';
$planten = 'Currently Unavailable';
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/index.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/tab.js"></script>
    <title>CyberFarm TM</title>
</head>

<body>
    <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'NewCF')" id="defaultOpen">Nieuwe Cyberfarm</button>
            <button class="tablinks" onclick="openCity(event, 'ExistCF')">Bestaande Cyberfarm</button>
            <button class="tablinks" onclick="openCity(event, 'CFMP')">Medewerker</button>
            <button class="tablinks" onclick="openCity(event, 'voorwaarden')">Gebruikersvoorwaarden</button>

    </div>

    <div id="NewCF" class="tabcontent">
            <h3>Nieuwe Cyberfarm</h3>
            <form action = "cyber_farm.php" method = "post">
                <p>Vul hieronder de gegevens in</p>
                <p>School:</p>
                <input type="text" name="School" value="">
                <p>Medewerker:</p>
                <select name="author">
                    <option value="Jeroen">Jeroen</option>
                    <option value="Tim">Tim</option>
                    <option value="Rasheed">Rasheed</option>
                    <option value="Michael">Michael</option>
                </select>
                <p>Pin code (vier cijfers): </p>
                <input type="number" name="pin" value=""> <br> <br>
                <button class="button" style="vertical-align:middle"><span>Start een Cyberfarm</span></button>
            </form>
        </div>

    <div id="ExistCF" class="tabcontent">
            <h3>Bestaande Cyberfarm</h3>
            <form action = "cyber_farm.php" method = "post">
                <p>Controleer hieronder je gegevens</p>
                <p>School:</p>
                <input type="text" name="School" value="<?php echo $school ?>">
                <p>Medewerker:</p>
                <select name="author">
                    <option value="Jeroen">Jeroen</option>
                    <option value="Tim">Tim</option>
                    <option value="Rasheed">Rasheed</option>
                    <option value="Michael">Michael</option>
                </select>
                <p> Pin code (vier cijfers):</p>
                <input type="number" name="pin" value="<?php echo $pin ?>"> <br> <br>
                <button class="button" style="vertical-align:middle"><span>Ga verder met een Cyberfarm</span></button>
            </form>
        </div>

    <div id="CFMP" class="tabcontent">
        <h3>CyberFarmMedewerkersPanel</h3>

        <form action = "medewerker_panel.php" method = "post">
            <h1> Cyberfarm </h1>
            <p>Beste medewerker, <br> vul hieronder je naam in en ga door naar het CFMP.</p>
            <p>Medewerker:</p>
            <select name="author">
                <option value="Jeroen">Jeroen</option>
                <option value="Tim">Tim</option>
                <option value="Rasheed">Rasheed</option>
                <option value="Michael">Michael</option>
            </select>
            <input type="hidden" name="School" value="Onbekend">
            <input type="hidden" name="pin" value="0000">
            <input type="hidden" name="log" value="CMFP gestart zonder Cyberfarm te starten.">
            <input type="hidden" name="zaden" value="Onbekend">
            <input type="hidden" name="planten" value="Onbekend">
            <input type="hidden" name="start" value="<?php echo $startdate ?>">
            <button class="button" style="vertical-align:middle"><span>Ga naar het CFMP</span></button>
        </form>
    </div>

    <div id="voorwaarden" class="tabcontent">
        <h3>Gebruikersvoorwaarden</h3>
        <img src="Afbeeldingen/logo.png" style="float: right">
        <p>
        Test 123
        </p>

    </div>
</body>

<footer>
        <p>
        Cyberfarm is een onderdeel van Groente GO. Wanneer u de Cyberfarm gaat u akkoord met de servicevoorwaarden van GroeteGO.<br>
        </p>
</html>