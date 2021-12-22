<?php

try {
session_start();


if($_SERVER["REQUEST_METHOD"]) {

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_SESSION["horoscope"])) {
            $saved_horoscope = unserialize($_SESSION['horoscope']); 
            echo json_encode($saved_horoscope);
            exit;
        } else {
        echo json_encode(false); }
    } else {
    echo json_encode(""); }

}
} catch(Exception $err) {
       
}

?>