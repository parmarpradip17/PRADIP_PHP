<?php
//! PHP MySQL Get Last Inserted ID

//! Get ID of The Last Inserted Record
//? If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field,
//? we can get the ID of the last inserted/updated record immediately.

//*  CREATE TABLE MyGuests (
//*  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//*  firstname VARCHAR(30) NOT NULL,
//*  lastname VARCHAR(30) NOT NULL,
//*  email VARCHAR(50),
//*  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//*  )

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "myDB";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("connection Failed : " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('pradip' , 'parmar' ,'pradipparmar@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "new record create successfylly. Last Insert id is: " . $last_id;
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

// $sql = "INSERT INTO pradip_parmar(name , age , city)
// VALUES ('shaym' , 21 , 'Keshod')";

// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "new record create successfully. Last id is: " . $last_id;
// }
// if ($conn->query($sql) === TRUE) {
//     echo "Last inserted ID is: " . $conn->insert_id;
// } else {
//     echo "Error : " . $sql . "<br>" . $conn->error;
// }
// $conn->close();

// !

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "myDB";

// $conn = mysqli_connect($servername, $user, $pass, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('drashti', 'patel', 'drastipatel@gmail.com')";

// if (mysqli_query($conn, $sql)) {
//     $last_id = mysqli_insert_id($conn);
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);



// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "myDB";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES ('John', 'Doe', 'john@example.com')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     $last_id = $conn->lastInsertId();
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } catch (PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;
?>
<?php ?>