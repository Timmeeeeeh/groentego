<?php

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "GroenteGo";

$err_level = error_reporting(0);
$db = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$db) {
    echo("Connection failed");
}
error_reporting($err_level);