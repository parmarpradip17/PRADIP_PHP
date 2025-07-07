<?php


//! Callback Functions

//? A callback function (often referred to as just "callback") 
//? is a function which is passed as an argument into another function.

//? Any existing function can be used as a callback function. 
//? To use a function as a callback function, pass a string containing
//? the name of the function as the argument of another function:




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Callback Functions</title>
</head>

<body>
    <h1 style="font-family:Arial, Helvetica, sans-serif;font-size:24px;margin:0 auto;text-align: center;background-color: antiquewhite;">
        <?php
        // function my_callback($item)
        // {
        //     return strlen($item);
        // }

        // $strings = ["apple", "orange", "banana", "coconut"];
        // $lengths = array_map("my_callback", $strings);
        // print_r($lengths);


        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map(function ($item) {
            return strlen($item);
        }, $strings);
        print_r($lengths);

        ?>
    </h1>

</body>

</html>