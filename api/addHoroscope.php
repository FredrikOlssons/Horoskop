<?php

session_start();

if($_SERVER['REQUEST_METHOD']) {

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!isset($_SESSION["horoscope"])) {
            echo json_encode('POST funkar ännu mer');
            /* if(isset($_POST['date'])) {
              //  $horoscope = getHoroscope($_POST['date']); 
              //  $_SESSION["horoscope"] = serialize($horoscope);           
                echo json_encode($_POST['date']));
                exit;

            } else {   
                echo json_encode("Not a POST-method");
                exit;
            }
        } else {
            echo json_encode(false); */
            exit;
        }
    }
}

?>


