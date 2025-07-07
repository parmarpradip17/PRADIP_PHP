<?php

//! PHP Operators


//? Operators are used to perform operations on variables and values.
//? PHP divides the operators in the following groups:

//* Arithmetic operators
//* Assignment operators
//* Comparison operators
//* Increment/Decrement operators
//* Logical operators


//! PHP Arithmetic Operators
// $a = 10;
// $b = 5;


//! +	Addition        	
//?  $x + $y	Sum of $x and $y	
// $sum = $a + $b;
// echo "Addition: $a + $b = $sum <br> "; // Output: 15

//! -	Subtraction     	
//?  $x - $y	Difference of $x and $y	
// $diff = $a - $b;
// echo "Subtraction: $a - $b = $diff <br> "; // Output: 5

//! *	Multiplication      
//?  $x * $y	Product of $x and $y	
// $product = $a * $b;
// echo "Multiplication: $a * $b = $product <br> "; // Output: 12

//! /	Division        	
//?  $x / $y	Quotient of $x and $y	
// $quotient = $a / $b;
// echo "Division: $a / $b = $quotient <br> "; // Output: 5

//! %	Modulus     	    
//?  $x % $y	Remainder of $x divided by $y	
// $remainder = $a % $b;
// echo "Modulus: $a % $b = $remainder <br> "; // Output: 1

//! **	Exponentiation      
//?  $x ** $y	Result of raising $x to the $y'th power

// $Result = $a ** $b;
// echo "Modulus: $a ** $b = $Result <br><br> "; // Output: 1




// ! PHP Assignment Operators

// $x = 10;
// $y = 5;

// ? Simple assignment
// ! $x = $y     // Now $x is 5

// $assignment = $x = $y;
// echo "$x = $y => $assignment <hr>";  // Output: 5

//* Resetting $x to 10 for next examples
// $x = 10;

// ? Addition
// ! $x += $y    // $x = $x + $y => $x = 10 + 5
// $Addition = $x += $y;
// echo "$x += $y => $Addition <hr>";  // Output: 15

// ? Subtraction
// $x = 10;
// $Subtraction = $x -= $y;       // $x = $x - $y => 10 - 5
// echo "$x -= $y => $Subtraction <hr>";  // Output: 5

// ? Multiplication
// $x = 10;
// $Multiplication = $x *= $y;       // $x = $x * $y => 10 * 5
// echo "$x *= $y => $Multiplication <hr>";  // Output: 50

// ? Division
// $x = 10;
// $Division = $x /= $y;       // $x = $x / $y => 10 / 5
// echo "$x /= $y => $Division <hr>";  // Output: 2

// ? Modulus
// $x = 10;
// $Modulus = $x %= $y;       // $x = $x % $y => 10 % 5
// echo "$x %= $y => $Modulus <hr>";  // Output: 0


//! PHP Comparison Operators
// $x = 100;
// $y = "100";



//? ==
//* Equal	
//? $x == $y
//? Returns true if $x is equal to $y	

// var_dump($x == $y);
// echo "<br><hr>";



//? ===
//* Identical	
//? $x === $y	
//? Returns true if $x is equal to $y, and they are of the same type	

// var_dump($x === $y);
// echo "<br><hr>";

//? !=
//* Not equal	
//? $x != $y	
//? Returns true if $x is not equal to $y	

// var_dump($x != $y);
// echo "<br><hr>";


//? <>
//* Not equal	
//? $x <> $y	
//? Returns true if $x is not equal to $y	

// var_dump($x <> $y);
// echo "<br><hr>";


//? !==
//* Not identical	
//? $x !== $y	
//? Returns true if $x is not equal to $y, or they are not of the same type	

// var_dump($x !== $y);
// echo "<br><hr>";


//? >
//* Greater than	
//? $x > $y	
//? Returns true if $x is greater than $y	

// var_dump($x > $y);
// echo "<br><hr>";


//? <
//* Less than	
//? $x < $y	
//? Returns true if $x is less than $y	

// var_dump($x < $y);
// echo "<br><hr>";



//? >=
//* Greater than or equal to	
//? $x >= $y	
//? Returns true if $x is greater than or equal to $y	

// var_dump($x >= $y);
// echo "<br><hr>";



//? <=
//* Less than or equal to	
//? $x <= $y	
//? Returns true if $x is less than or equal to $y	

// var_dump($x <= $y);
// echo "<br><hr>";



//? <=>
//* Spaceship	
//? $x <=> $y	
//? Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

// var_dump($x <=> $y);
// echo "<br><hr>";





//! PHP Increment / Decrement Operators

// $x = 10;

//? ++$x 
//* Pre-increment	
//? Increments $x by one, then returns $x	
// echo "Pre-Increment " . ++$x;
// echo "<br>";


//? $x++ 
//* Post-increment	
//? Returns $x, then increments $x by one	
// echo "Post-Increment " . $x++;
// echo "<br>";


//? --$x 
//* Pre-decrement	
//? Decrements $x by one, then returns $x	
// echo "Pre-decrement " . --$x;
// echo "<br>";


//? $x-- 
//* Post-decrement	
//? Returns $x, then decrements $x by one
// echo "Post-decrement " . $x--;
// echo "<br>";




//! PHP Logical Operators 

$x = 100;
$y = 50;


//! and	
//? And
//* $x and $y	
//? True if both $x and $y are true	


// if ($x and $y) {
//     echo "Hello world!";
// }

//! or	
//? Or
//* $x or $y	
//? True if either $x or $y is true	

// if ($x or $y) {
//     echo "Hello world!";
// }

//! xor	
//? Xor
//* $x xor $y	
//? True if either $x or $y is true, but not both	

// if ($x xor $y) {
//     echo "Hello world!";
// }


//! &&	
//? And
//* $x && $y	
//? True if both $x and $y are true	

// if ($x && $y) {
//     echo "Hello world!";
// }

//! ||	
//? Or
//* $x || $y	
//? True if either $x or $y is true	

// if ($x || $y) {
//     echo "Hello world!";
// }

//! !	
//? Not
//* !$x
//? True if $x is not true

// if (!$x) {
//     echo "Hello world!";
// }

?>

<?php
// //! Arithmetic: +, -, *, /, %
// $a = 10;
// $b = 5;
// $sum = $a + $b;
// echo "Addition: $a + $b = $sum <br> "; // Output: 15

// $a = 10;
// $b = 5;
// $diff = $a - $b;
// echo "Subtraction: $a - $b = $diff <br> "; // Output: 5

// $a = 4;
// $b = 3;
// $product = $a * $b;
// echo "Multiplication: $a * $b = $product <br> "; // Output: 12

// $a = 20;
// $b = 4;
// $quotient = $a / $b;
// echo "Division: $a / $b = $quotient <br> "; // Output: 5

// $a = 10;
// $b = 3;
// $remainder = $a % $b;
// echo "Modulus: $a % $b = $remainder <br><br> "; // Output: 1

// $x = 15;
// $y = 4;

// echo "x + y = " . ($x + $y) . "<br>";   // 19
// echo "x - y = " . ($x - $y) . "<br>";   // 11
// echo "x * y = " . ($x * $y) . "<br>";   // 60
// echo "x / y = " . ($x / $y) . "<br>";   // 3.75
// echo "x % y = " . ($x % $y) . "<br> <br>";   // 3

// //! Assignment: =, +=, -=

// $a = 10;

// $a += 5;  // $a = 10 + 5 = 15
// echo "After += : $a<br>";

// $a -= 3;  // $a = 15 - 3 = 12
// echo "After -= : $a<br>";

// $a *= 2;  // $a = 12 * 2 = 24
// echo "After *= : $a<br>";

// $a /= 4;  // $a = 24 / 4 = 6
// echo "After /= : $a<br>";

// $a %= 4;  // $a = 6 % 4 = 2
// echo "After %= : $a<br>";

// //! Comparison: ==, !=, >, <, ===

// $a = 10;

// $b = "10";

// $c = 20;

// echo "<br>";  // true (value equal)
// var_dump($a == $b);
// echo "<br>";  // true (value equal)
// var_dump($a === $b);  // false (different types)
// echo "<br>";  // true (value equal)
// var_dump($a != $c);   // true
// echo "<br>";  // true (value equal)
// var_dump($a < $c);    // true
// echo "<br>";  // true (value equal)
// var_dump($a >= $b);   // true
// echo "<br>";  // true (value equal)

// //! Logical: &&, ||, !
// $a = true;
// $b = false;
// echo "<br>";
// echo "AND (&&): " . ($a && $b) . "<br>";   // false
// echo "OR (||): " . ($a || $b) . "<br>";    // true
// echo "NOT (!): " . (!$a) . "<br>";         // false
// echo "XOR: " . ($a xor $b) . "<br>";       // true
?>
