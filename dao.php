<?php
    $servername = "localhost";
    $username = "root";
    $password = "P0intBl4nk!";
    $dbname = "cadastro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

?>