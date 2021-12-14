<?php

try {
    session_start();
    require("./listOfHoroscope.php");

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //    if (!isset($_SESSION["horoscope"])) {
            $date = json_decode($_POST["date"], true);

            $horoscope = getsign($horoscopeList, $date);

            $_SESSION["horoscope"] = serialize($horoscope);

            echo json_encode(true);
            exit;
            
        } else {
            echo json_encode(false);
            echo json_encode("Not a POST-method");
        }
    
    }
} catch(Exception $err) {
    http_response_code($error->getcode);
}


?>



