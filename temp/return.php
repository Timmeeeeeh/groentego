
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/Return.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
</head>

<body>
    <div id = "message">
        <div id = "tekst">
            <p>
                Bedankt, <?php echo $medewerker ?>  <br>
                Bedankt voor het proberen van Groente GO, wij hopen dat je het een leuke ervaring vond.<br>
                Dit was een demo van het onderdeel: Cyber Farm van het totale project Groente GO.<br>
                Zou je graag de enquete willen invullen wat je van de gehele ervaring vond.<br>
                Je kan hieronder een nieuwe Cyberfarm starten. <br>

                Team Groente GO.<br>
            </p>
        </div>

        <div id = "image">
            <img src="Afbeeldingen/bedankt.gif">
        </div>
    </div>


    <div id = "Return">
        <form action = "index.php">
            <input type="submit" class = "submit" value="Start een nieuwe Cyberfarm">
        </form>
    </div>


</body>

</html>
