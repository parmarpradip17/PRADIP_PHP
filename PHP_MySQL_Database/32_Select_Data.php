<?php

//! PHP MySQL Select Data

//! Select Data From a MySQL Database

//? The SELECT statement is used to select data from one or more tables:

// SELECT column_name(s) FROM table_name

//? or we can use the * character to select ALL columns from a table:

// SELECT * FROM table_name


//! Select Data With MySQLi


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// // Create connection
// $conn = new mysqli($servername, $user, $pass, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "<br> id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();




// ?

// $sql = "SELECT id , firstname , lastname  FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<br> id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();







// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = mysqli_connect($servername, $user, $pass, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn);



//! html table

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// // Create connection
// $conn = new mysqli($servername, $user, $pass, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<table><tr><th>ID</th><th>Name</th></tr>";
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// $conn->close();


//! PDO 

// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator
// {
//     function __construct($it)
//     {
//         parent::__construct($it, self::LEAVES_ONLY);
//     }

//     function current()
//     {
//         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
//     }

//     function beginChildren()
//     {
//         echo "<tr>";
//     }

//     function endChildren()
//     {
//         echo "</tr>" . "\n";
//     }
// }

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
//     $stmt->execute();

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
//         echo $v;
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;

// echo "</table>";


?>
<?php ?>