<?php

//! PHP Array 

//! PHP Array Types
//? In PHP, there are three types of arrays:

//* Indexed arrays - Arrays with a numeric index
//* Associative arrays - Arrays with named keys
//* Multidimensional arrays - Arrays containing one or more arrays


//! Array Items

//? Array items can be of any data type.

//? The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

//? You can have different data types in the same array.

// function example:
// function myFunction()
// {
//     echo "This text comes from a first function";
// }

// $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");

// print_r($myArr);



//! Array Functions

//? The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:

// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);


//! PHP Indexed Arrays

//? In indexed arrays each item has an index number.

//? By default, the first item has index 0, the second item has item 1, etc.


// $cars = array("Volvo", "BMW", "Toyota");
// var_dump($cars);
// echo "<br>";
// print_r($cars);


//! Access Indexed Arrays

// $cars = array("Volvo", "BMW", "Toyota");
// echo $cars[0];

//! Change Value

// $cars = array("Volvo", "BMW", "Toyota");
// $cars[1] = "Pradip";
// var_dump($cars);

//! Loop Through an Indexed Array

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as $x) {
//     echo "$x <br>";
// }

//! Index Number


// $cars[0] = "Volvo";
// $cars[1] = "BMW";
// $cars[2] = "Toyota";


//! PHP Associative Arrays


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// var_dump($car);

//! Access Associative Arrays

//? To access an array item you can refer to the key name.

// $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// echo $car["model"];


//! Change Value
//? To change the value of an array item, use the key name:

//? Change the year item:

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// $car["year"] = 2024;
// var_dump($car);


//! Loop Through an Associative Array

//? To loop through and print all the values of an associative array, you could use a foreach loop, like this:


//? Display all array items, keys and values:

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }






// $car = ["Aston martin", "Bugatti", "Chevrolet", "Dodge", "Enizio", "Ferrari", "Infiniti"];

// for ($i = 0; $i < count($car); $i++) {
//     echo $car[$i] . "<br>";
// }


// $multidim = array(
//     array(2, 5, 7, 8),
//     array(1, 2, 3, 1),
//     array(4, 5, 0, 1)
// );
// echo var_dump($multidim);

// for ($i = 0; $i < count($multidim); $i++) {
//     echo var_dump($multidim[$i]);
//     echo "<br>";
// };

// for ($i = 0; $i < count($multidim); $i++) {
//     for ($j = 0; $j < count($multidim[$i]); $j++) {
//         echo $multidim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }




// $car = ["Aston martin", "Bugatti", "Chevrolet", "Dodge", "Enizio", "Ferrari", "Infiniti"];

// $car[0] = "Alfa Romio";

// foreach ($car as $cars) {
//     echo "$cars <br>";
// }

//* Add Multiple Items to Associative Arrays

//! To add multiple items to an existing array, you can use the += operator.


//? Add two items to the cars array:

// $cars = array("brand" => "Ford", "model" => "Mustang");
// $cars += ["color" => "red", "year" => 1964, "price" => "rs. 70,00,000/-"];
// print_r($cars);
// echo "<br>";
// var_dump($cars);











//!🔹 1. Creating Arrays





// //*  Indexed array
// $colors = ["red", "green", "blue"];

// //*  Associative array
// $person = ["name" => "Alice", "age" => 30];

// //*  Multidimensional array
// $people = [
//     ["name" => "John", "age" => 25],
//     ["name" => "Jane", "age" => 28]
// ];




//!🔹 2. Adding & Removing Elements


// $total =  array_push($colors, "yellow");   // Add to end
// print_r($total);
// echo "<br>";
// print_r($colors);

// $total =  array_pop($colors);              // Remove from end
// print_r($total);
// echo "<br>";
// print_r($colors);

// $total =  array_unshift($colors, "black"); // Add to beginning
// print_r($total);
// echo "<br>";
// print_r($colors);

// $total =  array_shift($colors);            // Remove from beginning
// print_r($total);
// echo "<br>";
// print_r($colors);

//$total= unset($colors[1]);               // Remove specific index
// print_r($total);
// echo "<br>";
// print_r($colors);




//!🔹 3. Searching & Checking


// $inornot = in_array("red", $colors); // Returns true or false

// $inornot =  array_search("green", $colors). "<br>";         // returns index

// $inornot =  isset($person["name"]);                 // check if key exists

// $inornot = array_key_exists("age", $person);       // same as isset()

// if ($inornot) {
//     echo "<h1>true</h1><br>";
// } else {
//     echo "<h1>false</h1>";
// }

//!🔹 4. Sorting Arrays


// sort($colors);         // Ascending (values)

// rsort($colors);        // Descending (values)

// asort($person);        // Ascending (by value, keeps keys)

// ksort($person);        // Ascending (by key)




//!🔹 5. Looping Through Arrays

// foreach ($colors as $color) {
//     echo "$color <br>";
// }
// echo "<hr>";
// echo "<hr>";

// foreach ($person as $key => $value) {
//     echo "$key: $value <br>";
// }

//!🔹 6. Array Utilities
// echo "<br>";
// echo "<hr>";
// echo "<hr>";

// echo count($colors);                     // Number of elements
// echo "<br>";
// echo "<hr>";

// $merged = array_merge($colors, ["white"]);
// print_r($merged);

// echo "<br>";
// echo "<hr>";

// $slice = array_slice($colors, 1, 2);        // Get part of array
// print_r($slice);

// echo "<br>";
// echo "<hr>";

// $array_splice = array_splice($colors, 1, 1);       // Remove/replace part
// print_r($array_splice);

// echo "<br>";
// echo "<hr>";

// $array_keys = array_keys($person);               // Get all keys
// print_r($array_keys);   

// echo "<br>";
// echo "<hr>";

// $array_values = array_values($person);            // Get all values
// print_r($array_values);

// echo "<br>";
// echo "<hr>";

//!🔹 7. Transforming Arrays


// $uppercaseColors = array_map('strtoupper', $colors); // Transform each item
// print_r($uppercaseColors)

// $filtered = array_filter($colors, fn($c) => $c !== "red"); // Filter values
// print_r($filtered)

// $sum = array_sum([1, 2, 3]);     // Sum of values
// print_r($sum);

//!🔹 8. Combining or Flipping

// $array_combine = array_combine(["a", "b"], [1, 2]);   // ["a" => 1, "b" => 2]
// print_r($array_combine)

// $array_flip = array_flip($person);                // Flip keys and values
// print_r($array_flip);

//!✅ Example: Using Multiple Array Functions


// $fruits = ["apple", "banana", "orange"];
// array_push($fruits, "mango");

// sort($fruits);

// foreach ($fruits as $fruit) {
//     echo $fruit . "<br>";
// }



?>







<?php
//!  ✅ 1. array()



//!  🔹 Description:
//? Creates a new? array — this is the most basic and widely used method.
//!  🔹 Syntax://? array(key1 => value1, key2 => value2, ...)
//!  🔹 Example:

// $fruits = array("apple", "banana", "orange");
// $person = array("name" => "John", "age" => 25);
// print_r($fruits);
// print_r("<br>");
// print_r($person);

//!  ✅ 2. range()

//!  🔹 Description:
//? Creates an array of elements from a start to an end number (or letter), with an optional step.
//!  🔹 Syntax:
//! range(start, end,);

//!  🔹 Example:

// $numbers = range("A","F");      // [1, 2, 3, 4, 5]
// print_r($numbers);
// echo "<br><hr>";

// $letters = range('a', 'e');  // ['a', 'b', 'c', 'd', 'e']
// print_r($letters);
// echo "<br><hr>";

// $even = range(0, 10,2);     // [0, 2, 4, 6, 8, 10]
// print_r($even);
// echo "<br><hr>";

//!  ✅ 3. compact()

//!  🔹 Description:
//? Creates an associative array from variables.
//!  🔹 Syntax:
//! compact(varname1,, ...);

//!  🔹 Example:


// $name = "Alice";
// $age = 30;
// $city = "London";

// $info = compact("name", "age", "city");
// print_r($info);

//!  ✅ 4. array_fill()

//!  🔹 Description:
//? Fills an array with a specific value, starting from a given index.
//!  🔹 Syntax:

// array_fill(start_index, count, value);

//!  🔹 Example:


// $filled = array_fill(0, 4, "pradip");
// print_r($filled);

// //Result: [0 => "PHP", 1 => "PHP", 2 => "PHP", 3 => "PHP"]



// You can also start from any index:

// echo "<hr>";
// $filled = array_fill(5, 3, "test");
// print_r($filled);






//!  ✅ Summary Table:

//! Function              Purpose                                        Example                  
//! array()         Create simple array                             array(1, 2, 3)         
//! range()         Create sequential array                         range(1, 10, 2)        
//! compact()       From variable names to associative array        compact("name", "age") 
//! array_fill()    Fill array with repeated values                 array_fill(0, 5, "A")  
?>






<?php

//! ✅ 1. array_push()

//! 🔹 Description:
//? Adds one or more elements to the end of an array.
//! 🔹 Example:

// $fruits = ["apple", "banana"];
// array_push($fruits, "orange", "mango");
// echo "<br>";
// echo var_dump($fruits[2]);

//! ✅ 2. array_pop()

//! 🔹 Description:
//? Removes the last element from an array.
//! 🔹 Example:

// $fruits = ["apple", "banana", "orange"];
// array_pop($fruits);
// echo "<br>";
// echo var_dump($fruits);

//! ✅ 3. array_unshift()

//! 🔹 Description:
//? Adds one or more elements to the beginning of an array.
//! 🔹 Example:

// $fruits = ["banana", "orange"];
// array_unshift($fruits, "apple");
// echo "<br>";
// echo var_dump($fruits);

// foreach ($fruits as $item) {
//     echo "<br>" . $item;
// }


//! ✅ 4. array_shift()

//! 🔹 Description:
//? Removes the first element from an array.
//! 🔹 Example:

// $fruits = ["apple", "banana", "orange"];
// array_shift($fruits);
// echo "<br>";
// echo var_dump($fruits);

// foreach ($fruits as $item) {
//     echo "<br>" . $item;
// }


//! ✅ 5. unset()

//! 🔹 Description:
//? Removes an element by index or key.
//! 🔹 Example:

// $fruits = ["apple", "banana", "orange"];
// unset($fruits[1]);
// echo "<br>";
// echo var_dump($fruits);

// foreach ($fruits as $item) {
//     echo "<br>" . $item;
// }


// > ✅ Use array_values() to re-index if needed:


// $fruits = array_values($fruits);  // Reindexes to [0 => "apple", 1 => "orange"]

//! ✅ 6. array_splice()

//! 🔹 Description:
//? Removes and optionally replaces elements from any position.
//! 🔹 Syntax:

// array_splice(array, start, length, replacement);

//! 🔹 Example – Remove elements:

// $fruits = ["apple", "banana", "orange", "mango"];
// array_splice($fruits, 1, 2);  // Remove 2 elements starting at index 1
// echo "<br>";
// echo var_dump($fruits);

// foreach ($fruits as $item) {
//     echo "<br>" . $item;
// }

//! 🔹 Example – Replace elements:

// $colors = ["red", "green", "blue"];
// array_splice($colors, 1, 1, ["yellow", "purple"]);
// echo "<br>";
// echo var_dump($colors);
// echo "<br>";

// foreach ($colors as $item) {
//     echo "<br>" . $item;
// }






//! ✅ Summary Table

//!   Function             What It Does                                  Position Affected      

//!   array_push()         Add to end                                  End                  
//!   array_pop()          Remove last item                            End                  
//!   array_unshift()      Add to beginning                            Start                
//!   array_shift()        Remove first item                           Start                
//!   unset()              Remove any specific element by key/index    Any index            
//!   array_splice()       Remove/replace any portion                  Any range or slice   

?>


<?php

// Absolutely! Here is a breakdown of the Searching & Checking array functions in PHP with descriptions and examples:


//! ✅ 1. in_array()

//! 🔹 Description:

// Checks if a value exists in an array.

//! 🔹 Syntax:


// in_array(value, array, strict);

// * strict (optional): if true, also checks for type.

//! 🔹 Example:


// $colors = ["red", "green", "blue"];

// if (in_array("red", $colors)) {
//     echo "yes it's Founded !";
// } else {
//     echo "Not found!";
// }

// // Output: Found!


//! ✅ 2. array_search()

//! 🔹 Description:

// Searches the array for a value and returns the key/index.

//! 🔹 Syntax:


// array_search(value, array, strict);

//! 🔹 Example:


// $fruits = ["apple", "banana", "orange"];
// $index = array_search("banana", $fruits);

// echo $index; // Output: 1

// > Returns false if not found.

// if ($index) {
//     echo "true";
// } else {
//     echo "false";
// }


//! ✅ 3. array_key_exists()

//! 🔹 Description:

// Checks if a specific key exists in an array.

//! 🔹 Example:


// $person = ["name" => "John", "age" => 30];

// if (array_key_exists("name", $person)) {
//     echo "Key exists!";
// } else {
//     echo "Key does not exist!";
// }

// // Output: Key exists!


//! ✅ 4. isset()

//! 🔹 Description:

// Checks if a key exists and is not null.

//! 🔹 Difference from array_key_exists():

// * isset() returns false if the key exists but value is null.
// * array_key_exists() returns true even if the value is null.

//! 🔹 Example:


// $data = ["x" => null];

// var_dump(array_key_exists("x", $data)); // true
// var_dump(isset($data["x"]));            // false


//! ✅ Summary Table

//!  Function              What It Checks                     Returns              

//!  in_array()          If value exists                true/false         
//!  array_search()      Finds value and returns key    index/key or false 
//!  array_key_exists()  If key exists (even if null)   true/false         
//!  isset()             If key exists and is not null  true/false         



?>




<?php


//! ✅ 1. sort()

//! 🔹 Description:
//? Sorts an indexed array by values in ascending order. Reindexes keys.
//! 🔹 Example:


// $colors = ["blue", "red", "green"];
// sort($colors);


// print_r($colors); // OR
// foreach ($colors as $color) {
//     echo "<br>" . $color;
// }
// $val = "<br>array index sort <hr> <br>";
// echo strtoupper($val);

//! ✅ 2. rsort()

//! 🔹 Description:
//? Sorts an indexed array by values in descending order. Reindexes keys.
//! 🔹 Example:


// $colors = ["blue", "red", "green"];
// rsort($colors);
// print_r($colors); // OR
// echo  "<br>";
// foreach ($colors as $color) {
//     echo $color . "<br>";
// }
// $val = " array index sort in Reverse  <hr> <br>";
// echo strtoupper($val);

//! ✅ 3. asort()

//! 🔹 Description:
//? Sorts an associative array by value in ascending order. Preserves keys.
//! 🔹 Example:


// $age = ["John" => 45, "Anna" => 32, "Mark" => 38];
// asort($age);
// print_r($age); // OR
// echo  "<br>";
// foreach ($age as $item) {
//     echo $item . "<br>";
// }

// $val = " array index sort in value  <hr> <br>";
// echo strtoupper($val);


//! ✅ 4. ksort()

//! 🔹 Description:
//? Sorts an associative array by key in ascending order.
//! 🔹 Example:


// $age = ["John" => 45, "Anna" => 32, "Mark" => 38];
// ksort($age);
// print_r($age); // OR
// echo  "<br>";
// foreach ($age as $color) {
//     echo $color . "<br>";
// }


// $val = " array index sort in key  <hr> <br>";
// echo strtoupper($val);




//! ✅ 5. arsort()

//! 🔹 Description:
//? Sorts an associative array by value in descending order. Keeps keys.
//! 🔹 Example:


// $age = ["John" => 45, "Anna" => 32, "Mark" => 38];
// arsort($age);
// print_r($age); // OR
// echo  "<br>";
// foreach ($age as $color) {
//     echo $color . "<br>";
// }

// $val = " array index sort in Reverse value  <hr> <br>";
// echo strtoupper($val);



//! ✅ 6. krsort()

//! 🔹 Description:
//? Sorts an associative array by key in descending order.
//! 🔹 Example:


// $age = ["John" => 45, "Anna" => 32, "Mark" => 38];
// krsort($age);
// print_r($age); // OR
// echo  "<br>";
// foreach ($age as $color) {
//     echo $color . "<br>";
// }

// $val = " array index sort in Reverse key  <hr> <br>";
// echo strtoupper($val);



//! ✅ 7. usort()

//! 🔹 Description:
//? Sorts an array using a user-defined comparison function.
//! 🔹 Example:

// Sort numbers by absolute value:


// $nums = [3, -5, 2, -1];

// usort($nums, function ($a, $b) {
//     return abs($a) - abs($b);
// });
// print_r($nums); // OR
// echo  "<br>";
// foreach ($nums as $color) {
//     echo $color . "<br>";
// }





//! ✅ Summary Table

//*  Function    Sorts By  Order       Keys Preserved? 

//*  sort()    Value     Ascending   ❌ (reindexed)   
//*  rsort()   Value     Descending  ❌ (reindexed)   
//*  asort()   Value     Ascending   ✅               
//*  arsort()  Value     Descending  ✅               
//*  ksort()   Key       Ascending   ✅               
//*  krsort()  Key       Descending  ✅               
//*  usort()   Value     Custom      ❌ (reindexed)   

?>


<?php



//!  ✅ 1. array_merge()

//!  🔹 Description:
//? Merges one or more arrays into a single array.
//!  🔹 Example:


// $a = ["red", "green"];
// $b = ["blue", "yellow"];
// $c = ["pink", "dark"];


// $merged = array_merge($a, $b, $c);
// print_r($merged)



// > 🔸 If arrays have string keys, later values overwrite earlier ones.



//!  ✅ 2. array_combine()

//!  🔹 Description:
//? Combines two arrays — one for keys, one for values.
//!  🔹 Example:


// $keys = ["name", "age"];
// $values = ["Alice", 25];

// $combined = array_combine($keys, $values);
// print_r($combined)



//* > 🔸 Both arrays must be the same length.



//!  ✅ 3. array_merge_recursive()

//!  🔹 Description:
//? Merges arrays like array_merge(), but preserves duplicate keys by creating nested arrays.
//!  🔹 Example:


// $a = ["color" => "red"];
// $b = ["color" => "blue"];

// $merged = array_merge_recursive($a, $b);

// print_r($merged);
// echo "<br>";
// foreach ($merged as $key => $value) {
//     if (is_array($value)) {
//         foreach ($value as $v) {
//             echo $v . "<br>";
//         }
//     } else {
//         echo $value . "<br>";
//     }
// }



//!  ✅ 4. array_chunk()

//!  🔹 Description:
//? Splits an array into chunks of a specified size.
//!  🔹 Example:


// $colors = ["red", "green", "blue", "yellow"];
// $chunks = array_chunk($colors, 2);
// foreach ($chunks as $chunk) {
//     foreach ($chunk as $color) {
//         echo $color . "<br>";
//     }
//     echo "---<br>";
// }

// Result:
// [["red", "green"], ["blue", "yellow"]]



//!  ✅ 5. array_slice()

//!  🔹 Description:
//? Extracts a portion of an array.
//!  🔹 Example:


// $colors = ["red", "green", "blue", "yellow"];

// foreach ($colors as $color) {
//     echo $color . "<br>";
// }
// echo "<hr>";
// $slice = array_slice($colors, 1, 2);

// foreach ($slice as $slices) {
//     echo $slices . "<br>";
// }





//! ✅ 6. explode() / implode()

//!  Description:

//? explode(): Splits a string into an array.
//? implode(): Joins array elements into a string.

//!  Example: explode()


// $str = "apple,banana,orange";
// $array = explode(",", $str);
// print_r($array);
// echo "<hr>";
// foreach ($array as $fruit) {
//     echo $fruit . "<br>";
// }


// Result: ["apple", "banana", "orange"]

//!  Example: implode()


// $fruits = ["apple", "banana", "orange"];
// $str = implode("  ", $fruits);
// print_r($str)





//!  ✅ Summary Table

//!  Function                   Purpose                              Returns           

//!  array_merge()            Merge arrays                         One flat array    
//!  array_merge_recursive()  Merge with duplicate keys as arrays  Nested array      
//!  array_combine()          One array as keys, one as values     Associative array 
//!  array_chunk()            Split into smaller arrays            Array of arrays   
//!  array_slice()            Extract part of an array             Partial array     
//!  explode()                String → Array (by delimiter)        Array             
//!  implode()                Array → String (join by glue)        String            



?>

<?php

//!  6. Modifying / Transforming

//*  Function           Description                             

//*  array_map()      Apply function to each element          

//*  array_filter()   Filter elements using a callback        

//*  array_reduce()   Reduce array to single value            

//*  array_walk()     Apply function to each element (by ref) 

//*  array_replace()  Replace array elements                  





//! 1. array_map()

//? Purpose: Returns a new array, mapping each element (or each element of multiple arrays) through a callback.  ([php.net][1])
//* Usage:


// function cube($n)
// {
//     return $n * $n * $n;
// }
// $a = [1, 2, 3, 4, 5];
// $b = array_map('cube', $a);
// print_r($b);
// echo "";



// function filter($n)
// {
//     if ($n % 2 === 0) {
//         return $n;
//     } else {
//         return $n;
//     }
// }

// $a = [1, 2, 3, 4, 5];
// $b = array_map('filter', $a);
// print_r($b);


// $numbers = range(1, 50);

// $evennuber = array_filter($numbers, function ($n) {
//     return $n % 2 === 0;
// });

// print_r($evennuber);


// foreach ($evennuber as $num) {
//     echo "<br>" . $num;
// }


// * Preserves keys if used with one array.
// * Can process multiple arrays in parallel. ([php.net][1])



//! 2. array_filter()

//? Purpose: Creates a new array containing only elements that satisfy a callback (or truthy values if no callback). Keys are preserved.&#x20;
//* Usage:


// function is_even($v)
// {
//     return $v % 2 === 0;
// }
// $arr = [1, 2, 3, 4, 5];
// $evens = array_filter($arr, 'is_even');
// print_r($evens)


// * If no callback is passed, removes "empty" items (e.g. false, 0, null). ([php.net][2])
// * Mode flags let you filter by keys or both key and value.



//! 3. array_reduce()

//? Purpose: Collapses an array to a single value, processing elements sequentially with an accumulator.&#x20;
//* Usage:


// function sum($carry, $item)
// {
//     return $carry + $item;
// }
// $arr = [1, 2, 3, 4, 5];
// $total = array_reduce($arr, 'sum', 0);
// print_r($total)

// * More general: both filtering and mapping patterns can be implemented using array_reduce. ([stackoverflow.com][3])



//! 4. array_walk()

//? Purpose: Applies a callback to each element by reference, modifying the original array in-place. Returns boolean success.&#x20;
//* Usage:


// $arr = [2.4, 2.6, 22.2, 254.85, 3.5];
// array_walk($arr, function (&$v, $k) {
//     $v = floor($v);
// });
// $newArr = array_map('floor', $arr);
// print_r($newArr)

// * Handles one array only.
// * Great for side-effects/logging.
// * Can access both value & key; supports an optional third parameter. ([studytonight.com][4], [onlinephp.io][5], [geeksforgeeks.org][6])



//! 5. array_replace()

//? Purpose: Replaces matching keys in one array with those from another, returning a new array.
//* Usage:


// $a = ['a'=>1,'b'=>2,'c'=>3];
// $b = ['b'=>20,'d'=>40];
// $result = array_replace($a, $b);
// print_r($result)



// * Merges new values into the first array but doesn’t filter or iterate items like the others.



//!# 🧠 Quick Comparison

//*  Function                Returns         Editable?         Multi-array       Preserves Keys             Typical Use Case              

//?  array_map()             New array           No               Yes                One array only         Transform values                  
//?  array_filter()          New array           No               —                  Yes                    Filter elements                   
//?  array_reduce()          Single value        N/A              N/A                N/A                    Aggregate data                    
//?  array_walk()            Bool                Yes              No                 Yes                    In-place changes and side-effects 
//?  array_replace()         New array           No               Yes                Yes                    Overlay updates                   




//!  7. Utility



//!  🔢 1. count() / sizeof()

//? Purpose: Return the number of elements in an array or objects implementing Countable ([php.net][1]).
// * Usage:


// $a = [1, 2, 3];
// echo count($a);    // 3
// echo "<br>";
// echo sizeof($a);   // also 3 (alias)
// echo "<br>";




//!  2. array_keys()

//? Purpose: Retrieve an array of keys from a given array; can filter by a specific value ([php.net][2]).
// * Usage:


// $a = ['a' => 1, 'b' => 2];
// print_r(array_keys($a));            // ['a','b']
// echo "<br>";
// print_r(array_keys($a, 2));         // ['b']





//!  3. array_values()

//? Purpose: Return an indexed array of all values from the input array .
// * Usage:


// $a = ['a' => 1, 'b' => 2];
// echo array_values($a);         
// print_r(array_values($a));



//!  4. array_unique()

//? Purpose: Remove duplicate values from the array (preserves keys, first occurrences kept) ([php.net][3]).
// * Usage:


// $a = [1, 2, 2, 3];

// print_r(array_unique($a));



//!  5. array_reverse()

//? Purpose: Return a new array with elements in reverse order ([php.net][3]).
// * Usage:


// $a = [1, 2, 3];
// print_r(array_reverse($a));




//!  🎯 6. array_sum()

//? Purpose: Sum all values in a numeric array ([php.net][3]).
// * Usage:


// $a = [1, 2, 3, 4];
// print_r(array_sum($a));            // 6




//!  7. array_product()

//? Purpose: Multiply all values in a numeric array ([php.net][3]).
// * Usage:


// $a = [2, 3, 4];
// print_r(array_product($a));        




//!  🔑 8. array_key_first() (PHP 7.3+)

//? Purpose: Return the first key of the array without altering the internal pointer; returns null for empty arrays ([php.net][1]).
// * Usage:


// $a = ['x' => 1, 'y' => 2];
// print_r(array_key_first($a));      // 'x'




//!  👑 9. array_key_last() (PHP 7.3+)

//? Purpose: Return the last key of the array without altering pointer; null if empty ([php.net][1]).
// * Usage:


// $a = ['x' => 1, 'y' => 2];
// print_r(array_key_last($a));     // 'y'




//! # 📊 Quick Reference Table

//*      Function                   Returns         Preserves Keys    Pointer-safe     PHP Version   

//?  count() / sizeof()             int                 —                 ✅              4+            
//?  array_keys()                   array (keys)        —                 ✅              4+          
//?  array_values()                 array (values)      —                 ✅              4+          
//?  array_unique()                 new array           ✅                ✅              4+           
//?  array_reverse()                new array           optional¹         ✅              4+          
//?  array_sum()                    numeric total       —                 ✅              4+          
//?  array_product()                numeric prod        —                 ✅              4+          
//?  array_key_first()              first key           ✅                ✅              7.3+         
//?  array_key_last()               last key            ✅                ✅              7.3+         





//! 1. array_diff()

//? Purpose: Return elements from the first array whose values are not present in any of the other arrays.
//? Preserves numeric/string keys. ([dev.rbcafe.com][1])


// $a1 = ["a" => "red", "b" => "blue", "c" => "green"];
// $a2 = ["e" => "red", "f" => "yellow", "g" => "blue"];
// $result = array_diff($a1, $a2);
// print_r($result)



//! 2. array_diff_assoc()

//? Purpose: Similar to array_diff(), but considers keys and values: removes items only if both match in other arrays.&#x20;


// $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
// $a2 = ["a" => "red", "b" => "green", "c" => "brown"];
// $result = array_diff_assoc($a1, $a2);
// print_r($result)




//! 3. array_intersect()

//? Purpose: Return elements from the first array whose values exist in all the other arrays.
//? Ignores keys.&#x20;


// $a1 = [1, 2, 3, 4];
// $a2 = [2, 4, 6];
// $result = array_intersect($a1, $a2);
// print_r($result)




//! 4. array_intersect_assoc()

//? Purpose: Like array_intersect(), but requires both key and value match.&#x20;


// $a1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
// $a2 = ["a" => "green", "b" => "yellow", "blue", "red"];
// $result = array_intersect_assoc($a1, $a2);
// print_r($result)

// // 'red' has different index, so not included



//!# 🧩 Quick Comparison

//*  Function                       Compares                Considers Keys?       Result Contents             

//?  array_diff()                    Values                      No               Items in A not in B/C…      
//?  array_diff_assoc()              Keys and Values             Yes              Key-value pairs unique to A 
//?  array_intersect()               Values                      No               Values common to A, B, C…   
//?  array_intersect_assoc()         Keys and Values             Yes              Key-value common pairs      



//! 💡 When to Use What

// * Use array_diff() to filter out items based only on their values.
// * Use array_diff_assoc() when exact key-value matches need removal.
// * Use array_intersect() to find shared values across arrays.
// * Use array_intersect_assoc() for pinpoint key-value overlap.






//!  1. array_column()

// ? Purpose: Extracts a specific “column” of values from within a multidimensional array or array of objects. ([w3schools.com][1], [reintech.io][2])
// * Syntax:


//   array_column(array $input, mixed $column_key, mixed $index_key = null)

// * Examples:


// $records = [
//     ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin'],
//     ['id' => 4767, 'first_name' => 'Ben',    'last_name' => 'Smith'],
//     ['id' => 3809, 'first_name' => 'Joe',    'last_name' => 'Doe'],
// ];
// $lastNames = array_column($records, 'last_name');
// // => [0=>'Griffin', 1=>'Smith', 2=>'Doe']
// print_r($lastNames);

// $namesById = array_column($records, 'first_name', 'id');
// // => [5698=>'Peter', 4767=>'Ben', 3809=>'Joe']
// print_r($namesById);




//!  2. array_flip()

// ? Purpose: Swaps keys and values in an array (values must be strings or ints). If duplicates exist, the last key wins. ([php.net][3])
// * Example:


// $input = ['oranges', 'apples', 'pears'];
// $flipped = array_flip($input);
// print_r($flipped);
// => ['oranges'=>0, 'apples'=>1, 'pears'=>2]

// $a = ['a' => 1, 'b' => 1, 'c' => 2];
// $flipped = array_flip($a);
// print_r($flipped);

// => [1=>'b', 2=>'c'] // 'b' overwrote 'a'




//!  3. shuffle()

// ? Purpose: Randomly shuffles array elements, reindexes numerically, and modifies in-place. Returns true on success. ([php.net][4])
// * Example:


// $numbers = range(1, 10);
// shuffle($numbers);
// print_r($numbers);

//   // e.g. [5, 17, 1, 12, …] (keys reset to 0–19)

// * Note: For associative arrays, keys are lost. To preserve key–value pairs, shuffle the keys separately:


// function shuffle_assoc(array $arr)
// {
//     $keys = array_keys($arr);
//     shuffle($keys);
//     $new = [];
//     foreach ($keys as $key) {
//         $new[$key] = $arr[$key];  
//     }
//     return $new;
// };

// $result = shuffle_assoc(['a' => 1, 'b' => 1, 'c' => 2]);
// print_r($result);



//! ✅ Quick Reference

// | Function         | Input                            | Output                         | Notes                                                             |
// | ---------------- | -------------------------------- | ------------------------------ | ----------------------------------------------------------------- |
// | array_column() | Multidimensional array / objects | Flat array of column values    | Optionally index by another column                                |
// | array_flip()   | Associative / indexed array      | Keys & values swapped          | Last duplicate wins; only string/int values permitted as keys     |
// | shuffle()      | Indexed array (by reference)     | Reordered in-place; keys reset | Returns true; not suitable for associative arrays unless custom |









//!  1. Array Creation

//*  Function        Description                               

//*  array()       Creates an array                          
//*  range()       Creates an array with a range of elements 
//*  compact()     Creates an array from variables           
//*  array_fill()  Fills an array with values                


//!  2. Add/Remove Elements

//*  Function           Description                      

//*  array_push()     Add elements to the end          
//*  array_pop()      Remove last element              
//*  array_unshift()  Add elements to the beginning    
//*  array_shift()    Remove first element             
//*  unset()          Remove specific element          
//*  array_splice()   Remove/replace parts of an array 


//!  3. Searching & Checking

//*  Function              Description                             

//*  in_array()          Checks if value exists                  
//*  array_search()      Search for a value and return key/index 
//*  array_key_exists()  Checks if key exists                    
//*  isset()             Checks if index exists and not null     


//!  4. Sorting

//*  Function    Description                           

//*  sort()    Sort values (indexed) ascending       
//*  rsort()   Sort values descending                
//*  asort()   Sort associative by value (keep keys) 
//*  ksort()   Sort associative by key               
//*  arsort()  Reverse sort by value                 
//*  krsort()  Reverse sort by key                   
//*  usort()   User-defined comparison function      


//!  5. Combining / Splitting

//*  Function                   Description                         

//*  array_merge()            Merge arrays                        
//*  array_combine()          Combine keys and values from arrays 
//*  array_merge_recursive()  Merge recursively                   
//*  array_chunk()            Split into chunks                   
//*  array_slice()            Extract portion of array            
//*  explode() / implode()  Split/join strings                  


//!  6. Modifying / Transforming

//*  Function           Description                             

//*  array_map()      Apply function to each element          
//*  array_filter()   Filter elements using a callback        
//*  array_reduce()   Reduce array to single value            
//*  array_walk()     Apply function to each element (by ref) 
//*  array_replace()  Replace array elements                  


//!  7. Utility

//*  Function             Description                 

//*  count()            Number of elements in array 
//*  sizeof()           Alias of count()          
//*  array_keys()       Get all keys                
//*  array_values()     Get all values              
//*  array_unique()     Remove duplicate values     
//*  array_reverse()    Reverse array               
//*  array_sum()        Sum of numeric array values 
//*  array_product()    Product of numeric values   
//*  array_key_first()  Get the first key           
//*  array_key_last()   Get the last key            


//!  8. Array Comparison

//*  Function                   Description                     

//*  array_diff()             Difference of arrays (values)   
//*  array_diff_assoc()       Difference with keys            
//*  array_intersect()        Intersection of arrays (values) 
//*  array_intersect_assoc()  Intersection with keys          


//!  9. Miscellaneous

//*  Function          Description                                           

//*  array_column()  Return values from a column in multidimensional array 
//*  array_flip()    Flip keys and values                                  
//*  shuffle()       Randomize array                                       


// function myFunction()
// {
//     echo "I come from a function!";
// }

// $myArr = array("Volvo", 15, "myFunction");

// $myArr[2]();



?>

