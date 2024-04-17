<?php
        
    $conn = new mysqli("localhost", "root", "", "real-estate");

    if(!$conn){
        die("failed To connect");
    }else{
        // echo("Connected Successiful");
    }

?>