<?php
require_once('includes/settings.php');
require_once('includes/classes/Flickr.php');

//Create instance of class to use for communicating with Flickr webservice
$flickr = new Flickr(FLICKR_KEY, FLICKR_SECRET);

//Check to see if the server connects properly
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//TODO: from here on it's up to you!
