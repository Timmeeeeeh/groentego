<!--<?php
date_default_timezone_set("CET");
?>-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/index.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <title>Cyber Farm</title>
</head>

<body>
<div class = "Begin">
    <form action = "cyber_farm.php" method = "post">

        <h1> Welkom bij Cyberfarm </h1>
        <p>Vul hieronder de gegevens in</p>

        <p>School:</p>
        <input type="text" name="School" value="">
        <p>Naam:</p>
        <input type="text" name="Medewerker" value="">
        <p>Log:</p>
       <!-- <input type ="text" name="Log" value ="Cyber Farm started at: <?php echo date("d-m-Y h:i:sa"); ?> "<br><br>-->
        <input type="submit" class = "submit" value="Start de Cyberfarm">
    </form>
</div>
</body>
</html>