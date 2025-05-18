<?php
    $host = 'localhost';        
    $db   = 'cadastro';    
    $user = 'root';    
    $pass = 'P0intBl4nk!';    
    
    $dsn = "mysql:host=$host;dbname=$db";  
    
    try {
        $pdo = new PDO($dsn, $user, $pass);
        echo "Connected successfully!";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>