<?php

//! 1. Variables & Data Types

//* Q1. Create variables of all data types and print their values.

// $number = 20;
// $number = 20;
// $string = "pradip";
// $float = 21.5;
// $boolean = true;
// $array = [1, 23, 4, 5, 6];
// $object = (object)["name" => "pradip"];

// echo "<br>" . $number;
// echo "<br>" . $string;
// echo "<br>" . $float;
// echo "<br>" . $boolean;
// echo "<br>";
// print_r($array);
// echo "<br>";
// echo "<br>" . $object->name;

//* Q2. Swap two variables without using a third variable.

// $a = 5;
// $b = 10;

// echo "Before Swap: a = $a, b = $b<br>";

// Swapping without using a third variable

// $a = $a + $b;  // a = 15
// $b = $a - $b;  // b = 5
// $a = $a - $b;  // a = 10

// echo "After Swap: a = $a, b = $b";


//* Q3. Check the type of a variable using PHP functions.

// $number = 20;
// $number = 20;
// $string = "pradip";
// $float = 21.5;
// $boolean = true;
// $array = [1, 23, 4, 5, 6];
// $object = (object)["name" => "pradip"];

// var_dump($number);
// echo"<hr>";

// var_dump($number);
// echo"<hr>";

// var_dump($string);
// echo"<hr>";

// var_dump($float);
// echo"<hr>";

// var_dump($boolean);
// echo"<hr>";

// var_dump($array);
// echo"<hr>";

// var_dump($object);
// echo"<hr>";


//* Q4. Write a script that stores student info (name, age, grade) and prints them.

// $name = "Pradip";
// $age = 20;
// $grade = "A";

// echo "Student Information:<br>";
// echo "Name: " . $name . "<br>";
// echo "Age: " . $age . "<br>";
// echo "Grade: " . $grade . "<br>";


//! 2. String Methods

//* Q5. Count the number of words in a string.

// $str = "Count the number of words in a string.";
// $count = str_word_count($str);
// echo $str . "<br>";
// echo "word count " . $count;


//* Q6. Reverse a string and check if it's a palindrome.

// $ori = "madam";

// $rev = strrev($ori);

// echo "original string : $ori <br>";
// echo "reversed string : $rev <br>";

// if ($ori === $rev) {
//     echo " Result : the string is palindrome";
// } else {
//     echo " Result : the string is not palindrome";
// }


//* Q7. Find and replace a word in a sentence using `str_replace()`.

// $str = "Find and replace a word in a sentence using `str_replace()`";
// $Find = "replace";
// $replace = "pradip practical test";

// $data = str_replace($Find, $replace, $str);
// echo $data;

//* Q8. Convert the first letter of each word to uppercase using `ucwords()`.


// $str = "Convert the first letter of each word to uppercase using `ucwords()`.";
// $upper = ucwords($str);
// echo "eche word first letter uppercase := " . $upper;
// echo "<br>";
// echo "original" . $str;


//! 3. PHP Numbers & Casting

//* Q9. Convert a float to an integer and display both.

// $float = 3.14;

// $data = (int) $float;
// echo "original " . $float;
// echo "<br>";
// echo "casting " . $data;

//* Q10. Check if a variable is numeric using `is_numeric()`.

// $float = "pradip";
// $float = 32;

// if (is_numeric($float)) {
//     echo "that value $float are is_numeric value";
// } else {

//     echo "that value $float are not is_numeric value";
// }


//* Q11. Write a function that casts different types to float and sums them.

// function SumAScasting($a, $b, $c)
// {
//     $a = (float)$a;
//     $b = (float)$b;
//     $c = (float)$c;

//     return $a + $b + $c;
// }

// $num1 = "20.33";
// $num2 = 33.3;
// $num3 = 20;

// $result = SumAScasting($num1, $num2, $num3);
// echo "this is SUM of Casting Float Value :- $result"


//! 4. Math Functions

//* Q12. Find the square root of a number.

// $val = 144;

// $res = sqrt($val);
// echo "squerroot of $val is $res";


//* Q13. Generate a random number between 1 and 100.

// $randomNumber = rand(1, 100);
// echo "Random Number between 1 and 100: $randomNumber";

//* Q14. Find the absolute difference between two numbers.

// $num1 = 25;
// $num2 = 40;

// $difference = abs($num1 - $num2);

// echo "The absolute difference between $num1 and $num2 is: $difference";

//* Q15. Round a floating number to 2 decimal places.

// $floatNumber = 9.95;

// $rounded = round($floatNumber);

// echo "Original Number: $floatNumber<br>";
// echo "Rounded Number: $rounded";


//! 5. Constants

//* Q16. Define a constant and try changing its value.

// define("SITE_NAME", "Pradip's Learning Portal");

// echo "Welcome to " . SITE_NAME;

//* Q17. Use `define()` and `const` to create constants and explain the difference.


// define("SITE_NAME", "Pradip's Learning Portal");
// echo "Welcome to " . SITE_NAME;
// echo "<hr>";
// const MYCAR = "Volvo , BMW , Audi";
// echo MYCAR;


// Using define()
// define("SITE_NAME", "Pradip Academy");

// // Using const
// const AUTHOR = "Pradip Parmar";

// // Displaying constants
// echo "Website: " . SITE_NAME . "<br>";
// echo "Author: " . AUTHOR;

//! 6. Operators

//* Q18. Demonstrate usage of all arithmetic operators.

// $a = 10;
// $b = 3;

// echo "Addition (+): $a + $b = " . ($a + $b) . "<hr>";
// echo "Subtraction (-): $a - $b = " . ($a - $b) . "<hr>";
// echo "Multiplication (*): $a * $b = " . ($a * $b) . "<hr>";
// echo "Division (/): $a / $b = " . ($a / $b) . "<hr>";
// echo "Modulus (%): $a % $b = " . ($a % $b) . "<hr>";
// echo "Exponentiation (**): $a ** $b = " . ($a ** $b) . "<hr>";

//* Q19. Use logical operators in an age-eligibility checker.

// $age = 20;
// $isCitizen = true;

// if ($age >= 18 && $isCitizen) {
//     echo "✅ You are eligible for a driving license.";
// } elseif ($age >= 18 && !$isCitizen) {
//     echo "❌ You must be a citizen to get a license.";
// } else {
//     echo "❌ You must be at least 18 years old.";
// }

//* Q20. Create a login simulation using comparison operators.

// $correctUsername = "Admin";
// $correctPassword = "123456";

// $inputUsername = "Admin";
// $inputPassword = "123456";

// if ($inputUsername === $correctUsername && $inputPassword === $correctPassword) {
//     echo "✅ Login successful. Welcome, $inputUsername!";
// } else {
//     echo "❌ Login failed. Invalid username or password.";
// }



//! 7. Conditional Statements

//* Q21. Write a script to check if a number is positive, negative, or zero.

// $val = -01;

// if ($val > 0) {
//     echo "this number is positive";
// } elseif ($val < 0) {
//     echo "this number is negative";
// } else {
//     echo "this number is zero";
// }

//* Q22. Check if a student passed or failed using nested `if-else`.

// $marks = 88;

// if ($marks >= 40) {
//     echo "✅ You Passed!<br>";

//     if ($marks >= 85) {
//         echo "🎉 Congratulations! You achieved a High Distinction.";
//     } else {
//         echo "🙂 Good job!";
//     }
// } else {
//     echo "❌ You Failed. Better luck next time.";
// }

//* Q23. Create a grading system using `if-elseif-else`.

// $marks = 68;

// if ($marks >= 90 && $marks <= 100) {
//     echo "Grade: A+";
// } elseif ($marks >= 75 && $marks < 90) {
//     echo "Grade: A";
// } elseif ($marks >= 60 && $marks < 75) {
//     echo "Grade: B";
// } elseif ($marks >= 40 && $marks < 60) {
//     echo "Grade: C";
// } elseif ($marks >= 0 && $marks < 40) {
//     echo "Grade: F (Fail)";
// } else {
//     echo "❌ Invalid marks entered.";
// }


//! 8. Functions

//* Q24. Write a function to calculate factorial of a number.

// function factorial($num)
// {
//     if ($num < 0) {
//         return "this is not factorial number";
//     }

//     $fact = 1;
//     for ($i = 1; $i < $num; $i++) {
//         $fact *= $i;
//     }
//     return $fact;
// }
// echo "factorial of 12 is " . factorial(12)


//* Q25. Create a function that accepts name and prints a greeting.

// $name = "pradip";

// function name($name)
// {
//     echo $name . "  hello how are you ";
// }
// name($name)

//* Q26. Write a function that accepts an array and returns the average.

// function calAvg($num)
// {
//     $total = array_sum($num);
//     $count = count($num);

//     if ($count === 0) {
//         echo "this array are empty";
//     }

//     $avg = $total / $count;
//     return $avg;
// }
// $nums = [10, 20, 30, 50, 10];
// echo "🔢 Average is: " . calAvg($nums);



//! 9. Arrays

//* Q27. Create an associative array of employee details and print using `foreach`.


// $employee = [
//     "name" => "pradip",
//     "position" => "web devloper",
//     "salary" => 35000
// ];


// echo "<h3>👤 Employee Details:</h3>";
// foreach ($employee as $key => $value) {
//     echo ucfirst($key) . " : " . ucfirst($value) . "<br>";
// }

//* Q28. Sort an array of numbers in ascending and descending order.


// $numbers = [25, 10, 65, 42, 5];

//?! Ascending order
// sort($numbers);
// echo "<h4>🔼 Ascending Order:</h4>";
// foreach ($numbers as $num) {
//     echo $num . " ";
// }

//?! Descending order
// $numbers = [25, 10, 65, 42, 5]; // Reset array
// rsort($numbers);
// echo "<h4>🔽 Descending Order:</h4>";
// foreach ($numbers as $num) {
//     echo $num . " ";
// }


//* Q29. Merge two arrays and remove duplicates.

// $arr = [11, 22, 33, 14, 25, 26, 17];
// $arr1 = [21, 22, 53, 24, 25, 26, 27];

// $fmerge = array_merge($arr, $arr1);

// $unic = array_unique($fmerge);

// echo "<h3>✅ Merged and Unique Array:</h3><hr>";
// print_r($fmerge);
// echo "<h3>✅ Merged and Unique Array:</h3> <hr>";
// print_r($unic);


//* Q30. Count how many times a value appears in an array.

// $fruits = ["apple", "banana", "apple", "orange", "banana", "apple"];

// // Count frequency of each value
// $counted = array_count_values($fruits);

// // Display results
// echo "<h3>🍎 Fruit Count:</h3>";
// foreach ($counted as $fruit => $count) {
//     echo "$fruit appears $count time(s).<br>";
// }


//! 10. Superglobals

//* Q31. Use `$_SERVER` to print client IP and server name.

// echo "<h3>🌐 Server & Client Info:</h3>";

// // Get and print client IP
// $clientIP = $_SERVER['REMOTE_ADDR'];
// echo "🔹 Client IP Address: $clientIP <br>";

// // Get and print server name
// $serverName = $_SERVER['SERVER_NAME'];
// echo "🔹 Server Name: $serverName";

//* Q32. Use `$_GET` to send two numbers and display their sum.

// html

//* Q33. Use `$_POST` in a form to collect and display user info.

// html



//! 11. Regular Expressions

//* Q34. Write a regex to validate email addresses.

// function validateEmail($email)
// {
//     // Simple email regex pattern
//     $pattern = "/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/";

//     if (preg_match($pattern, $email)) {
//         echo "✅ Valid email: $email";
//     } else {
//         echo "❌ Invalid email: $email";
//     }
// }

// // Test it
// validateEmail("pradip@example.com");
// echo "<br>";
// validateEmail("invalid-email@");


//* Q35. Use `preg_match()` to check if a string contains only letters.

// function isOnlyLetters($string)
// {
//     // Regex for letters only
//     if (preg_match("/^[a-zA-Z]+$/", $string)) {
//         echo "✅ The string '$string' contains only letters.<br>";
//     } else {
//         echo "❌ The string '$string' contains other characters.<br>";
//     }
// }

// // Test cases
// isOnlyLetters("Pradip");
// isOnlyLetters("Code123");
// isOnlyLetters("HelloWorld");
// isOnlyLetters("John_Doe");

//* Q36. Extract numbers from a sentence using `preg_match_all()`.

// $text = "I have 2 apples, 3.5 mangoes, and 10 bananas.";

// // Pattern to match integers and decimal numbers
// preg_match_all("/\d+(\.\d+)?/", $text, $matches);

// echo "<h3>🍎 Numbers Found:</h3>";
// print_r($matches[0]);


//! 12. Regex Modifiers

//* Q37. Match a word in a case-insensitive way using regex.

// $text = "I love learning Php and PHP frameworks.";

// // Check if the word 'php' exists in any case
// if (preg_match("/php/i", $text)) {
//     echo "✅ The word 'php' was found (case-insensitive match).";
// } else {
//     echo "❌ The word 'php' was not found.";
// }

//* Q38. Use `preg_replace()` with modifiers to remove all spaces.

// $text = "This is a string with lots of    spaces.";

// // Remove all whitespace characters (spaces, tabs, etc.)
// $cleanText = preg_replace("/\s+/", "", $text);

// echo "<h3>🔍 Original:</h3> $text";
// echo "<h3>✅ Without Spaces:</h3> $cleanText";


//! 13. Forms

//* Q39. Create a registration form that collects name, email, and password.

// html

//* Q40. Validate if all form fields are filled before submission.

// html


//! 14. Date & Time

//* Q41. Display the current date and time in `d-m-Y H:i:s` format.

// echo date("d-m-Y H:i:s");

//* Q42. Calculate the user's age based on birthdate input.

// html



//! 15. Include/Require

//* Q43. Create a `header.php` and `footer.php` and include them in a main file.

// include "/xampp/htdocs/Pradip_php/PHP Advanced/Header.php";
// require "/xampp/htdocs/Pradip_php/PHP Advanced/Header.php";

//* Q44. Use `require_once` to include a configuration file.

// html


//! 16. File Handling

//* Q45. Create a file, write some content, then read and display it.

// $filename = "my_file.txt";
// $content = "Hello, this is a test file.\nWritten using PHP file handling.";

// // Step 1: Write content to file
// file_put_contents($filename, $content);

// // Step 2: Read the file content
// if (file_exists($filename)) {
//     $readData = file_get_contents($filename);
//     echo "<h3>📄 File Content:</h3>";
//     echo "<pre>$readData</pre>";
// } else {
//     echo "❌ File not found!";
// }

//* Q46. Append content to an existing file without overwriting it.
// $filename = "my_file.txt";
// $newContent = "\nThis line is appended using PHP.";

// // Open file in append mode ('a')
// $file = fopen($filename, "a");

// if ($file) {
//     fwrite($file, $newContent); // Append the content
//     fclose($file);              // Close the file
//     echo "✅ New content appended successfully.<br>";

//     // Display updated file content
//     echo "<h3>📄 Updated File Content:</h3>";
//     echo "<pre>" . file_get_contents($filename) . "</pre>";
// } else {
//     echo "❌ Unable to open the file.";
// }


//! 17. File Upload

//* Q47. Create a form to upload an image file and move it to a folder.

// html

//* Q48. Validate that only image files (jpg/png) are uploaded.

// html


//! 18. Cookies

//* Q49. Create a cookie for storing user's name and greet them if the cookie exists.

// $cookie_name = "user";
// $cookie_value = "Parmar Pradip ";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// html

//! 19. Sessions

//* Q50. Start a session to store and retrieve user login status.



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Question Practical</title>
</head>

<body>

    <!-- Form to submit GET request -->
    <!-- <form method="get" action="">
        Enter First Number: <input type="text" name="num1"><br><br>
        Enter Second Number: <input type="text" name="num2"><br><br>
        <input type="submit" value="Calculate Sum">
    </form> -->

    <?php
    //* Q32. Use `$_GET` to send two numbers and display their sum.
    // if (isset($_GET['num1']) && isset($_GET['num2'])) {
    //     $a = $_GET['num1'];
    //     $b = $_GET['num2'];

    //     if (is_numeric($a) && is_numeric($b)) {
    //         $sum = $a + $b;
    //         echo "🧮 Sum of $a and $b is: $sum";
    //     } else {
    //         echo "⚠️ Please enter valid numbers.";
    //     }
    // }
    ?>


    <!-- <div>
        <form method="post" action="">
            <label>👤 Name:</label>
            <input type="text" name="name" required><br><br>

            <label>📧 Email:</label>
            <input type="email" name="email" required><br><br>

            <label>🎂 Age:</label>
            <input type="number" name="age" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div> -->
    <?php
    //* Q33. Use `$_POST` in a form to collect and display user info.
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name  = $_POST["name"];
    //     $email = $_POST["email"];
    //     $age   = $_POST["age"];

    //     echo "<h3>✅ Submitted User Info:</h3>";
    //     echo "👤 Name: $name <br>";
    //     echo "📧 Email: $email <br>";
    //     echo "🎂 Age: $age <br>";
    // }
    ?>

    <!-- <h2>📝 Registration Form</h2>
    <form method="post" action="">
        <label>👤 Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>📧 Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>🔐 Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form> -->
    <?php
    //* Q39. Create a registration form that collects name, email, and password.
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name     = htmlspecialchars($_POST["name"]);
    //     $email    = htmlspecialchars($_POST["email"]);
    //     $password = $_POST["password"]; // Normally you'd hash this

    //     echo "<h2>✅ Registration Successful!</h2>";
    //     echo "👤 Name: $name<br>";
    //     echo "📧 Email: $email<br>";
    //     echo "🔐 Password: " . str_repeat("*", strlen($password)); // Do not display actual password
    // }
    ?>


    <!-- <h2>📝 Registration Form</h2> -->
    <?php
    // if ($error):
    ?>
    <!-- <p style="color:red; font-weight:bold;"><?php
                                                    //  echo $error;
                                                    ?></p> -->
    <?php
    //  endif;
    ?>
    <!-- 
    <form method="post" action="">
        <label>👤 Name:</label><br>
        <input type="text" name="name" value="<?php
                                                // echo $name;
                                                ?>"><br><br>

        <label>📧 Email:</label><br>
        <input type="email" name="email" value="<?php
                                                // echo $email; 
                                                ?>"><br><br>

        <label>🔐 Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Register">
    </form> -->

    <?php
    //* Q40. Validate if all form fields are filled before submission.
    // $name = $email = $password = "";
    // $error = "";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name     = trim($_POST["name"]);
    //     $email    = trim($_POST["email"]);
    //     $password = trim($_POST["password"]);

    //     if (empty($name) || empty($email) || empty($password)) {
    //         $error = "❌ All fields are required!";
    //     } else {
    //         echo "<h2>✅ Registration Successful!</h2>";
    //         echo "👤 Name: $name<br>";
    //         echo "📧 Email: $email<br>";
    //         echo "🔐 Password: " . str_repeat("*", strlen($password));
    //     }
    // }
    ?>

    <?php
    //* Q42. Calculate the user's age based on birthdate input.
    // $age = "";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $birthdate = $_POST["birthdate"];

    //     if (!empty($birthdate)) {
    //         $today = new DateTime();                   // Current date
    //         $birth = new DateTime($birthdate);         // Birthdate entered
    //         $interval = $today->diff($birth);          // Difference between today and birthdate
    //         $age = $interval->y;                       // Extract age in years
    //     } else {
    //         $age = "❌ Please enter a valid birthdate.";
    //     }
    // }
    ?>
    <!-- 
    <h2>🎂 Age Calculator</h2>

    <form method="post">
        <label for="birthdate">Enter your birthdate:</label><br>
        <input type="date" name="birthdate" required><br><br>
        <input type="submit" value="Calculate Age">
    </form> -->

    <?php
    // if ($age !== "") {
    //     echo "<h3>✅ Your age is: <span style='color:green;'>$age</span> years.</h3>";
    // }
    ?>


    <?php
    //* Q44. Use `require_once` to include a configuration file.
    // require_once 'config.php';

    // echo "<h1>Welcome to $site_name</h1>";
    // echo "<p>Database Host: $db_host</p>";
    // echo "<p>Database User: $db_user</p>";
    ?>
    <?php
    //* Q47. Create a form to upload an image file and move it to a folder.

    // $uploadOk = 1;

    // if (isset($_POST["submit"]) && isset($_FILES["img_upload"])) {
    //     $target_dir = "upload/";
    //     $target_file = $target_dir . basename($_FILES["img_upload"]["name"]);
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //     // Check if image is actual image
    //     $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    //     if ($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".<br>";
    //     } else {
    //         echo "File is not an image.<br>";
    //         $uploadOk = 0;
    //     }

    //     // Check if file already exists
    //     if (file_exists($target_file)) {
    //         echo "Sorry, file already exists.<br>";
    //         $uploadOk = 0;
    //     }

    //     // Check file size (limit: 500KB)
    //     if ($_FILES["img_upload"]["size"] > 500000) {
    //         echo "Sorry, your file is too large.<br>";
    //         $uploadOk = 0;
    //     }

    //     // Allow only certain formats (optional but recommended)
    //     if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
    //         echo "Only JPG, JPEG, PNG & GIF files are allowed.<br>";
    //         $uploadOk = 0;
    //     }

    //     // Try to upload file
    //     if ($uploadOk == 1) {
    //         if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
    //             echo "The file " . htmlspecialchars(basename($_FILES["img_upload"]["name"])) . " has been uploaded.";
    //         } else {
    //             echo "Sorry, there was an error uploading your file.";
    //         }
    //     } else {
    //         echo "File was not uploaded due to an error.";
    //     }
    // } else {
    //     echo "No file uploaded.";
    // }
    ?>
    <!-- <form action="Question.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="img_upload">
        <input type="submit" value="Upload Image" name="submit">
    </form> -->


    <?php
    // if (!isset($_COOKIE[$cookie_name])) {
    //     echo "Cookie named '" . $cookie_name . "' is not set!";
    // } else {
    //     echo "Cookie '" . $cookie_name . "' is set!<br>";
    //     echo "Value is: " . $_COOKIE[$cookie_name];
    // }
    ?>

    <?php
    //* Q50 
    // session_start();

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $username = $_POST["username"];

    //     if (!empty($username)) {
    //         $_SESSION["user"] = $username;
    //         header("Location: config.php");
    //         exit();
    //     } else {
    //         echo "❌ Please enter a username.";
    //     }
    // }
    ?>

    <!-- <h2>🔐 Login</h2>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Enter username" required>
        <button type="submit">Login</button>
    </form> -->
</body>

</html>