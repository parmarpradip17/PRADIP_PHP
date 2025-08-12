<?php



//! PHP Practice Questions

//! Variables & Data Types

//* 1. Create a variable `$x` with a float value and convert it to an integer using PHP casting.

// $x = 5.5;
// echo (int)$x;


//* 2. Use `var_dump()` to check the type of a variable containing `null`.

// $x = null;
// var_dump($x);

//* 3. Write a PHP script to check if a variable `$name` exists and is not empty.

// $name = "pradip";
// if (isset($name)) {
//     echo $name;
// }


//! Strings
//* 4\. Write PHP code to count the number of words in `"PHP is awesome"`.

// $str = "PHP is awesome";
// echo str_word_count($str);
// echo strlen($str);

//* 5\. Replace `"world"` with `"PHP"` in the string `"Hello world"`.

// $str = "Hello world";
// echo str_replace("world", "PHP", "Hello world") 


//* 6\. Convert `"php is FUN"` to uppercase and then capitalize only the first letter.

// $upcase = "php is FUN";

// echo strtoupper($upcase);
// echo "<br>";
// $loe = strtolower($upcase);
// echo ucwords($loe);

//* 7\. Reverse the string `"abcdef"` and find the position of `"c"`.

// echo strrev("abcdef");


//! Numbers & Math
//* 8\. Use `abs()`, `round()`, `ceil()`, and `floor()` on the value `-4.7` and print the results.

// $val = -4.7;
// echo abs($val) . "<br>";
// echo round($val) . "<br>";
// echo ceil($val) . "<br>";
// echo floor($val) . "<br>";
// echo rand()

//* 9\. Find the largest number among `3, 9, 12` using a PHP math function.

// $find1 = max(3, 9, 12);
// echo $find1 . "<hr>";
// $find = min(3, 9, 12);
// echo $find;



//! Arrays
//* 10\. Create an array using `range()` from 1 to 10 with steps of 2.

// $renge = range(1, 10, 2);
// print_r($renge);

//* 11\. Use `array_push()` to add a new element at the end of an array and `array_shift()` to remove the first element.

// $res = [1, 23, 456];
// array_push($res, 7890);
// array_push($res, 112233);
// print_r($res)

//* 12\. Check if `"apple"` exists in an array of fruits using `in_array()`.

// $fruits = ["apple", "banana", "mango"];
// if (in_array("apple", $fruits)) echo "Apple found";


//* 13\. Sort an array by values in ascending order while preserving keys.

// $arr = ["b" => 3, "a" => 1, "c" => 2];
// asort($arr);
// print_r($arr); // a=>1, c=>2, b=>3



//* 14\. Merge two arrays into one using `array_merge()` and compare it with using the union operator (`+`).

// $arr = ["b" => 3, "a" => 1, "c" => 2];
// $arr1 = ["v" => 13, "w" => 11, "x" => 12];
// asort($arr);
// asort($arr1);
// $merg = array_merge($arr, $arr1);
// print_r($merg);


//* 15\. Use `array_combine()` to create an associative array from two separate arrays: one of keys and one of values.

// $key = [1, 2, 3, 4, 5];
// $value = ["A", "B", "C", "D", "E"];
// print_r(array_combine($key, $value));


//* 16\. Split the string `"red,green,blue"` into an array and then join it back with `" | "` as a separator.

// $name = "red,green,blue";
// print_r(explode(",", "red,green,blue"));
// print_r(implode("|", ["red", "green", "blue"]));

//* 17\. Filter out odd numbers from an array using `array_filter()`.

// $odd = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// $even = array_filter($odd, fn($n) => $n % 2 == 0);
// print_r($even);



//* 18\. Get only the unique values from an array using `array_unique()`.


// $odd = [1, 2, 3, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// $even = array_unique($odd);
// print_r($even);



//* 19\. Reverse an array and find the sum and product of its numeric values.

// $odd = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// print_r(array_reverse($odd));
// echo "<br>";
// print_r(array_product($odd));
// echo "<br>";
// print_r(array_sum($odd));

//* 20\. Find the difference and intersection between two arrays with and without keys.

// $odd = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $odd1 = [2, 3,  7,  9];

// print_r(array_diff($odd, $odd1));
// print_r(array_diff_key($odd, $odd1));
// print_r(array_intersect($odd, $odd1));
// print_r(array_intersect_key($odd, $odd1));



//! Functions
//* 21\. Create a user-defined function that takes a name as an argument and prints `"Hello, {name}"`.

// function myname($name)
// {
//     echo "$name , hello";
// }
// myname("Pradip");


//* 22\. Use `array_map()` to square every number in an array.

// $odd = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// $map = array_map(fn($n) => $n * ($n * $n), $odd);
// print_r($map);


//* 23\. Use `array_reduce()` to find the sum of all numbers in an array without using `array_sum()`.

// $odd = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $odd1 = array_reduce($odd, fn($nam, $n) => $nam + $n, 0);
// echo $odd1;


//! Superglobals
//* 24\. Write PHP code to get the user’s browser information using `$_SERVER`.

// echo $_SERVER['HTTP_USER_AGENT'];

//* 25\. Demonstrate a simple registration form using the `POST` method and print the submitted data.



// $n = 5;

// // Increasing part
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }

// // Decreasing part
// for ($i = $n - 1; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
?>


<!-- <form method="post" action="./practical.php">
    Name: <input type="text" name="name">
    <input type="submit">
</form> -->


<?php
// echo "Hello, " . htmlspecialchars($_POST['name']);
?>

<?php

?>