<?php
require_once ('data.php');


//Send data from index.php or cyberfarm.php
$log = $_POST['log'];
$schoolname = $_POST['School'];
$author = $_POST['author'];
$pin = $_POST['pin'];
$zaden = $_POST['zaden'];
$planten = $_POST['planten'];
$data = $_POST['start'];

if ($data ===""){
    $data = "Datum niet bekend";
}


//newCyberfarm($pin, $hash, $school_naam, $author, $startdate, $log, $db);
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/medewerker.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/tab.js"></script>
    <title>CFMP</title>
</head>

<body>

<div id = "info">
    <h1> Welkom, <?php echo $author ?>. De datum en tijd is: <?php echo date ("d-m-Y h:i:sa") ?></h1>
</div>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Welkom')" id="defaultOpen">Welkom</button><br>
    <button class="tablinks" onclick="openCity(event, 'Medewerker')">Medewerker</button><br>
    <button class="tablinks" onclick="openCity(event, 'School')">School</button><br>
    <button class="tablinks" onclick="openCity(event, 'Log')">Log</button><br>
    <button class="tablinks" onclick="openCity(event, 'Pin Code')">Pin Code</button><br>
    <button class="tablinks" onclick="openCity(event, 'Zaden')">Zaden</button><br>
    <button class="tablinks" onclick="openCity(event, 'Planten')">Planten</button><br>
    <button class="tablinks" onclick="openCity(event, 'Finish')">Finish</button><br>
    <button class="tablinks"  onclick="openCity(event, 'Verwijder')">Verwijder</button><br>
</div>

<div id="Welkom" class="tabcontent">
    <p>
        <h1>Welkom</h1>
        <br>
        Bij het Cyberfarm Medewerker Panel (CMP).
        <br>
        Je kan ik het menu recht alles aanpassen, je kan in het CMP aanpassen: <br>
        * De Medewerker die de Cyberfarm heeft gestart en onderhouden.<br>
        * De School van welk de cyberfarm is.<br>
        * De Log van de gehele Cyberfarm kan worden bewerkt (bijvoegen en/of verwijderen.<br>
        * De Pin Code kan worden veranderd.<br>
        * De zaden welke zijn geplant kan hier worden gevonden tevens de hoeveelheid.<br>
        * De planten welke zijn volgroeid kan hier worden gevonden tevens de hoeveelheid .<br>
        * De cijfers en info kan worden ingezien van de cyberfarm ook kan deze worden opgeslagen.<br>
        * De gehele Cyberfarm kan worden verwijderd (!niet terug te draaien!).<br><br><br>

        GroenteGo Managment 2017

        <img src="Afbeeldingen/logo.png" height="25%" width="25%">
    </p>
</div>

<div id="Medewerker" class="tabcontent">
    <h1>Medewerker</h1>
    <form action = "medewerker_panel.php" method = "post">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="text" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>
    </form>

</div>

<div id="School" class="tabcontent">
    <h1>School</h1>
    <form action = "medewerker_panel.php" method = "post">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="text" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>

    </form>

</div>

<div id="Log" class="tabcontent">
    <h1>Log</h1>
    <form action = "medewerker_panel.php" method = "post">
        <input type="text" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>

    </form>
</div>

<div id="Pin Code" class="tabcontent">
    <h1>Pin Code</h1>
    <form action = "medewerker_panel.php" method = "post">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="text" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>

    </form>
</div>

<div id="Zaden" class="tabcontent">
    <h1>Zaden</h1>
    <p>Current zaden: <?php echo $zaden ?></p>
    <div class = buttons>
    <div id = 'left'>
    <h2>Groente</h2>

        <button class="button" style="vertical-align:middle"><span>Komkommer</span></button>
        <button class="button" style="vertical-align:middle"><span>Winterpeen</span></button>
        <button class="button" style="vertical-align:middle"><span>Rode ui</span></button>
        <button class="button" style="vertical-align:middle"><span>Spruitjes</span></button>
        <button class="button" style="vertical-align:middle"><span>Brocolli</span></button>
        <button class="button" style="vertical-align:middle"><span>Tomaat</span></button>
        <button class="button" style="vertical-align:middle"><span>Andijvie</span></button>
        <button class="button" style="vertical-align:middle"><span>Ijsberg sla</span></button>
        <button class="button" style="vertical-align:middle"><span>Mais</span></button>
        <button class="button" style="vertical-align:middle"><span>Paprika</span></button>
        <button class="button" style="vertical-align:middle"><span>Prei</span></button>
        <button class="button" style="vertical-align:middle"><span>Spinazie</span></button>
        <button class="button" style="vertical-align:middle"><span>Boerenkool</span></button>
    </div>
        <div id = 'right'>
            <h2>Fruit</h2>
            <button class="button" style="vertical-align:middle"><span>Aardbei</span></button>
            <button class="button" style="vertical-align:middle"><span>Druif</span></button>
            <button class="button" style="vertical-align:middle"><span>Blauwe bes</span></button>
            <button class="button" style="vertical-align:middle"><span>Kers</span></button>
        </div>

    </div>
    <form action = "medewerker_panel.php" method = "post">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>

    </form>
</div>

<div id="Planten" class="tabcontent">
    <h1>Planten</h1>
    <p>Current planten: <?php echo $planten ?></p>
    <div class = buttons>
        <div id = 'left'>
            <h2>Groente</h2>

            <button class="button" style="vertical-align:middle"><span>Komkommer</span></button>
            <button class="button" style="vertical-align:middle"><span>Winterpeen</span></button>
            <button class="button" style="vertical-align:middle"><span>Rode ui</span></button>
            <button class="button" style="vertical-align:middle"><span>Spruitjes</span></button>
            <button class="button" style="vertical-align:middle"><span>Brocolli</span></button>
            <button class="button" style="vertical-align:middle"><span>Tomaat</span></button>
            <button class="button" style="vertical-align:middle"><span>Andijvie</span></button>
            <button class="button" style="vertical-align:middle"><span>Ijsberg sla</span></button>
            <button class="button" style="vertical-align:middle"><span>Mais</span></button>
            <button class="button" style="vertical-align:middle"><span>Paprika</span></button>
            <button class="button" style="vertical-align:middle"><span>Prei</span></button>
            <button class="button" style="vertical-align:middle"><span>Spinazie</span></button>
            <button class="button" style="vertical-align:middle"><span>Boerenkool</span></button>
        </div>
        <div id = 'right'>
            <h2>Fruit</h2>
            <button class="button" style="vertical-align:middle"><span>Aardbei</span></button>
            <button class="button" style="vertical-align:middle"><span>Druif</span></button>
            <button class="button" style="vertical-align:middle"><span>Blauwe bes</span></button>
            <button class="button" style="vertical-align:middle"><span>Kers</span></button>
        </div>

    </div>
    <form action = "medewerker_panel.php" method = "post">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="text"   name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="GN" value="<?php echo $Medwewerker ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Update gegevens</span></button>
    </form>
</div>


<div id="Finish" class="tabcontent">
    <h1>Finish</h1>
    <p>Controleer hier of alle gegevens kloppen!<br><br>
        ID: <?php echo $ID ?><br>
        Weather: <?php echo $weather ?><br>
        Hash: <?php echo $hash ?><br>
        Datum: <?php echo $data ?><br>
        Medewerker: <?php echo $author ?><br>
        School: <?php echo $schoolname ?><br>
        Log: <?php echo $log ?><br>
        Pin Code: <?php echo $pin ?><br>
        Zaden: <?php echo $zaden ?><br>
        Planten:  <?php echo $zaden ?><br>
    </p>

    <form action = "succes.php" method = "post">
        <input type="hidden" name="ID" value="<?php echo $ID ?>">
        <input type="hidden" name="weer" value="<?php echo $weather ?>">
        <input type="hidden" name="hash" value="<?php echo $hash ?>">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Sla de cyberfarm op</span></button>
    </form>

</div>

<div id="Verwijder" class="tabcontent">
    <h2>Verwijder</h2>
    <p>Je kan deze actie niet ontdoen!</p>
    <form action = "delete.php" method = "post">
        <input type="hidden" name="ID" value="<?php echo $ID ?>">
        <input type="hidden" name="weer" value="<?php echo $weather ?>">
        <input type="hidden" name="hash" value="<?php echo $hash ?>">
        <input type="hidden" name="log" value="<?php echo $log ?>">
        <input type="hidden" name="School" value="<?php echo $schoolname ?>">
        <input type="hidden" name="author" value="<?php echo $author ?>">
        <input type="hidden" name="pin" value="<?php echo $pin ?>">
        <input type="hidden" name="planten" value="<?php echo $planten ?>">
        <input type="hidden" name="zaden" value="<?php echo $zaden ?>">
        <input type="hidden" name="start" value="<?php echo $data ?>">
        <br> <br>
        <button class="button" style="vertical-align:middle"><span>Sla de cyberfarm op</span></button>
    </form>

</div>

</body>

<footer>
    <p>
        CyberFarmMedewerkersPanel (CFMP) is onderdeel van CyberFarm TM.
    </p>
</footer>

</html>