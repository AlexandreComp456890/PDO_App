<?php
    $host = 'localhost';        
    $db   = 'cadastro';    
    $user = 'root';    
    $pass = 'P0intBl4nk!';    
    
    $dsn = "mysql:host=$host;dbname=$db";  
    
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (\PDOException $e) {
        echo "Failed to connect. $e->getMessage()";
    }
?>