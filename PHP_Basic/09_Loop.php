<?php

//! 🔁 Loops in PHP



//* In PHP, we have the following loop types:

//! while - 
//? loops through a block of code as long as the specified condition is true

//! do...while - 
//? loops through a block of code once, and then repeats the loop as long as the specified condition is true

//! for - 
//? loops through a block of code a specified number of times

//! foreach - 
//? loops through a block of code for each element in an array





//! The PHP for Loop

//? The for loop is used when you know how many times the script should run.
//? Used when you know how many times to loop.

//* Syntax
//? for (expression1, expression2, expression3) {
//?   // code block
//? }





// for ($i = 1; $i <= 15; $i++) {
//     echo "Number: $i<br>";
// }

// $number = $_GET["age"];

// for ($num = 0; $num <= $number; $num++) {
//     if ($num > 0 ) {
//         echo "number is $num <br>";
//     }
// }




//* 🔸 4. while loop

//? The while loop - Loops through a block of code as long as the specified condition is true.
//? Executes code as long as a condition is true.


// $i = 1;
// while ($i < 6) {
//   echo $i;
//   $i++;
// }

//! The break Statement

// $i = 1;
// while ($i < 6) {
//     if ($i == 3) break;
//     echo $i;
//     $i++;
// }

//! The continue Statement
//? With the continue statement we can stop the current iteration, and continue with the next:

//? Stop, and jump to the next iteration if $i is 3:

// $i = 0;
// while ($i < 6) {
//     $i++;
//     if ($i == 3) continue;
//     echo $i;
// }

// $number = $_GET["age"];

// $x = 1;
// while ($x <= $number) {
//     echo "x = $x<br>";
//     $x++;
// }





//* 🔸 5. PHP do...while Loop
//? The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true. 
//? Like while, but runs at least once.

// $i = 1;

// do {
//     echo $i;
//     $i++;
// } while ($i < 6);

// $x = 1;
// do {
//     echo "x = $x<br>";
//     $x++;
// } while ($x <= 3);


//! The continue Statement
//? With the continue statement we can stop the current iteration, and continue with the next:

//! Stop, and jump to the next iteration if $i is 3:

// $i = 0;

// do {
//   $i++;
//   if ($i == 3) continue;
//   echo $i;
// } while ($i < 6);



//! The foreach Loop on Arrays

//? The most common use of the foreach loop, is to loop through the items of an array.
//? Used for iterating through arrays.


// $fruits = ["apple", "banana", "cherry"];

// foreach ($fruits as $fruit) {
//     echo "$fruit<br>";
// }

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//     echo "$x <br>";
// }

//! Print both the key and the value from the $members array:

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }

//! The foreach Loop on Objects
//? The foreach loop can also be used to loop through properties of an object:


// class Car
// {
//     public $color;
//     public $model;
//     public function __construct($color, $model)
//     {
//         $this->color = $color;
//         $this->model = $model;
//     }
// }

// $myCar = new Car("red", "Volvo");

// foreach ($myCar as $x => $y) {
//     echo "$x: $y <br>";
// }



//! Foreach Byref 

//? When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:



// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "blue") $x = "pink";
// }

// var_dump($colors);



//! 🔁 Loops in PHP
//* Loops are used to execute a block of code multiple times.

//* In PHP, we have the following loop types:

//! 1️⃣ while loop
//? Loops through a block of code as long as the specified condition is true.
// $i = 1;
// while ($i <= 5) {
//   echo "While Loop: $i" . "<br>";
//   $i++;
// }

//! 2️⃣ do...while loop
//? Loops through a block of code once, then repeats the loop as long as the specified condition is true.
// $j = 1;
// do {
//   echo "Do-While Loop: $j" . "<br>";
//   $j++;
// } while ($j <= 5);

//! 3️⃣ for loop
//? Loops through a block of code a specified number of times.
// for ($k = 1; $k <= 5; $k++) {
//   echo "For Loop: $k" . "<br>";
// }

//! 4️⃣ foreach loop
//? Loops through a block of code for each element in an array.
// $fruits = ["Apple", "Banana", "Cherry"];
// foreach ($fruits as $fruit) {
//   echo "Foreach Loop: $fruit" . "<br>";
// }


?>
<?php ?>