<?php


//! PHP MySQL Insert Multiple Records 

//! Insert Multiple Records Into MySQL Using MySQLi and PDO
//? Multiple SQL statements must be executed with the mysqli_multi_query() function.


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("connection failed : " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created sucessfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

// !

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "php_pradip";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("connection failed : " . $conn->connect_error);
// }
// $sql = "INSERT INTO pradip_parmar(name , age , city)VALUES ('Pradip' , 21 , 'Rajkot');";
// $sql .= "INSERT INTO pradip_parmar(name , age , city)VALUES ('Rajnish' , 20 , 'Junagadh');";
// $sql .= "INSERT INTO pradip_parmar(name , age , city)VALUES ('Shayam' , 22 , 'Anand');";


// if ($conn->multi_query($sql) === TRUE) {
//     echo " new record crteated successfully";
// } else {
//     echo "Error : " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

// !
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

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);



// !
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";


// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // begin the transaction
//     $conn->beginTransaction();
//     // our SQL statements
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES ('John', 'Doe', 'john@example.com')");
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES ('Mary', 'Moe', 'mary@example.com')");
//     $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES ('Julie', 'Dooley', 'julie@example.com')");

//     // commit the transaction
//     $conn->commit();
//     echo "New records created successfully";
// } catch (PDOException $e) {
//     // roll back the transaction if something failed
//     $conn->rollback();
//     echo "Error: " . $e->getMessage();
// }

// $conn = null;

?>
<?php ?>