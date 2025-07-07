<?php 

//! PHP MySQL Prepared Statements

//! Prepared statements are very useful against SQL injections.

//? Prepared Statements and Bound Parameters
//? A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.

//? Prepared statements basically work like this:

//? Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified,
//? called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
//? The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
//? Execute: At a later time, the application binds the values to the parameters, 
//? and the database executes the statement. The application may execute the statement as many times as it wants with different values
//? Compared to executing SQL statements directly, prepared statements have three main advantages:

//? Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
//? Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
//? Prepared statements are very useful against SQL injections, because parameter values,
//? which are transmitted later using a different protocol, need not be correctly escaped.
//? If the original statement template is not derived from external input, SQL injection cannot occur.



//! Prepared Statements in MySQLi


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "php_pradip";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("Connection Failed: " . $conn->connect_error);
// }

// $stmt = $conn->prepare("INSERT INTO pradip_parmar (name, age, phone, city) VALUES ( ?, ?, ?, ?)");
// $stmt->bind_param("siss", $name, $age, $phone, $city);

// // Record 1

// $name = "Pradip";
// $age = 21;
// $phone = "7089703480";
// $city = "Anand";
// $stmt->execute();

// // Record 2

// $name = "Harsh";
// $age = 22;
// $phone = "7001847285";
// $city = "Rajkot";
// $stmt->execute();

// // Record 3

// $name = "Dhruv";
// $age = 20;
// $phone = "7816703470";
// $city = "Ahmedabad";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();


// $servername = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "php_pradip";

// $conn = new mysqli($servername, $user, $pass, $dbname);

// if ($conn->connect_error) {
//     die("Connection Failed " . $conn->connect_error);
// }

// $stmt = $conn->prepare("INSERT INTO pradip_parmar(name , age , city) values (?,?,?)");
// $stmt->bind_param("sis", $name, $age, $city);

// $name = "vasant";
// $age = 51;
// $city = "Anand";
// $stmt->execute();
// echo "New records created successfully";

// $stmt->close();
// $conn->close();








//! Prepared Statements in PDO
//? The following example uses prepared statements and bound parameters in PDO:



// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // prepare sql and bind parameters
//     $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES (:firstname, :lastname, :email)");
//     $stmt->bindParam(':firstname', $firstname);
//     $stmt->bindParam(':lastname', $lastname);
//     $stmt->bindParam(':email', $email);

//     // insert a row
//     $firstname = "John";
//     $lastname = "Doe";
//     $email = "john@example.com";
//     $stmt->execute();

//     // insert another row
//     $firstname = "Mary";
//     $lastname = "Moe";
//     $email = "mary@example.com";
//     $stmt->execute();

//     // insert another row
//     $firstname = "Julie";
//     $lastname = "Dooley";
//     $email = "julie@example.com";
//     $stmt->execute();

//     echo "New records created successfully";
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;







?>
<?php ?>