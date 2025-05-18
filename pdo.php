<?php
    $host = 'localhost';        
    $db   = 'cadastro';    
    $user = 'root';    
    $pass = 'Sua senha';    
    
    $dsn = "mysql:host=$host;dbname=$db";  
    
    try {
        $pdo = new PDO($dsn, $user, $pass);
        echo "Connected successfully!<br>";
    } catch (\PDOException $e) {
        echo "Failed to connect. $e->getMessage()";
    }
?>