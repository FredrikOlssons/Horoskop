<?php

    try {
        session_start();
        require("./listOfHoroscope.php");

        if($_SERVER["REQUEST_METHOD"]) {
    
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                //echo json_encode($_SESSION["horoscope"]);
        
                if (isset($_SESSION["horoscope"])) {
                    echo json_encode(true);
                    
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
    
    //if(isset($_POST['date'])) {
                  //  $horoscope = getHoroscope($_POST['date']); 
                  //  $_SESSION["horoscope"] = serialize($horoscope);           
                   // echo json_encode(true);

?>