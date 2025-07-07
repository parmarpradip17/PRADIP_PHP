<?php
// $servername = "localhost"; // Or your MySQL server's IP address
// $username = "root"; // Your MySQL username
// $password = ""; // Your MySQL password (empty for XAMPP/WAMP by default)
// $dbname = "my_database"; // The name of your database

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully using MySQLi (Object-Oriented)!";

// // You would typically perform database operations here

// // Close connection (optional, PHP closes it at script end)
// $conn->close();




// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = null; // Initialize $conn outside the try block

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";

//     // You would typically perform database operations here (INSERT, SELECT, UPDATE, DELETE)

// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// } finally {
//     // This block ensures the connection is closed whether an error occurred or not
//     if ($conn) { // Check if $conn was successfully initialized
//         $conn = null; // Explicitly close the connection by setting to null
//         echo "<br>Database connection closed."; // Indicate closure
//     }
// }

//!* Close the Connection
//? The connection will be closed automatically when the script ends. To close the connection before, use the following:

//* MySQLi Object-Oriented:
// $conn->close();

//* MySQLi Procedural:
// mysqli_close($conn);

//* PDO:
// $conn = null;


$servername = "localhost";
$username = "root";
$password = "";

$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db_connect</title>
</head>

<body>

</body>

</html>