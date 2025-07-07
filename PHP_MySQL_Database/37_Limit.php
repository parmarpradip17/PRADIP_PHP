<?php


//! PHP MySQL Limit Data Selections

//? Limit Data Selections From a MySQL Database
//? MySQL provides a LIMIT clause that is used to specify the number of records to return.

//? The LIMIT clause makes it easy to code multi page results or pagination with SQL,
//? and is very useful on large tables. Returning a large number of records can impact on performance.

//? Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". The SQL query would then look like this:

// $sql = "SELECT * FROM Orders LIMIT 30";

//! When the SQL query above is run, it will return the first 30 records.

//? What if we want to select records 16 - 25 (inclusive)?

//? Mysql also provides a way to handle this: by using OFFSET.

//? The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":

// $sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";

//?" You could also use a shorter syntax to achieve the same result:

// $sql = "SELECT * FROM Orders LIMIT 15, 10";

//! Notice that the numbers are reversed when you use a comma.


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "php_pradip";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT * FROM pradip_parmar LIMIT 10";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - City: " . $row["city"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();



//! 🔹 9. PHP MySQL `LIMIT` Data Selections

//! ✅ What is `LIMIT` in SQL?

//? The `LIMIT` clause is used to **control the number of records** returned from a `SELECT` query.



//! 📌 Basic Syntax:


// SELECT column_names FROM table_name LIMIT number;


// * `number`: the maximum number of rows you want to get from the database.



//! ✅ Example 1: Basic Usage

//! Suppose you have a table named `users`:

//*  id  name   age 

//?  1   Raj    21  
//?  2   Meera  22  
//?  3   Vivek  23  
//?  4   Priya  24  

//! PHP + MySQLi (Procedural)



// $conn = mysqli_connect("localhost", "root", "", "myDB");

// $sql = "SELECT id, name, age FROM users LIMIT 2";  // Get only first 2 rows
// $result = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($result)) {
//     echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . "<br>";
// }

// mysqli_close($conn);





//! ✅ Example 2: Pagination with `LIMIT` and `OFFSET`

//? You can also control which records to start from using:


// SELECT * FROM table LIMIT start_from, count;


//! Example:


// SELECT * FROM users LIMIT 2, 2;


// * Skips the first 2 records.
// * Then returns 2 more records.

//? So it returns records 3 and 4.



//! 🔁 In PHP (PDO Version):



// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDB";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $start = 2;
//     $count = 2;

//     $stmt = $conn->prepare("SELECT id, name, age FROM users LIMIT :start, :count");
//     $stmt->bindParam(':start', $start, PDO::PARAM_INT);
//     $stmt->bindParam(':count', $count, PDO::PARAM_INT);
//     $stmt->execute();

//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     foreach($result as $row) {
//         echo "ID: " . $row['id'] . " Name: " . $row['name'] . " Age: " . $row['age'] . "<br>";
//     }

// } catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;





//! ✅ Where is `LIMIT` used in **real life**?

// * 🔍 **Pagination** (e.g., showing 10 users per page)
// * 📦 **Recent posts or latest records** (e.g., `ORDER BY created_at DESC LIMIT 5`)
// * 📊 **Performance** (limit how much data is fetched)
// * 🧪 **Testing** (preview a few rows)



//! 🧠 Summary

//*  Feature       Description                                          

//?  `LIMIT n`     Get the first `n` rows                               
//?  `LIMIT x, y`  Skip `x` rows, then fetch `y` rows                   
//?  Used For      Pagination, search result preview, performance boost 





?>
<?php ?>