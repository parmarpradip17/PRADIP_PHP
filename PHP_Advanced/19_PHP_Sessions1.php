<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // print_r($_SESSION);
    // echo "your name is " . $_SESSION["name"] . ".<br>";
    // echo "Your mobile number is " . $_SESSION["number"] . ".";
    session_unset();

    // if (session_destroy()) {
    //     echo "session_destroy";
    // }
    ?>

</body>

</html>