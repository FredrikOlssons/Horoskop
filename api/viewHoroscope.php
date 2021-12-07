<?php
session_start();

if($_SERVER["REQUEST_METHOD"]) {

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $horoscope = $_GET ??????????????;
        echo json_encode('get');
        exit;
    } else {
        echo json_encode("not a Get method");
    }
}



?>