<?php

// Basic connection settings
$databaseHost = 'localhost';
$databaseUsername = 'sky';
$databasePassword = 'root';
$databaseName = 'connectyou';

//echo "tsert";
// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Database settings
$db="connectyou";
$dbhost="localhost";
$dbport=3306;
$dbuser="sky";
$dbpasswd="root";

 $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db, $dbuser, $dbpasswd);
// $pdo->exec("SET CHARACTER SET utf8");

//$stmt = $mysqli->prepare("INSERT INTO users (name, mail, password) VALUES ('admin', 'admin', 'admin');");
//$name = 'admin';
//$mail = 'admin@admin.com';
//$password = 'admin';

$stmt = $pdo->prepare("SELECT * FROM users WHERE name = 'admin'");

$stmt->execute();

$res = $stmt->fetchAll();
$res = $res[0];
echo $res['mail'];
//foreach ( $res as $row ) {
//    echo $row['name'];
//}
