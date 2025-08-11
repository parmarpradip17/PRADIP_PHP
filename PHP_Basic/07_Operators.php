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

//! 	Exponentiation      
//?  $x  $y	Result of raising $x to the $y'th power

// $Result = $a  $b;
// echo "Modulus: $a  $b = $Result <br><br> "; // Output: 1




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

//?! |	
//? Or
//?* $x | $y	
//? True if either $x or $y is true	

//? if ($x | $y) {
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









//! 1. Arithmetic Operators

// Used for basic math calculations.

//*  Operator  Name            Example     Result                    

//?  `+`       Addition        `$x + $y`   Sum of `$x` and `$y`      
//?  `-`       Subtraction     `$x - $y`   Difference                
//?  `*`       Multiplication  `$x * $y`   Product                   
//?  `/`       Division        `$x / $y`   Quotient                  
//?  `%`       Modulus         `$x % $y`   Remainder                 
//?  `**`      Exponentiation  `$x ** $y`  `$x` to the power of `$y` 

//! 2. Assignment Operators

// Used to assign and modify variables.

//*  Operator  Meaning              Example     Equivalent To  

//?  `=`       Assign               `$x = 5`    `$x = 5`       
//?  `+=`      Add and assign       `$x += 3`   `$x = $x + 3`  
//?  `-=`      Subtract and assign  `$x -= 2`   `$x = $x - 2`  
//?  `*=`      Multiply and assign  `$x *= 4`   `$x = $x * 4`  
//?  `/=`      Divide and assign    `$x /= 2`   `$x = $x / 2`  
//?  `%=`      Modulus and assign   `$x %= 3`   `$x = $x % 3`  
//?  `=`     Power and assign     `$x = 3`  `$x = $x  3` 

//! 3. Comparison Operators

// Used to compare two values.

//*  Operator  Name                   Example      Result                           

//?  `==`      Equal                  `$x == $y`   true if values are equal         
//?  `===`     Identical              `$x === $y`  true if value & type match       
//?  `!=`      Not equal              `$x != $y`   true if values differ            
//?  `<>`      Not equal              `$x <> $y`   same as `!=`                     
//?  `!==`     Not identical          `$x !== $y`  true if value or type differs    
//?  `>`       Greater than           `$x > $y`    true if `$x` is bigger           
//?  `<`       Less than              `$x < $y`    true if `$x` is smaller          
//?  `>=`      Greater than or equal  `$x >= $y`   true if `$x` is bigger or equal  
//?  `<=`      Less than or equal     `$x <= $y`   true if `$x` is smaller or equal 
//?  `<=>`     Spaceship              `$x <=> $y`  -1, 0, or 1                      

//! 4. Increment / Decrement Operators

// Change variable values by one.

//*  Operator  Name            Example  Effect                

//?  `++$x`    Pre-increment   `++$x`   Increase, then return 
//?  `$x++`    Post-increment  `$x++`   Return, then increase 
//?  `--$x`    Pre-decrement   `--$x`   Decrease, then return 
//?  `$x--`    Post-decrement  `$x--`   Return, then decrease 

//! 5. Logical Operators

// Used for combining conditions.

//*  Operator  Name         Example      Result                                                         

//?  `and`     Logical AND  `$x and $y`  true if both true                                              
//?  `or`      Logical OR   `$x or $y`   true if one is true                                            
//?  `xor`     Logical XOR  `$x xor $y`  true if only one is true                                       
//?  `&&`      Logical AND  `$x && $y`   true if both true                                              
//?  \`                     \`           Logical OR                \`\$x     \$y\`  true if one is true 
//?  `!`       Logical NOT  `!$x`        true if `$x` is false                                          

//! 6. String Operators

// For working with text.

//*  Operator  Name                    Example     Result          

//?  `.`       Concatenation           `$x . $y`   Joins strings   
//?  `.=`      Concatenate and assign  `$x .= $y`  Appends to `$x` 

//! 7. Array Operators

// Used to compare or combine arrays.

//*  Operator  Name           Example      Result                               

//?  `+`       Union          `$a + $b`    Combines arrays                      
//?  `==`      Equal          `$a == $b`   true if same key/value pairs         
//?  `===`     Identical      `$a === $b`  true if same keys, values, and order 
//?  `!=`      Not equal      `$a != $b`   true if different                    
//?  `<>`      Not equal      `$a <> $b`   same as `!=`                         
//?  `!==`     Not identical  `$a !== $b`  true if not exactly the same         

//! 8. Type Operators

// Used for type checking.

//*  Operator      Name            Example                    Result                                           

//?  `instanceof`  Instance check  `$obj instanceof MyClass`  true if object is an instance of class/interface 

//! 9. Bitwise Operators

// Operate on bits.

//*  Operator  Name         Example    Result                                        

//?  `&`       AND          `$x & $y`  Bits set in both                              
//?  \`        \`           OR         `$x \ $y`                 Bits set in either 
//?  `^`       XOR          `$x ^ $y`  Bits set in one, not both                     
//?  `~`       NOT          `~$x`      Inverts bits                                  
//?  `<<`      Shift left   `$x << 2`  Shift bits left                               
//?  `>>`      Shift right  `$x >> 2`  Shift bits right                              

//! 10. Execution Operators

// Used to execute shell commands.

//*  Operator         Example         Effect                                    

//?  `` `command` ``  ``echo `ls`;``  Executes shell command and returns output 

//! 11. Error Control Operator

// Suppresses errors.

//*  Operator  Example                           Effect               

//?  `@`       `@file_get_contents('file.txt')`  Hides error messages 

//! 12. Null Coalescing Operators

// Introduced in PHP 7.

//*  Operator  Example                           Effect                               

//?  `??`      `$x = $_GET['id'] ?? 'default';`  Returns left if set, otherwise right 
//?  `??=`     `$var ??= 'default';`             Assigns if null                      

//! 13. Ternary Operator

// Short if-else.

//*  Operator  Example                           Result           

//?  `?:`      `$x = ($y > 10) ? 'Yes' : 'No';`  Yes if `$y > 10` 

// If you want, I can turn this into a printable PHP Operators Cheat Sheet with all these tables formatted for quick reference. That would make it easier for studying or interviews.


?>
