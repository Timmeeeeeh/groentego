<?php
$school_naam = $_POST['School'];
$author = $_POST['author'];
$log = $_POST['log'];
$pin = $_POST['pin'];


if ($school_naam === ""){
    $school_naam = 'School naam onbekend';
}
?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="CSS/Return.css" media="screen">
    <link rel="shortcut icon"  href="Afbeeldingen/logo.png" type="image/x-icon">

</head>

<body>

<div id = "message">

    <div id="logo">
        <img src="Afbeeldingen/logo.png" height="33%" width="15%">
    </div>

    <div id = "bedankt_naam">
        <h1> Bedankt, <?php echo $school_naam; ?>  </h1><br>
        <p>
            Vraag nu een medewerker om hulp!
        </p>
    </div>

    <div id = "tekst">
        <form action = "return_admin.php" method = "post">
            <input type="hidden" name="log" value=" <?php echo "$log" ?> ">
            <input type="hidden" name="School" value=" <?php echo "$school_naam" ?> ">
            <input type="hidden" name="author" value=" <?php echo "$author" ?> ">
            <input type="hidden" name="pin" value=" <?php echo "$pin" ?> ">
            <br><br>
            <br><input type="submit" class = "submit" value="Medewerker Panel">
        </form>
    </div>
</div>

</body>