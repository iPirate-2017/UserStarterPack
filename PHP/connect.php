<?php

include('login/conf.php');

$servername = isset($servername) ? $servername : "localhost";
$username = isset($username) ? $username : "root";
$password = isset($password) ? $password : "";
$db = isset($db) ? $db : "StarterPackPHP";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
