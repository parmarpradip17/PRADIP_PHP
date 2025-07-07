<?php
echo "<pre>";
print_r($_POST); // ✅ correct superglobal for method="post"
echo "</pre>";
?>

<?php

// Suppose you submitted a form via GET, and also have a cookie set
// echo $_GET['name'];
// echo $_COOKIE['email'];
// echo $_POST['pass'];

// or use $_REQUEST (not recommended for sensitive data)
echo $_REQUEST['name'];
echo "<br>"; // Could be from GET, POST, or COOKIE
echo $_REQUEST['email'];
echo "<br>"; // Could be from GET, POST, or COOKIE
echo $_REQUEST['pass'];
echo "<br>"; // Could be from GET, POST, or COOKIE
// echo $_REQUEST['name'];  // Could be from GET, POST, or COOKIE
?>