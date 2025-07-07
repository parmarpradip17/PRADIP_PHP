<?php

// $_cookie_name = "username";
// $_cookie_value = "Pradip Parmar";


// setcookie($_cookie_name, $_cookie_value, time() + (86400 * 30), "/");

session_start();

$_SESSION["favcolor"] = "pink";

echo "session was set";




?>
<!-- <html>

<body>

    <?php
    // if (!isset($_COOKIE[$_cookie_name])) {
    //     echo "Cookie is not set";
    // } else {
    //     echo $_COOKIE[$_cookie_name];
    // }
    ?>

</body>

</html> -->