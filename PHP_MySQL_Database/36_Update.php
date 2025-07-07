<?php



//! PHP MySQL Update Data
//! Update Data In a MySQL Table Using MySQLi and PDO
//? The UPDATE statement is used to update existing records in a table:


// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 


//! Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which record or records that should be updated.
//! If you omit the WHERE clause, all records will be updated!



// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("connection failed : " . $conn->connect_error);
// }

// $sql = "UPDATE MyGuests set lastname='parmar' ";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $conn->error;
// }

// $conn->close();


//! Example (MySQLi Procedural)


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = mysqli_connect($servername, $user, $pass, $dbname);

// if (!$conn) {
//     die("connection failed" . mysqli_connect_error());
// }
// $sql = "UPDATE MyGuests set firstname='harsh', lastname = 'lakhani' where id=3 ";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);




// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

//     // Prepare statement
//     $stmt = $conn->prepare($sql);

//     // execute the query
//     $stmt->execute();

//     // echo a message to say the UPDATE succeeded
//     echo $stmt->rowCount() . " records UPDATED successfully";
// } catch (PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;




?>
<?php ?>