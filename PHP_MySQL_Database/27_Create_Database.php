<?php

//! PHP Create a MySQL Database

//! A database consists of one or more tables.

//? You will need special CREATE privileges to create or to delete a MySQL database.
//? Create a MySQL Database Using MySQLi and PDO
//? The CREATE DATABASE statement is used to create a database in MySQL.




// $servername = "localhost";
// $user = "root";
// $pass = "";
// $DB_name = "myDATA";
// // Create connection
// $conn = new mysqli($servername, $user, $pass);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // SQL to create database
// $sql = "CREATE DATABASE IF NOT EXISTS " . $DB_name;

// if ($conn->query($sql) === TRUE) {
//     echo "Database  created successfully ";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// $conn->close();


//! 🧩 Example: Connecting to MySQL and Selecting a Database

// We’ll demonstrate:

// * ✅ MySQLi Object-Oriented
// * ✅ MySQLi Procedural
// * ✅ PDO



//! 🔷 1. MySQLi (Object-Oriented)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDATABAse";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// // if ($conn->connect_error) {
// //     die("Connection failed: " . $conn->connect_error);
// // } else {
// //     echo "Connected successfully (MySQLi OOP)";
// // }

// $sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;

// if ($conn->query($sql) === TRUE) {
//     echo "Database  created successfully ";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// $conn->close();



//! 🔷 2. MySQLi (Procedural)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "luxury_car";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);


// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // create datbase if not exist in server := 
// $sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;

// if (mysqli_query($conn, $sql)) {
//     echo "this database are created  : database Name :- " . $dbname;
// } else {
//     echo "this database are not created ";
// }
// mysqli_close($conn);


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "luxury_car";

// // Create connection (without selecting a DB)
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database if it doesn't exist
// $sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;

// if (mysqli_query($conn, $sql)) {
//     echo "✅ Database created or already exists: " . $dbname;
// } else {
//     echo "❌ Error creating database: " . mysqli_error($conn);
// }

// // Close connection
// mysqli_close($conn);



//! 🔷 3. PDO (PHP Data Objects)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "pradip";

// try {
//     // Step 1: Connect to MySQL without selecting a DB
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//     // Step 2: Create database if not exists
//     $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
//     $conn->exec($sql);
//     echo "✅ Database created or already exists: $dbname <br>";



//     // Step 3: Connect again using the new database
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "✅ Connected successfully to database '$dbname' (PDO)";
// } catch (PDOException $e) {
//     echo "❌ Connection failed: " . $e->getMessage();
// }



//! 🧠 Which One to Use?

//? Method               Pros                                                                         

//*  MySQLi OOP         Modern, easy to use for object-oriented code                                 
//*  MySQLi Procedural  Simple and straightforward                                                   
//*  PDO                ✅ Most flexible (supports many DB types), good security, best for large apps 



// Would you like examples for querying, inserting, updating, deleting data too?







//! 🔄 Quick Comparison Table:

//!  Feature                           MySQLi (Object-Oriented)     MySQLi (Procedural)     PDO (PHP Data Objects)                                

//?  API Style                       Object-Oriented                 Procedural                  Object-Oriented                                       
//?  Database Support                Only MySQL                      Only MySQL                  Works with many DBs (MySQL, PostgreSQL, SQLite, etc.) 
//?  Named Placeholders              ❌ No                           ❌ No                       ✅ Yes                                                 
//?  Prepared Statements             ✅ Yes                          ✅ Yes                      ✅ Yes                                                 
//?  Error Handling (Exception)      ❌ Default is silent            ❌ Default is silent        ✅ Can throw exceptions                                
//?  Code Readability & Reuse        ✅ Better                       👎 Messy for big apps       ✅ Better                                              
//?  OOP Features (classes, etc.)    ✅ Yes                          ❌ No                       ✅ Yes                                                 



//! 🔍 Explanation with Examples:

//! 🔹 1. MySQLi (Object-Oriented)


// $conn = new mysqli("localhost", "root", "", "mydb");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// * Uses OOP syntax
// * Good for modern apps using classes
// * Only works with MySQL



//! 🔹 2. MySQLi (Procedural)


// $conn = mysqli_connect("localhost", "root", "", "mydb");

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }


// * Uses function-based (procedural) style
// * Easier for beginners
// * Also only supports MySQL



//! 🔹 3. PDO (PHP Data Objects)


// try {
//     $conn = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected!";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }


// * Uses OOP
// * Supports many databases, not just MySQL
// * More secure & flexible
// * Uses named placeholders in prepared statements



//! ✅ Which One Should You Use?

//  Use Case                                                 Recommendation              
//  -------------------------------------------------------  --------------------------- 
//  ✅ Beginner or small project                              MySQLi (procedural) is fine 
//  ✅ Intermediate with MySQL only                           MySQLi (OOP)                
//  ✅ Professional or future-proof, or may switch databases  Use PDO                 



//! 🧠 In Simple Words:

// * MySQLi Procedural = Easy and simple
// * MySQLi OOP = Cleaner code using objects
// * PDO = Professional, powerful, and works with many databases



// Let me know if you want examples of how to do INSERT, SELECT, or prepared statements using each one!









//!  PHP MySQL Create Table

//? A database table has its own unique name and consists of columns and rows.

//* Create a MySQL Table Using MySQLi and PDO
//? The CREATE TABLE statement is used to create a table in MySQL.

//? We will create a table named "MyGuests", with five columns: "id", "firstname", "lastname", "email" and "reg_date":

// CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )



// !  Example

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "luxury_car";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }




// // create datbase if not exist in server := 
// $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )
// ";




// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// $conn->close();


// ? Example (MySQLi Object-oriented)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();


//? Example (MySQLi Procedural)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // sql to create table
// $sql = "CREATE TABLE products (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table products created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);





//? Example (PDO)


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// // ✅ Step 1: Create database if it doesn't exist
// try {
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
//     $conn->exec($sql);
//     echo "✅ Database '$dbname' created or already exists.<br>";
// } catch (PDOException $e) {
//     die("❌ Database creation failed: " . $e->getMessage());
// }

// // ✅ Step 2: Connect to the newly created database and create table
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50),
//         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     $conn->exec($sql);
//     echo "✅ Table 'MyGuests' created successfully.";
// } catch (PDOException $e) {
//     echo "❌ Table creation failed: " . $e->getMessage();
// }

// $conn = null;
























?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Create a MySQL Database</title>
</head>

<body style="
    font-family: system-ui;
    font-size: 24px;
    color:#040000;
    background:#ffe2e2;">

</body>

</html>