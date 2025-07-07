<?php

declare(strict_types=1); // strict requirement
//! PHP Functions

//! PHP User Defined Functions
//? Besides the built-in PHP functions, it is possible to create your own functions.

//? A function is a block of statements that can be used repeatedly in a program.
//? A function will not execute automatically when a page loads.
//? A function will be executed by a call to the function.



//* Create a Function
//? A user-defined function declaration starts with the keyword function, followed by the name of the function:


// function myMessage()
// {
//     echo "hello Good morning🔆!";
// }
// myMessage()

//!  Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.


//* Call a Function

//? To call the function, just write its name followed by parentheses ():


// function myMessage()
// {
//     echo "hello Good morning🔆!";
// }
// myMessage();



//* PHP Function Arguments

//? Information can be passed to functions through arguments. An argument is just like a variable.

// function familyName($fname)
// {
//     echo "$fname hello, Good morning!.<br>";
// }


// familyName("pradip");
// familyName("samir");
// familyName("vasant");
// familyName("kismat");
// familyName("tanveer");


// function familyName($fname, $year)
// {
//     echo "$fname parmar. Born in $year <br>";
// }

// familyName("pradip", "1975");
// familyName("samir", "1978");
// familyName("vasant", "1983");


//* PHP Default Argument Value

// function setHeight($minheight = 50)
// {
//     echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight();
// setHeight(135);
// setHeight(80);

//* PHP Functions - Returning values

// function sum($x, $y)
// {
//     $z = $x + $y;
//     return $z;
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);



// function is_even($v)
// {
//     return $v % 2 === 0;
// }
// $arr = [1, 2, 3, 4, 5];
// $evens = array_filter($arr, 'is_even');
// print_r($evens)


//* Passing Arguments by Reference

//? When a function argument is passed by reference, changes to the argument also change the variable that was passed in.
//? To turn a function argument into a reference, the & operator is used:


//! Use a pass-by-reference argument to update a variable:

// function add_five(&$value)
// {
//     $value += 5;
// }

// $num = 2;
// add_five($num);
// echo $num;


// function add_seven(&$thala)
// {
//     $thala -= 100;
// }
// $number = 50;
// add_seven($number);
// echo $number;


//* Variable Number of Arguments

//? By using the ... operator in front of the function parameter, 
//? the function accepts an unknown number of arguments. This is also called a variadic function.

//? The variadic function argument becomes an array.


//! A function that do not know how many arguments it will get:

// function sumMyNumbers(...$x)
// {
//     $n = 0;
//     $len = count($x);
//     for ($i = 0; $i < $len; $i++) {
//         $n += $x[$i];
//     }
//     return $n;
// }

// $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
// echo $a;

//! You can only have one argument with variable length, and it has to be the last argument.

//? The variadic argument must be the last argument:

// function myFamily($last, ...$first)
// {
//     $txt = "";
//     $len = count($first);
//     for ($i = 0; $i < $len; $i++) {
//         $txt = $txt . "Hi,$first[$i] $last.<br>";
//     }
//     return $txt;
// }
// $a = myFamily("sureshbhai", "samir", "pradip", "induben");
// echo $a;


//! If the variadic argument is not the last argument, you will get an error.


//? Having the ... operator on the first of two arguments, will raise an error:

// function myFamily(...$firstname, $lastname) {
//   $txt = "";
//   $len = count($firstname);
//   for($i = 0; $i < $len; $i++) {
//     $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
//   }
//   return $txt;
// }

// $a = myFamily("Doe", "Jane", "John", "Joey");
// echo $a;




//* PHP is a Loosely Typed Language

// function addNumbers(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers(5, "5 days");


//! To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.


// function addNumbers(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers(5, "5 days");
//? since strict is enabled and "5 days" is not an integer, an error will be thrown

//!Note
//! The strict declaration forces things to be used in the intended way.




//* PHP Return Type Declarations


//? PHP 7 also supports Type Declarations for the return statement. 
//? Like with the type declaration for function arguments, 
//? by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

//? To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.




// function addNumbers(float $a, float $b): float
// {
//     return $a + $b;
// }
// echo addNumbers(1.2, 5.2);

?>

<?php
//! function 

//* Create a Function
//* Call a Function
//* PHP Function Arguments
//* PHP Default Argument Value
//* PHP Functions - Returning values
//* Passing Arguments by Reference
//* Variable Number of Arguments
//* PHP is a Loosely Typed Language
//* PHP Return Type Declarations
?>

