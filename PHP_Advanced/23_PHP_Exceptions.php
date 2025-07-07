<?php

//! PHP Exceptions

//* What is an Exception?

//? An exception is an object that describes an error or unexpected behaviour of a PHP script.
//? Exceptions are thrown by many PHP functions and classes.
//? User defined functions and classes can also throw exceptions.
//? Exceptions are a good way to stop a function when it comes across data that it cannot use.


//* Throwing an Exception

//? The throw statement allows a user defined function or method to throw an exception.
//? When an exception is thrown, the code following it will not be executed.
//? If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.


// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }

// echo divide(6, 2);


//* The try...catch Statement

//? To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.

//! Syntax

//? try {
//?   code that can throw exceptions
//? } catch(Exception $e) {
//?   code that runs when an exception is caught
//? }



// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(1, 0);
// } catch (Exception $e) {
//     echo "Unable to divide.";
// }




//* The try...catch...finally Statement

//? The try...catch...finally statement can be used to catch exceptions.
//? Code in the finally block will always run regardless of whether an exception was caught. 
//? If finally is present, the catch block is optional.

//! Syntax

//? try {
//?   code that can throw exceptions
//? } catch(Exception $e) {
//?   code that runs when an exception is caught
//? } finally {
//?   code that always runs regardless of whether an exception was caught
//? }


// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(5, 0);
// } catch (Exception $e) {
//     echo "Unable to divide. <br>";
// } finally {
//     echo "Process complete.";
// }


// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Division by zero");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(5, 0);
// } catch (Exception $e) {
//     echo '<h2 style="font-size:24px; color:red;">Error: ' . $e->getMessage() . '</h2>';
//     echo '<h2 style="font-size:24px; color:red;">File: ' . $e->getFile() . '</h2>';
//     echo '<h2 style="font-size:24px; color:red;">Code: ' . $e->getCode() . '</h2>';
//     echo '<h2 style="font-size:24px; color:red;">Line: ' . $e->getLine() . '</h2>';
// } finally {
//     echo '<p style="font-size:24px; color:blue;">Process complete.</p>';
// }



// function agefinder($ages)
// {
//     // Filter ages 18 or older
//     $res = array_filter($ages, function ($age) {
//         if ($age >= 18) {
//             echo "<br> this is age is greater then 18 ===>" . $age;
//         } elseif ($age <= 18) {
//             echo "<br> this is age is less then 18 ===>" . $age;
//         } else {
//             echo "invalid age";
//         }
//     });

//     return $res;

//     // Display the filtered result
//     // foreach ($res as $age) {
//     //     echo $age . "<br>";
//     // }
// }



// function agefinder($ages)
// {
//     // Show messages and filter ages 18 or older
//     $res = array_filter($ages, function ($age) {
//         if ($age >= 18) {
//             echo "<br> This age is greater than 18 ==> " . $age;
//             return true; // Keep in filtered array
//         } elseif ($age < 18) {
//             echo "<br> This age is less than 18 ==> " . $age;
//             return false; // Exclude from filtered array
//         } else {
//             echo "<br> Invalid age ==> " . $age;
//             return false;
//         }
//     });

//     return $res;
// }

// $age = array(23, 31, 16, 13, 12, 21, 22, 14);
// agefinder($age);



//* The Exception Object

//? The Exception Object contains information about the error or unexpected behaviour that the function encountered.

//! Syntax
//? new Exception(message, code, previous)

//! Parameter Values

//!* Parameter	Description

//? message	    Optional. A string describing why the exception was thrown
//? code	    Optional. An integer that can be used to easily distinguish this exception from others of the same type
//? previous	Optional. If this exception was thrown in a catch block of another exception, it is recommended to pass that exception into this parameter

//! Methods

//? When catching an exception, the following table shows some of the methods that can be used to get information about the exception:

//!* Method	Description
//? getMessage()	Returns a string describing why the exception was thrown
//? getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
//? getCode()	    Returns the exception code
//? getFile()	    Returns the full path of the file in which the exception was thrown
//? getLine()	    Returns the line number of the line of code which threw the exception




// function divide($dividend, $divisor)
// {
//     if ($divisor == 0) {
//         throw new Exception("Division by zero", 1);
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(5, 0);
// } catch (Exception $ex) {
//     echo "<br>" . $code = $ex->getCode();
//     echo "<br>" . $message = $ex->getMessage();
//     echo "<br>" . $file = $ex->getFile();
//     echo "<br>" . $line = $ex->getLine();
//     echo "<br> Exception thrown in $file on line $line: [Code $code]
//   $message";
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exceptions</title>
</head>

<body>
    <!-- 
    <form action="23_PHP_Exceptions.php" method="post">
        <label>Number</label>
        <input type="text" name="num">
        <input type="submit" name="submit">
    </form> -->

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
    //     $val = $_POST["num"];

    //     function div($val)
    //     {
    //         if (!is_numeric($val)) {
    //             throw new Exception("Input must be a number.");
    //         }
    //         if ($val == 0) {
    //             throw new Exception("Division by zero is not allowed.");
    //         }
    //         return $val / 2;
    //     }

    //     try {
    //         $result = div($val);
    //         echo "Result: " . $result;
    //     } catch (Exception $e) {
    //         echo "Error: " . $e->getMessage();
    //         echo "<br> Line Error: " . $e->getLine();
    //         echo "<br> Code Error: " . $e->getCode();
    //         echo "<br> File Error: " . $e->getFile();
    //     }
    // }

    // $val = $_POST["num"];

    // if ($val <= 0) {
    //     throw new Exception("this is not a valid nuber");
    // }
    // $num = $val / 2;
    // echo "<br>" . $num;

    ?>
</body>

</html>