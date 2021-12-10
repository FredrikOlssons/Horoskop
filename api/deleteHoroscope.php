<?php
    
    session_start();

    if(isset($_SERVER['REQUEST_METHOD'])) {
        
        if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            echo json_encode('delete funkar');
            exit;
    
            if (isset($_SESSION["horoscope"])) {
                unset($_SESSION['horoscope']);
                echo json_encode(true);
            } else {     
                echo json_encode(false);
            }

        } else {
            echo json_encode("Not a DELETE-method");
        } 
      
    } else {    
        echo json_encode("No valid request");
    }
    

?>