<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ahmadi_phone";
// default sql port 3306
try {
    //code...
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
    die("Connection failed:".$e->getMessage());
}
