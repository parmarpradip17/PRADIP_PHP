<?php

//! MySQL Examples in Both MySQLi and PDO Syntax 

//? In this, and in the following chapters we demonstrate three ways of working with PHP and MySQL:

//* MySQLi (object-oriented)
//* MySQLi (procedural)
//* PDO


$host = 'localhost';
$user = 'root';       // default username in XAMPP
$pass = '';           // no password by default
$dbname = 'test_db';  // change to your actual DB name

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully!";



?>
<?php ?>