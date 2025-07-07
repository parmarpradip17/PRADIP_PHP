<?php

//! PHP and JSON


//! What is JSON?

//? JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
//? Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.


//* PHP and JSON
//? PHP has some built-in functions to handle JSON.

//? First, we will look at the following two functions:

//* json_encode()
//* json_decode()

//! PHP - json_encode()
//? The json_encode() function is used to encode a value to JSON format.

// $age = array("Pradip" => 21, "harsh" => 20, "dhruv" => 21);
// $age = array("Volvo", "BMW", "Toyota");
// echo json_encode($age);


// $cars = array(
//     array("Volvo", 22, 18),
//     array("BMW", 15, 13),
//     array("Saab", 5, 2),
//     array("Land Rover", 17, 15)
// );

// echo json_encode($cars);


//! PHP - json_decode()

// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

// Example
// This example decodes JSON data into a PHP object:


// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// print_r(json_decode($jsonobj));

//? The json_decode() function returns an object by default.
//? The json_decode() function has a second parameter, and when set to true,
//? JSON objects are decoded into associative arrays.


//? This example decodes JSON data into a PHP associative array:


// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// var_dump(json_decode($jsonobj, true));

//! PHP - Accessing the Decoded Values

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);
// $obj1 = json_decode($jsonobj, true);
// print_r(json_decode($jsonobj, true));


// echo " <br>this is a decode by this json file data " . $obj->Peter;
// echo " <br>this is a decode by this json file data " . $obj1["Ben"];



//! PHP - Looping Through the Values

//? You can also loop through the values with a foreach() loop:


//? This example shows how to loop through the values of a PHP object:


// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// foreach ($obj as $key => $value) {
//     echo $key . " => " . $value . "<br>";
// }


//! associative  array 


// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $arr = json_decode($jsonobj, true);

// foreach($arr as $key => $value) {
//   echo $key . " => " . $value . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>