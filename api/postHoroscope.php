<?php

    if ($_SERVER["REQUEST_METHOD"]) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo json_encode('post');
        }
    }

?>