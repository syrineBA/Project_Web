<?php
session_start();
error_reporting(0);
try {
    $conn = new PDO("mysql:host=localhost;dbname=login_forum_php", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>