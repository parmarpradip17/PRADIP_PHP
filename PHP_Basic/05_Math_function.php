<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function in php</title>

</head>

<body>

    <div class="form">

        <form action="math_function.php" method="POST" role="form">
            <legend>Math Function</legend>

            <div class="form-group">
                <label for="num">number 1</label>
                <input type="text" name="num">
            </div>

            <div class="form-group">
                <label for="num1">number 2</label>
                <input type="text" name="num1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>

</html> -->


<?php
// $x = $_POST["num"];
// $y = $_POST["num1"];
// $abs = null;
// $round = null;
// $ceil = null;
// $floor = null;
// $max = null;
// $min = null;
// $sqrt = null;
// $pow = null;
// $pi = null;


// //*  Function         

// $abs = abs($x);

// //?  abs(x)         
// //?  round(x)       
// $round = round($x);

// //?  ceil(x)        
// $ceil = ceil($x);

// //?  floor(x)       
// $floor = floor($x);

// //?  max(x, y, ...) 
// $max = max($x, $y);

// //?  min(x, y, ...) 
// $min = min($x, $y);


// //? Function         

// //? `sqrt(x)`        
// $sqrt = sqrt($x);

// //? `pow(x, y)`      
// $pow = pow($x, $y);

// //? `pi()` or `M_PI` 
// $pi = pi($x);

// echo " 1 this is a math function we are using right now  abs :-     {$abs}   <br>";
// echo " 2 this is a math function we are using right now  round :-     {$round}   <br>";
// echo " 3 this is a math function we are using right now  ceil :-     {$ceil}   <br>";
// echo " 4 this is a math function we are using right now  floor :-     {$floor}   <br>";
// echo " 5 this is a math function we are using right now  max :-     {$max}   <br>";
// echo " 6 this is a math function we are using right now  min :-     {$min}   <br>";
// echo " 7 this is a math function we are using right now  sqrt :-     {$sqrt}   <br>";
// echo " 8 this is a math function we are using right now  pow :-     {$pow}   <br>";
// echo $pi;





//! PHP pi() Function 
//? The pi() function returns the value of PI: 
// echo(pi());


//!  PHP min() and max() Functions
//?  The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

// echo (min(0, 150, 30, 20, -8, -200));
// echo "<br>";
// echo (max(0, 150, 30, 20, -8, -200));


//! PHP abs() Function
//? The abs() function returns the absolute (positive) value of a number:

// echo (abs(-6.7));

//! PHP sqrt() Function 
//? The sqrt() function returns the square root of a number: 

// echo(sqrt(64));

//! PHP round() Function 
//? The round() function rounds a floating-point number to its nearest integer:

// echo(round(0.60));
// echo(round(0.49));

//! Random Numbers
//? The rand() function generates a random number:

echo (rand());

?>