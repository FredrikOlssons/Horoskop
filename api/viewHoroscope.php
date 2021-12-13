<?php

session_start();


if($_SERVER["REQUEST_METHOD"]) {

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_SESSION[$horoscope])) {
            $saved_horoscope = unserialize($_SESSION['horoscope']); // kom ihåg att $saved_horoscope är horoskopet som ska läggas till i diven 
            echo json_encode($saved_horoscope);
        } else {
        echo json_encode(""); }
    } else {
    echo json_encode(""); }

}



?>