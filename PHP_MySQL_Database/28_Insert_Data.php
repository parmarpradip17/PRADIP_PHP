<?php


//! PHP MySQL Insert Data


//! Insert Data Into MySQL Using MySQLi and PDO
//? After a database and a table have been created, we can start adding data in them.

//* Here are some syntax rules to follow:

//? The SQL query must be quoted in PHP
//? String values inside the SQL query must be quoted
//? Numeric values must not be quoted
//? The word NULL must not be quoted

//? The INSERT INTO statement is used to add new records to a MySQL table:

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

//? To learn more about SQL, please visit our SQL tutorial.


//! Note: If a column is AUTO_INCREMENT (like the "id" column) or TIMESTAMP with 
//! default update of current_timesamp (like the "reg_date" column), 
//! it is no need to be specified in the SQL query; MySQL will automatically add the value.

//! Example (MySQLi Object-oriented)Get your own PHP Server

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully $sql";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// // ? create table 

// $conn = mysqli_connect($servername, $user, $pass, $dbname);

// if (!$conn) {
//     die("Connection Failed : " . mysqli_connect_errno());
// }

// $sql = "INSERT INTO product (firstname, lastname, email)
// VALUES ('Pradip', 'Parmar', 'pradip@gmail.com')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);


//! Example (PDO)

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO product (firstname, lastname, email)
//   VALUES ('drasti', 'patel', 'pateldrasti@example.com')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully";
// } catch (PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;



?>
<?php ?>