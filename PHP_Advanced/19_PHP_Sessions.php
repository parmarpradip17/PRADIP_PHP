<?php
//! PHP Sessions

//? A session is a way to store information (in variables) to be used across multiple pages.

//? Unlike a cookie, the information is not stored on the users computer.

//* What is a PHP Session?
//? When you work with an application, you open it, do some changes, and then you close it.
//? This is much like a Session. The computer knows who you are.
//? It knows when you start the application and when you end. 
//? But on the internet there is one problem: the web server does not know who you are or what you do,
//? because the HTTP address doesn't maintain state.


//! Start a PHP Session
//? A session is started with the session_start() function.

//? Session variables are set with the PHP global variable: $_SESSION.


session_start()


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>

    <?php
    $_SESSION["name"] = "parmar pradip";
    $_SESSION["number"] = 7016703480;
    echo "session variable are set";
    ?>
</body>

</html>