<?php
require_once('includes/settings.php');
require_once('includes/classes/Flickr.php');

//Create instance of class to use for communicating with Flickr webservice
$flickr = new Flickr("6e86d594bf03c0baf07befe39a21db1b", "f68b1a2ff3487fcb");

//Check to see if the server connects properly
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

