<?php

include_once 'data.php';

function newSeed($cyberfarm_id, $seedtype, $customname, $posX, $posY, $db){
    //create a new seed with parameters
    $query = 'INSERT INTO seeds
            (   cyberfarm_id,
                seedtype,
                customname,
                posX,
                posY,
                saturation,
                sunlight,
                infection,
                overgrowth,
                ripeness  ) 
            VALUES 
            (   "'. $cyberfarm_id .'", 
                "'. $seedtype .'", 
                "'. $customname .'",
                "'. $posX .'", 
                "'. $posY .'", 
                "50", 
                "50", 
                "0", 
                "0", 
                "0"     )';
    mysqli_query($db, $query);
}

function newCyberfarm($pin, $hash, $schoolname, $author, $startdate, $log, $db){
    //create a new cyberfarm with parameters
    $query = 'INSERT INTO cyberfarm
            (   pin,
                hash,
                schoolname,
                author,
                startdate,
                log,
                status) 
            VALUES 
            (   "'. $pin .'", 
                "'. $hash .'", 
                "'. $schoolname .'",
                "'. $author .'", 
                "'. $startdate .'", 
                "'. $log .'",
                "1"     )';
    mysqli_query($db, $query);
}

function editSeedName($seed_id, $customname, $db){
    //edit existing seed name
    $query = 'UPDATE seeds 
              SET customname = "'.$customname.'" 
              WHERE seed_id = "'.$seed_id.'"';
    mysqli_query($db, $query);
}

function closeFarm($cyberfarm_id, $db){
    //start inactivity of farm
    $query = 'UPDATE cyberfarm
              SET status = "0", countdown = "1"
              WHERE cyberfarm_id = "'.$cyberfarm_id.'"';
    mysqli_query($db, $query);
}

function activateFarm($cyberfarm_id, $db){
    //reactivate farm
    $query = 'UPDATE cyberfarm
              SET status = "1", countdown = "0"
              WHERE cyberfarm_id = "'.$cyberfarm_id.'"';
    mysqli_query($db, $query);
}

function dailyUpdate($db){
    //update inactivity countdown
    $query = 'SELECT countdown FROM cyberfarm_id WHERE status = "0"';
    $result = mysqli_query($db, $query);
    $array = mysqli_fetch_array($result);
    for($i = 0; $i < count($array); $i++) {
        $newCountDown = $array[i] + 1;
        $query = 'UPDATE cyberfarm SET countdown = "' . $newCountDown . '"';
    }

    //check if there is any farm longer than 2 weeks inactive
    $query = 'SELECT id FROM cyberfarm_id WHERE countdown > "14"';
    $result = mysqli_query($db, $query);
    $array = mysqli_fetch_array($result);
    if(!empty($array[0])){
        dropFarm();
    }
}

function dropFarm($db){
    //delete farm after 14 days of inactivity
    $query = 'DELETE FROM cyberfarm
              WHERE countdown > "14"';
    mysqli_query($db, $query);
}

?>