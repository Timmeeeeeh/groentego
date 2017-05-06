<?php
$naam = $_POST['Medewerker'];
$naam2 = '' ;

if ($naam = ""){
    $naam = "Onbekende Naam";
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Return.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
</head>

<body>




<div id = "message">
    <div id="logo">
        <img src="Afbeeldingen/logo.png" height="33%" width="15%">

    </div>
    <div id = "bedankt">
        <h1> Bedankt, <?php echo $naam ?>  </h1><br>
    </div>

    <div id = "tekst">

        <p> Bedankt voor het proberen van Groente GO, wij hopen dat je het een leuke ervaring vond.<br>
            Dit was een demo van het onderdeel: Cyber Farm van het totale project Groente GO.<br>
            Zou je graag de enquete willen invullen wat je van de gehele ervaring vond.<br>
            Je kan hieronder een nieuwe Cyberfarm starten. <br>

            Team Groente GO <br>
        </p>
    </div>

    <div id = "Return">
        <form action = "index.html">
            <input type="submit" class = "submit" value="Start een nieuwe Cyberfarm">
        </form>
    </div>


</div>









</body>

</html>
