<?php

//! PHP Cookies



//! What is a Cookie?

//? A cookie is often used to identify a user. A cookie is a small file that the server embeds on 
//? the user's computer. Each time the same computer requests a page with a browser,
//? it will send the cookie too. With PHP, you can both create and retrieve cookie values.


//! Create Cookies With PHP

//! A cookie is created with the setcookie() function.

//* Syntax

//? setcookie(name, value, expire, path, domain, secure, httponly);

//* Only the name parameter is required. All other parameters are optional.


//! PHP Create/Retrieve a Cookie

//? The following example creates a cookie named "user" with the value "John Doe".
//? The cookie will expire after 30 days (86400 * 30).
//? The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

// $cookie_name = "user";
// $cookie_value = "Parmar Pradip ";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day




// if (setcookie("user", "", time() - 3600)) {
//     echo "cookie was deleted <br>";
// }









//! 🍪 PHP Cookies vs 🗂 PHP Sessions

//*  Feature                                Cookies                                                  Sessions                                      

//?  Storage Location           Stored on the client's browser (computer)               Stored on the server                          
//?  Storage Limit              Up to \~4KB per cookie                                  Limited by server memory (usually much larger)    
//?  Security                   Less secure — user can see & modify in browser          More secure — data is stored server-side          
//?  Lifespan                   Can be persistent (expire after a set time)             Typically expires when the browser closes         
//?  Use Case                   "Remember me" feature, theme, language settings         Login sessions, cart data, user-specific data     
//?  Data Access                Via `$_COOKIE` superglobal                              Via `$_SESSION` superglobal                       
//?  Requires Start?            No                                                      Yes: `session_start()` must be called             
//?  Visibility                 Visible and editable by user                            Hidden from user                                  
//?  Sent with Every Request?   Yes — cookies are sent with every HTTP request          No — only session ID is passed (in cookie or URL) 
//?  Storage Format             Simple key-value string format                          Can store complex data (arrays, objects, etc.)    



//! ✅ Example: Cookie

// ```php
// // Set cookie
// setcookie("user", "Pradip", time() + 3600); // 1 hour

// // Get cookie
// echo $_COOKIE["user"];
// ```



//! ✅ Example: Session

// ```php
// session_start();
// $_SESSION["user"] = "Pradip";

// echo $_SESSION["user"];
// ```



//! 🔒 Security Tips:

// * Use sessions for sensitive data (like login).
// * Don’t trust cookies for anything secure — they can be modified by the user.
// * Always validate data from both cookies and sessions.



//! Want a diagram or real-world project use case using both?



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // if (!isset($_COOKIE[$cookie_name])) {
    //     echo "Cookie named '" . $cookie_name . "' is not set!";
    // } else {
    //     echo "Cookie '" . $cookie_name . "' is set!<br>";
    //     echo "Value is: " . $_COOKIE[$cookie_name];
    // }



    //! Check if Cookies are Enabled

    // if (count($_COOKIE) < 0) {
    //     echo "Cookies are enabled.";
    // } else {
    //     echo "Cookies are disabled.";
    // }
    ?>


</body>

</html>