<?php

    try {
        session_start();
        require("./listOfHoroscope.php");

        if($_SERVER["REQUEST_METHOD"]) {
    
            if($_SERVER["REQUEST_METHOD"] == "POST") {
        
                if (isset($_SESSION["horoscope"])) {
                    $date = json_decode($_POST["date"], true);
                    $horoscope = getsign($horoscopeList, $date);
                    error_log($horoscope);
                    $_SESSION["horoscope"] = serialize($horoscope);
                    echo json_encode(true);
                    
                    /* $saved_horoscope = unserialize($_SESSION['horoscope']); 
                    echo json_encode($saved_horoscope);
                     */
                    exit;
                } else {
                    echo json_encode(false);
                } 

            } else {
                echo json_encode("Detta funkade inte alls du");
            } 
        } 

    } catch(Exception $err) {

    }

?>

