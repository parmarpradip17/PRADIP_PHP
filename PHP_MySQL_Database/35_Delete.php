<?php

//! PHP MySQL Delete Data

//! Delete Data From a MySQL Table Using MySQLi and PDO
//? The DELETE statement is used to delete records from a table:

// DELETE FROM table_name
// WHERE some_column = some_value

//! Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records that should be deleted.
//! If you omit the WHERE clause, all records will be deleted!


//! Example (MySQLi Object-oriented)

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "php_pradip";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Correct SQL syntax
// $sql = "DELETE FROM collage WHERE id BETWEEN 0 AND 2";

// if ($conn->query($sql) === TRUE) {
//     echo "Records deleted successfully";
// } else {
//     echo "Error deleting records: " . $conn->error;
// }

// $conn->close();

//! Example (MySQLi Procedural)



// $conn = mysqli_connect($servername, $user, $pass, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // sql to delete a record
// $sql = "DELETE FROM MyGuests";

// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);


// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // sql to delete a record
// //   $sql = "DELETE FROM product WHERE id=2";
//   $sql = "DELETE FROM product ";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Record deleted successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;



?>
<?php ?>