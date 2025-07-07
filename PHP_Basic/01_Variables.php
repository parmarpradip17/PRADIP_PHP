<?php

// echo "Hi,i am webdevloper <br>";

//! ✅ Variables in PHP

//? What is a variable?
//? A variable is a container used to store data — like text, numbers, or more complex data types.

//? Syntax:

// $variable_name = "value";
// echo "this is a {$variable_name}<br>";

//?  All PHP variables start with a dollar sign (`$`)
//?  Variable names are case-sensitive
//?  Example:

// $name = "Alice";
// $age = 25;
// echo " Name:- {$name}<br>
// age:-{$age}<br>";

//!  ✅ PHP Data Types


//!  1. String

//?  A sequence of characters.
//?  Enclosed in quotes (`" "` or `' '`).

// $greeting = "Hello, world!";

// echo "Greeting {$greeting}<br>";

//!  2. Integer

//?  Whole numbers (positive or negative).

// $age = 30;
// echo "age:- {$age}<br>";

//!  3. Float (or Double)

//?  Numbers with decimal points.

// $price = 19.99;
// echo "price :- {$price}<br>";

//!  4. Boolean

//?  Only `true` or `false`.

// $is_logged_in = true;
// echo "is_logged_in {$is_logged_in}<br>";

//!  5. Array

//?  A collection of values.

// $fruits = ["apple", "banana", "orange"];
// echo "{$fruits}<br>";

// echo gettype($fruits)
//!  6. NULL

//?  A variable with no value assigned.

// $empty = null;
// echo "{$empty}<br>";

//?  🧠 Extra: Type Checking

//! You can use `var_dump()` or `gettype()` to check what type a variable is:

// $score = 95;
// var_dump($score); // outputs int(95)
// echo gettype($score); // outputs "integer"
// echo "<br>{$greeting}<br>";

//!  ✅ Rules for Variable Names:

//?  Must start with a letter or underscore (`_`)
//?  Cannot start with a number
//?  Can include letters, numbers, and underscores





// echo "hello World";
// print "<h1>hello World</h1>";









// $number = 3;

// $string = "pradip";

// $float = 3.212;

// $boolean = true;

// $array = [1, 2, 3, 4,];

// $object = `{"name":"pradip"}`;

// print "<h1>$string</h1>";

// print "<h1>$boolean</h1>";

// var_dump($number);
// echo "{$number} . <br>";

// var_dump($string);
// echo "{$string} . <br>";

// var_dump($float);
// echo "{$float} . <br>";

// var_dump($boolean);
// echo "{$boolean} . <br>";

// var_dump($array);
// echo "{$array} . <br>";

// var_dump($object);
// echo "{$object} . <br>";


// $name = "Pradip";
// echo '<h1 style="color:red;text-align: center;"">' . $name . '</h1>';


// $fname = "Jenifer";
// echo "Hello $fname";


//! variables  

//? type 

//! A variable is a container used to store data — like text, numbers, or more complex data types. 
//! var_dump 

// $fruits = ["apple", "banana"];
// $output = print_r($fruits, true);
// echo "<h3>$output</h3>";


//! PHP The global Keyword

// $x = 5;
// $y = 10;

// function myTest()
// {
//     global $x, $y;
//     $y = $x + $y;
// }

// myTest();
// echo $y;








// !  PHP also stores all global variables in an array called $GLOBALS[index]
// echo "<hr>";
// $x = 115;
// $y = 10;

// function prac()
// {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// prac();
// echo $y;
// echo "<hr>";

//!  PHP The static Keyword

// function myTest()
// {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// echo "<hr>";
// myTest();
// echo "<hr>";
// myTest();
// echo "<hr>";
// myTest();
// echo "<hr>";
















//! Variable scope 

//* global variable scope


// $a = 1;
// include 'b.inc'; // Variable $a will be available within b.inc




//! local variable scope

// $a = 1; // global scope
// function test()
// {
//     echo $a; // Variable $a is undefined as it refers to a local version of $a
// }








// $age = 13;

// function stud_id($age)
// {
//     if ($age > 18) {
//         echo " valid for voting";
//     } else {
//         echo "not valid for voting";
//     }
// }
// stud_id($age)



//! The global keyword 

// $a = 1;
// $b = 2;

// function Sum()
// {
//     global $a, $b;

//     $b = $a + $b;
// }

// Sum();
// echo $b;


//! $GLOBALS instead of global


// $a = 1;
// $b = 2;

// function Sum()
// {
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// }

// Sum();
// echo $b;


//! Using static variables 


// function test()
// {
//     static $a = 0;
//     echo $a;
//     $a++;
// }


//! Static variables with recursive functions 
// function test()
// {
//     static $count = 0;

//     $count++;
//     echo $count;
//     if ($count < 10) {
//         test();
//     }
//     $count--;
// }


//! Declaring static variables

// function foo()

// {
//     static $int = 0;          // correct 
//     static $int = 1 + 2;        // correct
//     static $int = sqrt(121);  // correct as of PHP 8.3.0

//     $int++;
//     echo $int;
// }



?>
<?php ?>