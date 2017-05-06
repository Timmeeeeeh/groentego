<?php

$servername = "stud.hosted.hr.nl";
$username = "0924824";
$dbpass = "ewoothie";
$dbname = "0924824";

$err_level = error_reporting(0);
$db = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$db) {
    echo("Connection failed");
}
error_reporting($err_level);