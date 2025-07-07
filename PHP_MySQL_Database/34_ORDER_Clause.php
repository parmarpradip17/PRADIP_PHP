<?php


//! PHP MySQL Use The ORDER BY Clause 

//! Select and Order Data From a MySQL Database
//? The ORDER BY clause is used to sort the result-set in ascending or descending order.
//? The ORDER BY clause sorts the records in ascending order by default.
//? To sort the records in descending order, use the DESC keyword.

// SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC 

//! Select and Order Data With MySQLi

//? Example (MySQLi Object-oriented)

// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed :" . $conn->connect_error);
// }

// $sql = "SELECT id, firstname,lastname FROM myguests ORDER BY firstname ASC ";
// // $sql = "SELECT id, firstname,lastname FROM myguests ORDER BY firstname DESC ";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();

// //?






// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "mydb";

// $conn = mysqli_connect($servername, $user, $pass, $dbname);

// if (!$conn) {
//     die("Connection failed :" . mysqli_connect_error());
// }

// $sql = "SELECT id, firstname, lastname FROM myguests ORDER BY lastname DESC ";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn);


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

// $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }
// $conn->close();


//! Select Data With PDO (+ Prepared Statements)


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
//         return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
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
//     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname DESC");
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest List Table</title>
    <style>
        body {
            background: skyblue;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 10px 15px;
            text-align: left;
        }

        th {
            background-color: #0077b6;
            color: white;
        }
    </style>
</head>

<body>

    <h2>Guest List (Ordered by Last Name DESC)</h2>

    <?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "mydb";

    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query
    $sql = "SELECT id, firstname, lastname FROM myguests ORDER BY lastname DESC";
    $result = mysqli_query($conn, $sql);

    // Output results as a table
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }

    mysqli_close($conn);
    ?>

</body>

</html>

<?php ?>