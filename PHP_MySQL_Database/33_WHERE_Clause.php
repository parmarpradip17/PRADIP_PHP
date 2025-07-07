<?php


//! PHP MySQL Use The WHERE Clause

//! Select and Filter Data From a MySQL Database
//? The WHERE clause is used to filter records.

//? The WHERE clause is used to extract only those records that fulfill a specified condition.

// SELECT column_name(s) FROM table_name WHERE column_name operator value 

//* Select and Filter Data With MySQLi

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "mydb";


// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='parmar'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();

// !


// $sql = "SELECT id , firstname, lastname FROM MyGuests WHERE lastname='parmar'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 result";
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

// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE firstname='pradip'";
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

//! You can also put the result in an HTML table:

//? Example (MySQLi Object-oriented)

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

// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
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

//! Select Data With PDO (+ Prepared Statements)

// echo "<table style='border: solid 1px black;background:skyblue;color: #000000;font-weight:600;width: 100%;max-width: 1200px;margin: 0 auto; text-align: center;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator
// {
//     function __construct($it)
//     {
//         parent::__construct($it, self::LEAVES_ONLY);
//     }

//     function current()
//     {
//         return "<td style='width:150px;border:1px solid black; '>" . parent::current() . "</td>";
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
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Dooley'");
//     $stmt->execute();

//     // set the resulting array to associative
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