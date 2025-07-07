<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condition statement</title>
</head>

<body>

    <div class="conatiner" style="max-width:1200px; margin:0 auto;">
        <form action="./Conditional.php" method="get">
            <label for="age">Age</label>
            <input type="text" name="age">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html> -->

<?php


//*  🔹 1. if / else / elseif

//! PHP Conditional Statements


//* In PHP we have the following conditional statements:

//! if statement
//?  - executes some code if one condition is true

//! if...else statement
//?  - executes some code if a condition is true and another code if that condition is false

//! if...elseif...else statement
//?  - executes different codes for more than two conditions

//! switch statement
//?  - selects one of many blocks of code to be executed



//! PHP - The if Statement
//? The if statement executes some code if one condition is true.

//* Syntax

//? if (condition) {
//?    // code to be executed if condition is true;
//? }


// if (5 > 3) {
//     echo "Have a good day!";
// }

// $age = 14;

// if ($age < 20) {
//     echo "not valid age for vote";
// }


// if ($age == 14) {
//   echo "Have a good day!";
// }


// $a = 200;
// $b = 33;
// $c = 500;

// if ($a > $b && $a < $c) {
//     echo "Both conditions are true";
// }

// $a = 5;

// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//     echo "$a is a number between 2 and 7";
// }

// $age = $_GET["age"];


// if ($age < 18) {
//     echo "You are a minor";
// } elseif ($age == 18) {
//     echo "You just became an adult";
// } else {
//     echo "You are an adult";
// }

//! PHP - The if...else Statement 

//? The if...else statement executes some code if a condition is true and another code if that condition is false.

//* Syntax

//? if (condition) {
//?   // code to be executed if condition is true;
//? } else {
//?   // code to be executed if condition is false;
//? }


// $t = date("H");

// if ($t < "20") {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }


//! PHP - The if...elseif...else Statement

//? The if...elseif...else statement executes different codes for more than two conditions.

//* Syntax

//? if (condition) {
//?   code to be executed if this condition is true;
//? } elseif (condition) {
//?   // code to be executed if first condition is false and this condition is true;
//? } else {
//?   // code to be executed if all conditions are false;
//? }



// $t = 15;

// if ($t < 10) {
//     echo "Have a good morning!";
// } elseif ($t <= 20) {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }



//! PHP Shorthand if Statements
//? To write shorter code, you can write if statements on one line.


// $a = 5;

// if ($a < 10) $b = "pradip";

// echo $b


//! Short Hand If...Else
//? if...else statements can also be written in one line, but the syntax is a bit different.

// $a = 13;

// $b = $a < 10 ? "Hello" : "Good Bye";

// echo $b;

//! NOTE 
//* This technique is known as Ternary Operators, or Conditional Expressions.



//! PHP Nested if Statement

//! You can have if statements inside if statements, this is called nested if statements. 

// $a = 13;

// if ($a > 10) {
//     echo "Above 10";
//     if ($a > 20) {
//         echo " and also above 20";
//     } else {
//         echo " but not above 20";
//     }
// }











//! 🔹 2. PHP switch Statement

//? Use the switch statement to select one of many blocks of code to be executed.
//? Used when you want to check a variable against multiple values.


//*  Syntax
//? switch (expression) {
//?   case label1:
//?     //code block
//?     break;
//?   case label2:
//?     //code block;
//?     break;
//?   case label3:
//?     //code block
//?     break;
//?   default:
//?     //code block
//? }



// $favcolor = "green";

// switch ($favcolor) {
//     case "red":
//         echo "Your favorite color is red!";
//         break;
//     case "blue":
//         echo "Your favorite color is blue!";
//         break;
//     case "green":
//         echo "Your favorite color is green!";
//         break;
//     default:
//         echo "Your favorite color is neither red, blue, nor green!";
// }

// $color = $_GET["age"];

// switch ($color) {
//     case "red":
//         echo "Color is red";
//         break;
//     case "blue":
//         echo "Color is blue";
//         break;
//     default:
//         echo "Color is unknown";
// }

// $car = $_GET["age"];

// switch ($car) {
//     case 'Land':
//         echo "<p>The Land Rover Range Rover, generally shortened to Range Rover generally shortened to Range Rover </p>";
//         break;
//     case 'Land Rover':
//         echo "<p>generally shortened to Range Rover The Land Rover Range Rover, generally shortened to Range Rover </p>";
//         break;
//     case 'Land Rover Range':
//         echo "<p>The Land Rover Range Rover,generally shortened to Range Rover generally shortened to Range Rover </p>";
//         break;
//     case 'Land Rover Range Rover':
//         echo "<p>The Land Rover Range Rover, generally shortened to Range Rover generally shortened to Range Rover generally shortened to Range Rover </p>";
//         break;

//     default:
//         if (empty($car)) {
//             echo "invalid condition ";
//         }
//         break;
// }


//! The break Keyword
//? When PHP reaches a break keyword, it breaks out of the switch block.

//! The default Keyword
//? The default keyword specifies the code to run if there is no case match:
//? Note: If default is not the last block in the switch block, remember to end the default block with a break statement.

//!  Common Code Blocks
//?  If you want multiple cases to use the same code block, you can specify the cases like this:

// $d = 0;

// switch ($d) {
//     case 1:
//     case 2:
//     case 3:
//     case 4:
//     case 5:
//         echo "The weeks feels so long!";
//         break;
//     case 6:
//     case 0:
//         echo "Weekends are the best!";
//         break;
//     default:
//         echo "Something went wrong";
// }





//! Summary Table

//*  Structure          Use Case 

//*  if/else            Conditional logic 
//*  switch             Multiple fixed options 
//*  for                Counted loops 
//*  while              Loop with unknown iterations 
//*  do...while         Loop that runs at least once 
//*  foreach            Loop through arrays 

?>