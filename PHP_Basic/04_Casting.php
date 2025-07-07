<?php

//! PHP Casting

//? Sometimes you need to change a variable from one data type into another, 
//? and sometimes you want a variable to have a specific data type. This can be done with casting.



//! Change Data Type

//? Casting in PHP is done with these statements:

//* (string) - Converts to data type String
//* (int) - Converts to data type Integer
//* (float) - Converts to data type Float
//* (bool) - Converts to data type Boolean
//* (array) - Converts to data type Array
//* (object) - Converts to data type Object
//* (unset) - Converts to data type NULL


//! Cast to String
echo "<hr>";
echo "<hr>";
echo "Cast to String";
echo "<hr>";
echo "<hr>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//!To verify the type of any object in PHP, use the var_dump() function:

// echo " Integer  <br>";
// var_dump($a);
// echo "<hr>";


// echo " Float  <br>";
// var_dump($b);
// echo "<hr>";


// echo " String  <br>";
// var_dump($c);
// echo "<hr>";


// echo " Boolean  <br>";
// var_dump($d);
// echo "<hr>";


// echo " NULL  <br>";
// var_dump($e);
// echo "<hr>";




//! Cast to Integer
echo "<hr>";
echo "<hr>";
echo "Cast to Integer";
echo "<hr>";
echo "<hr>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;


// echo " Integer  <br>";
// var_dump($a);
// echo "<hr>";


// echo " Float  <br>";
// var_dump($b);
// echo "<hr>";


// echo " String  <br>";
// var_dump($c);
// echo "<hr>";

// echo " String  <br>";
// var_dump($d);
// echo "<hr>";

// echo " String  <br>";
// var_dump($e);
// echo "<hr>";


// echo " Boolean  <br>";
// var_dump($f);
// echo "<hr>";


// echo " NULL  <br>";
// var_dump($g);
// echo "<hr>";





//! Cast to Float

echo "<hr>";
echo "<hr>";
echo "Cast to Float";
echo "<hr>";
echo "<hr>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;


// echo " Integer  <br>";
// var_dump($a);
// echo "<hr>";


// echo " Float  <br>";
// var_dump($b);
// echo "<hr>";


// echo " String  <br>";
// var_dump($c);
// echo "<hr>";

// echo " String  <br>";
// var_dump($d);
// echo "<hr>";

// echo " String  <br>";
// var_dump($e);
// echo "<hr>";


// echo " Boolean  <br>";
// var_dump($f);
// echo "<hr>";


// echo " NULL  <br>";
// var_dump($g);
// echo "<hr>";



// ! Cast to Boolean
echo "<hr>";
echo "<hr>";
echo "Cast to Boolean";
echo "<hr>";
echo "<hr>";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//!To verify the type of any object in PHP, use the var_dump() function:

// echo "Integer <br>";    
// var_dump($a);
// echo "<hr>";


// echo "Float <br>";
// var_dump($b);
// echo "<hr>";


// echo "Integer <br>";
// var_dump($c);
// echo "<hr>";


// echo "Integer <br>";
// var_dump($d);
// echo "<hr>";


// echo "Float <br>";
// var_dump($e);
// echo "<hr>";


// echo "String <br>";
// var_dump($f);
// echo "<hr>";


// echo "String <br>";
// var_dump($g);
// echo "<hr>";


// echo "Boolean <br>";
// var_dump($h);
// echo "<hr>";


// echo "NULL <br>";
// var_dump($i);
// echo "<hr>";

//! Cast to Array


echo "<hr>";
echo "<hr>";
echo "Cast to Array";
echo "<hr>";
echo "<hr>";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//! To verify the type of any object in PHP, use the var_dump() function:

// echo " Integer <br>";
// var_dump($a);
// echo " <hr>";

// echo " Float <br>";
// var_dump($b);
// echo " <hr>";

// echo " String <br>";
// var_dump($c);
// echo " <hr>";

// echo " Boolean <br>";
// var_dump($d);
// echo " <hr>";

// echo " NULL <br>";
// var_dump($e);
// echo " <hr>";


//! Cast to Object

echo "<hr>";
echo "<hr>";
echo "Cast to Object";
echo "<hr>";
echo "<hr>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//! To verify the type of any object in PHP, use the var_dump() function:

// echo " Integer <br>";
// var_dump($a);
// echo " <hr>";

// echo " Float <br>";
// var_dump($b);
// echo " <hr>";

// echo " String <br>";
// var_dump($c);
// echo " <hr>";

// echo " Boolean <br>";
// var_dump($d);
// echo " <hr>";

// echo " NULL <br>";
// var_dump($e);
// echo " <hr>";


$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); // associative array

$a = (object) $a;
$b = (object) $b;

//! To verify the type of any object in PHP, use the var_dump() function:


// var_dump($a);
// echo " <hr>";


// var_dump($b);
// echo " <hr>";





//! Cast to NULL

//? To cast to NULL, use the (unset) statement:


// ! it's deprecated and not commonly used.

echo "<hr>";
echo "<hr>";
echo "Cast to NULL";
echo "<hr>";
echo "<hr>";


// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL

// $a = (unset) $a;
// $b = (unset) $b;
// $c = (unset) $c;
// $d = (unset) $d;
// $e = (unset) $e;

//!To verify the type of any object in PHP, use the var_dump() function:
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

?>
<?php ?>