<?php

//! PHP Filters

//* Validating data = Determine if the data is in proper form.
//* Sanitizing data = Remove any illegal character from the data.

//! The PHP Filter Extension
//? PHP filters are used to validate and sanitize external input.

//? The PHP filter extension has many of the functions needed for checking user input,
//? and is designed to make data validation easier and quicker.





//! ✅ PHP Filter Extension — *For Input Validation and Sanitization*

//? The PHP Filter extension provides a powerful and consistent way to validate 
//? and sanitize user input like form data, URLs, emails, numbers, etc.

//* It's especially useful when working with input from:

//? Forms (`$_POST`, `$_GET`)
//? Cookies
//? URLs
//? APIs



//! 🔍 Why Use PHP Filters?

//? ✅ Built-in security
//? ✅ Prevents XSS (Cross-site Scripting)
//? ✅ Prevents SQL injection (with proper usage)
//? ✅ Easy to apply to multiple variables



//! 🧪 Common Filter Functions

//*  Function                    Description                              

//!  filter_var()
//? Validates or sanitizes a single variable 

//? The filter_var() function both validate and sanitize data.

//? The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

//? The variable you want to check
//? The type of check to use


//!  filter_input()
//? Validates input from GET, POST, etc. 



//!  filter_input_array()
//? Applies filters to an array of inputs    



//!  filter_var_array()
//? Like above, but works on raw variables   



//!  filter_list()
//? Lists all available filters              



//!  filter_id("FILTER_NAME")
//? Gets ID of a named filter                






//! ✅ Common Filter Examples  filter_var()

//! 📥 Example 1: Validate Email

// $email = "pradip@gmail.com";

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Valid email. $email";
// } else {
//     echo "Invalid email. $email";
// }



//! 🔢 Example 2: Validate Integer

// $age = "21";

// if (filter_var($age, FILTER_VALIDATE_INT)) {
//     echo "Valid integer.";
// } else {
//     echo "Not a valid number.";
// }



// //! 🧼 Example 3: Sanitize String

// $name = "<script>alert('hack');</script>";

// $cleanName = filter_var($name, FILTER_SANITIZE_STRING);
// echo $cleanName;  // Outputs: alert('hack');

// > ⚠️ Note: `FILTER_SANITIZE_STRING` is deprecated in PHP 8.1+, use `htmlspecialchars()` instead.



//! 🌐 Example 4: Validate URL

// $url = "https://example.com";

// if (filter_var($url, FILTER_VALIDATE_URL)) {
//     echo "Valid URL. <a style= color:blue;>$url</a>";
// } else {
//     echo "Invalid URL.";
// }



//! 🗂 Example 5: Using `filter_input()` with a form

// // Assuming method="GET" in form
// $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);


//! Validate an IP Address

//? The following example uses the filter_var() function to check if the variable $ip is a valid IP address:

// $ip = "127.0.0.1";

// if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
//     echo ("$ip is a valid IP address");
// } else {
//     echo ("$ip is not a valid IP address");
// }




//! 🛡 Best Practice Tip:

// Always validate and/or sanitize any user-provided input before using it in your app, especially in:

// * SQL queries
// * HTML output
// * Emails
// * File uploads

















//! PHP Filters Advanced

//! Validate an Integer Within a Range

//? The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:

// $int = 122;
// $min = 1;
// $max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
//     echo ("Variable value is not within the legal range");
// } else {
//     echo ("Variable value is within the legal range");
// }

//! Validate IPv6 Address

//? The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:

// $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
//     echo ("$ip is a valid IPv6 address");
// } else {
//     echo ("$ip is not a valid IPv6 address");
// }




//! Validate URL - Must Contain QueryString

//? The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:


// $url = "https://www.w3schools.com";

// if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
//   echo("$url is a valid URL with a query string");
// } else {
//   echo("$url is not a valid URL with a query string");
// }


//! Remove Characters With ASCII Value > 127

//? The following example uses the filter_var() function to sanitize a string.
//? It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:

// $str = "<h1>Hello WorldÆØÅ!</h1>";
// $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// echo $newstr;




//?  Feature       Sanitize                           Validate                        

//?  Purpose       Clean input                        Confirm input meets criteria    
//?  Changes Data  Yes (removes unwanted characters)  No (only checks data)           
//?  Output        Cleaned value                      Original value or `false`       
//?  Example       Remove HTML, special chars         Check if input is a valid email 


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