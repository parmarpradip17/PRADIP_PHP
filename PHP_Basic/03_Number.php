<?php

//! PHP Numbers

//* There are three main numeric types in PHP:

//? Integer
//? Float
//? Number Strings

//* In addition, PHP has two more data types used for numbers:

//? Infinity
//? NaN



// $a = 5;
// $b = 5.34;
// $c = "25";

// var_dump($a);
// echo "<hr>";

// var_dump($b);
// echo "<hr>";

// var_dump($c);
// echo "<hr>";







//! PHP Integers

//? 2, 256, -256, 10358, -179567 are all integers.

//? An integer is a number without any decimal part. 

$x = 5985;
var_dump(is_int($x));
echo "<hr>";
$x = 59.85;
var_dump(is_int($x));
echo "<hr>";

//! PHP has the following functions to check if the type of a variable is integer:

//? is_int()
//? is_integer() - alias of is_int()
//? is_long() - alias of is_int()





//! PHP Floats

//? A float is a number with a decimal point or a number in exponential form.

//? 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

$x = 10.365;
var_dump(is_float($x));
echo "<hr>";

//! PHP has the following functions to check if the type of a variable is float:

//? is_float()
//? is_double() - alias of is_float()



//! PHP Infinity
//? A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

//? PHP has the following functions to check if a numeric value is finite or infinite:


//? is_finite()
//? is_infinite()

$x = 1.9e411;
var_dump($x);
echo "<hr>";


//! PHP NaN
//? NaN stands for Not a Number.

//? NaN is used for impossible mathematical operations.

//? PHP has the following functions to check if a value is not a number:

//? is_nan()


$x = acos(8);

var_dump($x);

echo "<hr>";




//! PHP Numerical Strings
//? The PHP is_numeric() function can be used to find whether a variable is numeric.
//?F The function returns true if the variable is a number or a numeric string, false otherwise.

$x = 5985;
var_dump(is_numeric($x));
echo "<hr>";

$x = "5985";
var_dump(is_numeric($x));
echo "<hr>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<hr>";

$x = "Hello";
var_dump(is_numeric($x));

echo "<hr>";


// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;


?>
<?php ?>