<?php
//Include the DB connection (includes the connection to the DB)
require_once("db_connection.php");
//Include the parameters for hash
require_once ('settings.php');
//Include the parameter for the log
require_once ('time.php');
//Include the functions for the Cyberfarm for the DB
require_once ('functions.php') ;

//Make an array for an message if the DB connection is gelukt.
$message = "";

//Get the values filled in the page before
$schoolname = $_POST['School'];
$status = 'actief';
$author = $_POST['Medewerker'];
$pin = $_POST['pin'];
$startdate = $log;


//Simple security to check if fields are not empty and code is at more then four numbers
if ($schoolname = ""){
    header('Refresh: 3; url=index.php');
    echo 'Oh nee, je hebt geen school naam ingevuld.';
}
else{
    if ($author = ""){
        header('Refresh: 3; url=index.php');
        echo 'Oh nee, je hebt geen naam ingevuld.';
    }
    else{
        if ($pin >= 0000){
            newCyberfarm($pin, $hash, $schoolname, $author, $startdate, $db);
        }
        else {
            header('Refresh: 3; url=index.php');
            echo "Je hebt geen goede pin code ingevuld";
        }
    }
}



?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cyber_farm.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/main.js"></script>
    <script src="https://cdn.rawgit.com/konvajs/konva/1.5.0/konva.min.js"></script>


    <div id = "text">
        <h1> Cyberfarm GroenteGo</h1>
    </div>
</head>
<body>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img id="zaadje1" src="Afbeeldingen/aardbei_zaad.png" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img id="zaadje2" src="Afbeeldingen/blauwe_bes_zaad.png" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img id="zaadje3" src="Afbeeldingen/paprika_zaad.png" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
    <img id="zaadje4" src="Afbeeldingen/kers_zaad.png" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)">
</div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
</div>

<!--
<button onclick="changeImage(2)">Click me</button>
-->



<div id="div2" class=""></div>
<div id="div3" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div4" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div5" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div6" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div7" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div8" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div9" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div10" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div11" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div12" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div13" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div14" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div15" class="dirt" ondrop="drop(event)" ondragover="allowDrop(event)"></div>


<div id = "Stop">
    <form action = "return.php" method = "post">
        <input type="hidden" name="Medewerker" value=" <?php echo "$author" ?> ">
        <input type ="hidden" name="Log" value =" <?php echo '$log'  ?> ">
        <input type="submit" class = "submit" value="Stop">
    </form>
</div>


<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img id="drag1" src="Afbeeldingen/aardbei_zaad.png" draggable="true"
         ondragstart="drag(event)" width="336" height="69">
</div>

<div id = "Weer">
    <h1> Weer</h1>
    <?php
    if ($weather > 50){ ?>
        <img src="Afbeeldingen/zon.gif" alt="Zon" style="width:152px;height:152px;">
        <?php

    }
    else { ?>
        <img src="Afbeeldingen/rain.gif" alt="Regen" style="width:152px;height:152px;">
        <?php
    }
    ?>
</div>












<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    $(this).click(function(e){
        e.preventDefault();

        $.getJSON('https://stud.hosted.hr.nl/groentego/json.php', 'schoolname=HRO&pin=1234', function(jsonData){
            result = jsonData;
            for(i = 0; i < result.length; i++){

                console.log('Custom name: ' + result.customname + ', phase: ' + result.ripeness);
            }
        })
    });

</script>

</body>
</html>