<?php
//! PHP Strings

// echo "Hello";
// echo 'Hello';

//! Note There is a big difference between double quotes and single quotes in PHP.

//! Double quotes process special characters, single quotes does not.


//! Double or Single Quotes?

//? Double quoted string literals perform operations for special characters:

// $x = "John";
// echo "Hello $x";

//? Single quoted string literals returns the string as it is:

// $x = "John";
// echo 'Hello $x';


//*  Function            Description                           Example                         

//!  echo, print     Output a string                       echo "Hello";                 


// echo " hello i am a webdevloper";
// print "<h1> hello i am a webdevloper </h1>";

//!  strlen()          String length                         strlen("PHP") → 3           

// $name = "parmar pradip , hear i am lerning about php how to work in wordpress";
// $about = "this is confrmation of offring how to workoing this atcual";

// echo strlen($name);
// echo " string length <br> Q1 {$name}<br> ";
// echo strlen($about);
// echo " string length <br> Q2 {$about}<br> ";

//!  str_word_count()  Count words                           str_word_count("Hello World") 

// echo str_word_count($name);
// echo " Count words <br> Q3 {$name}<br> ";
// echo str_word_count($about);
// echo " Count words <br> Q4 {$about}<br>";


//!  strrev()          Reverse a string                      strrev("hello") → "olleh"   

// echo " <br><br>Reverse a string<br><br>  ";
// echo strrev($name);
// echo " Reverse a string <br> Q5 {$name}<br> ";
// echo strrev($about);
// echo " Reverse a string <br> Q6 {$about}<br>";



//!  strpos()          Find position of first match          strpos("hello", "e") → 1    

// echo strpos($name, "s");
// echo "<br>";
// echo strpos($about, "s");


//!  stripos()         Case-insensitive version of strpos  stripos("Hello", "h") → 0   

// echo "<br><br>";
// echo stripos($name, "g");
// echo "<br>";
// echo stripos($about, "s");





//!  str_replace()    Replace part of string                     str_replace("world", "PHP", "Hello world") 

// echo "<br><br>";
// $str = "Modifying Strings";
// echo str_replace("Strings", "this string", $str);
// echo "<br><br>";
// echo str_replace("world", "PHP", "Hello world");

//!  substr()         Get part of string                         substr("Hello", 1, 3) → "ell"            

// echo "<br>";
// $str = "Modifying Strings";
// echo substr($str, 1, 4);
// echo "<br><br>";
// echo substr($str, 3, 10);


//!  trim()           Remove whitespace                          trim("  hi  ") → "hi"                    

// $str = "    Modifying Strings    ";  
// echo trim($str);


//!  ltrim()          Left trim                                  ltrim("  hi") → "hi"                     

// $str = "<h1 style='background-color: black;color: wheat; '>    Modifying Strings    </h1>";
// echo ltrim($str);

//!  rtrim()          Right trim                                 rtrim("hi  ") → "hi"                     

// $str = "    Modifying Strings    ";
// echo rtrim($str);

//!  strtolower()     Convert to lowercase                       strtolower("PHP") → "php"                

// $str = "Modifying Strings";
// echo strtolower($str);

//!  strtoupper()     Convert to uppercase                       strtoupper("php") → "PHP"                
// echo "<hr>";
// $str = "Modifying Strings";
// echo strtoupper($str);

//!  ucfirst()        Capitalize first letter                    ucfirst("php") → "Php"                   

// $str = "modifying Strings";
// echo ucfirst($str);

//!  lcfirst()        Lowercase first letter                     lcfirst("PHP") → "pHP"                   
// $str = "Modifying Strings";
// echo lcfirst($str);

//!  ucwords()        Capitalize first letter of each word       ucwords("hello world")                     

// $str = "modifying strings";
// echo ucwords($str);




//!  strcmp()       Binary-safe string compare            strcmp("a", "b") → -1          


// echo strcmp("pradip", "pradip")

//!  strcasecmp()   Case-insensitive compare              strcasecmp("a", "A") → 0       

// echo strcasecmp("pradip11", "PRADIP111")

//!  strncasecmp()  Compare first n chars (case-insens.)  strncasecmp("Hello", "hello", 5) 

// echo strncasecmp("Hello", "hello", 5);
// echo strncasecmp("Hello world!", "hello world", 12);


$name = "";

//!  Function       Description                  Example                     


//!  empty()      Check if string is empty     empty("") → true        

// if (empty($name)) {
//     echo "Name is empty<br>";
// }

//!  isset()      Check if variable exists     isset($x)                 

// if (isset($name)) {
//     echo "Name is set<br>";
// }

//!  is_string()  Check if variable is string  is_string("PHP") → true 

// $val = "Hello";
// if (is_string($val)) {
//     echo "This is a string<br>";
// }

//!  nl2br()  Add <br> to new lines in string  nl2br("Line1\nLine2") 
// $text = "Hello\nWorld";
// echo nl2br($text); // Output: Hello<br />World
// echo "<hr>";

//!  htmlspecialchars()  Convert special HTML chars  < → &lt; 
// $html = "<h1>Title</h1>";
// echo htmlspecialchars($html); // Output: &lt;h1&gt;Title&lt;/h1&gt;
// echo "<hr>";

//!  explode()  Split string into array  explode(" ", "Hello World") 
// $arr = explode(" ", "PHP is awesome");
// print_r($arr); // Output: Array ( [0] => PHP [1] => is [2] => awesome )
// echo "<hr>";

//!  implode() / join()  Join array into string  implode("-", ["a", "b", "c"]) 
// $joined = implode("-", ["php", "html", "css"]);
// echo $joined; // Output: php-html-css
// echo "<hr>";

//!  number_format()  Format numbers as strings  number_format(100000) → 100,000 
// echo number_format(1234567); // Output: 1,234,567
// echo "<hr>";

?>


<?php


//!  Function           Purpose                                                       Example Output                                               

//!  md5()            Creates a 32-character **hash** of a string (not reversible)  md5("hello") → 5d41402abc4b2a76b9719d911017c592          
// $password = "pradip@123";
// $hash = md5($password);
// echo $hash; // Not secure for real apps, just for legacy use
//!  sha1()           Creates a 40-character **hash** of a string (not reversible)  sha1("hello") → aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d 

//!  base64_encode()  **Encodes** data in base64 format (reversible)                base64_encode("php") → cGhw                              
//!  base64_decode()  **Decodes** base64 back to original                           base64_decode("cGhw") → php                              

// $original = "";
// $encoded = base64_encode($password);
// $decoded = base64_decode($encoded);

// echo "Encoded: $encoded<br>";  // Output: cGhw
// echo "Decoded: $decoded";      // Output: php

?>



<?php
//*  Function                   Description                                   Example                         

//!  echo, print            Output a string                              echo "Hello";                 
//!  strlen()               String length                                strlen("PHP") → 3           
//!  str_word_count()       Count words                                  str_word_count("Hello World") 
//!  strrev()               Reverse a string                             strrev("hello") → "olleh"   
//!  strpos()               Find position of first match                 strpos("hello", "e") → 1    
//!  stripos()              Case-insensitive version of strpos           stripos("Hello", "h") → 0   
//!  empty()                Check if string is empty                     empty("") → true        
//!  isset()                Check if variable exists                     isset($x)                 
//!  is_string()            Check if variable is string                  is_string("PHP") → true 
//!  str_replace()          Replace part of string                       str_replace("world", "PHP", "Hello world") 
//!  substr()               Get part of string                           substr("Hello", 1, 3) → "ell"            
//!  trim()                 Remove whitespace                            trim("  hi  ") → "hi"                    
//!  ltrim()                Left trim                                    ltrim("  hi") → "hi"                     
//!  rtrim()                Right trim                                   rtrim("hi  ") → "hi"                     
//!  strtolower()           Convert to lowercase                         strtolower("PHP") → "php"                
//!  strtoupper()           Convert to uppercase                         strtoupper("php") → "PHP"                
//!  ucfirst()              Capitalize first letter                      ucfirst("php") → "Php"                   
//!  lcfirst()              Lowercase first letter                       lcfirst("PHP") → "pHP"                   
//!  ucwords()              Capitalize first letter of each word         ucwords("hello world")                     
//!  nl2br()                Add <br> to new lines in string              nl2br("Line1\nLine2") 
//!  htmlspecialchars()     Convert special HTML chars                   < → &lt; 
//!  explode()              Split string into array                      explode(" ", "Hello World") 
//!  implode() / join()     Join array into string                       implode("-", ["a", "b", "c"]) 
//!  number_format()        Format numbers as strings                    number_format(100000) → 100,000 
//!  strcmp()               Binary-safe string compare                   strcmp("a", "b") → -1          
//!  strcasecmp()           Case-insensitive compare                     strcasecmp("a", "A") → 0       
//!  strncasecmp()          Compare first n chars (case-insens.)         strncasecmp("Hello", "hello", 5) 
//!  md5()                  Creates a 32-character hash of a string      md5("hello") → 5d41402abc4b2a76b9719d911017c592          
//!  sha1()                 Creates a 40-character hash of a string      sha1("hello") → aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d 
//!  base64_encode()        Encodes data in base64 format                base64_encode("php") → cGhw                              
//!  base64_decode()        Decodes base64 back to original              base64_decode("cGhw") → php                              

?>