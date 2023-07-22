<?php 
    $conn = new mysqli('localhost', 'root', '', 'kenflix');

    if(!$conn){
        die("Connection Error");
    }
?>