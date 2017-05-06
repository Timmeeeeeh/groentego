<!--<?php
$school_naam = $_POST['School'];
$author = $_POST['author'];
$log = $_POST['log'];
$pin = $_POST['pin'];
$zaden ='Currently Unavailable ';
$planten = 'Currently Unavailable';
?>
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/return_admin.css" media="screen">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Groente Go panel</title>
</head>

<body>
<div id = "login" class = "login">
    <form action = "medewerker_panel.php" method = "post">

        <p>Gebruikersnaam:</p>
        <input type="text" name="GN" value=""  placeholder="Gebruikersnaam">
        <input type="hidden" name="log" value=" <?php echo "$log" ?> ">
        <input type="hidden" name="School" value=" <?php echo "$school_naam" ?> ">
        <input type="hidden" name="author" value=" <?php echo "$author" ?> ">
        <input type="hidden" name="pin" value=" <?php echo "$pin" ?> ">
        <input type="hidden" name="zaden" value=" <?php echo "$zaden" ?> ">
        <input type="hidden" name="planten" value=" <?php echo "$planten" ?> ">
        <br><br>
        <input type="submit" class = "submit" value="login">
    </form>
</div>
</body>
</html>