<?php
//! PHP Global Variables - Superglobals 

//* The PHP superglobal variables are:

//? $GLOBALS
//? $_SERVER
//? $_REQUEST
//? $_POST
//? $_GET
//? $_FILES
//? $_ENV
//? $_COOKIE
//? $_SESSION

//*  Superglobal        Purpose                              

//?  $GLOBALS       Access global variables in any scope 
//?  $_SERVER       Server and request metadata          
//?  $_REQUEST      GET + POST + COOKIE                  
//?  $_POST         Form data via POST                   
//?  $_GET          Form data via GET (URL)              
//?  $_FILES        Handle file uploads                  
//?  $_ENV          Environment variables                
//?  $_COOKIE       Access cookies                       
//?  $_SESSION      Store persistent user session data   



//! PHP $GLOBALS

//? $GLOBALS is an array that contains all global variables.
//? Global variables are variables that can be accessed from any scope. 

//! To use a global variable inside a function you have to either define them as global
//! with the global keyword, or refer to them by using the $GLOBALS syntax.


//? Refer to the global variable $x inside a function:

// $x = 75;

// function myfunction()
// {
//     echo $GLOBALS['x'];
// }

// myfunction()


//! Define $x as global inside a function:

// $x = 75;

// function myfunction() {
//   global $x;
//   echo $x;
// }

// myfunction()



//! Create a global variable from inside a function, and use it outside of the function:

// function myfunction() {
//   $GLOBALS["x"] = 100;
// }

// myfunction();

// echo $GLOBALS["x"];
// echo "<brasd>";
// echo $x;


//*  PHP - $_SERVER   

//! $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.


//! The example below shows how to use some of the elements in $_SERVER:
//* $_SERVER['PHP_SELF']                 	
//? Returns the filename of the currently executing script

// echo " Returns the filename of the currently executing script <br>";
// echo $_SERVER['PHP_SELF'];
// echo "<br> <hr>";




//* $_SERVER['GATEWAY_INTERFACE']           
//? Returns the version of the Common Gateway Interface (CGI) the server is using

// echo " Returns the version of the Common Gateway Interface (CGI) the server is using <br>";
// echo $_SERVER['GATEWAY_INTERFACE'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_ADDR']              	
//? Returns the IP address of the host server

// echo " Returns the IP address of the host server <br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_NAME']              	
//? Returns the name of the host server (such as www.w3schools.com)

// echo " Returns the name of the host server (such as www.w3schools.com) <br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_SOFTWARE']             
//? Returns the server identification string (such as Apache/2.2.24)

// echo " Returns the server identification string (such as Apache/2.2.24) <br>";
// echo $_SERVER['SERVER_SOFTWARE'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_PROTOCOL']             
//? Returns the name and revision of the information protocol (such as HTTP/1.1)

// echo " Returns the name and revision of the information protocol (such as HTTP/1.1) <br>";
// echo $_SERVER['SERVER_PROTOCOL'];
// echo "<br> <hr>";




//* $_SERVER['REQUEST_METHOD']              
//? Returns the request method used to access the page (such as POST)

// echo " Returns the request method used to access the page (such as POST) <br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br> <hr>";




//* $_SERVER['REQUEST_TIME']             	
//? Returns the timestamp of the start of the request (such as 1377687496)

// echo " Returns the timestamp of the start of the request (such as 1377687496) <br>";
// echo $_SERVER['REQUEST_TIME'];
// echo "<br> <hr>";




//* $_SERVER['QUERY_STRING']             	
//? Returns the query string if the page is accessed via a query string

// echo " Returns the query string if the page is accessed via a query string <br>";
// echo $_SERVER['QUERY_STRING'];
// echo "<br> <hr>";




//* $_SERVER['HTTP_ACCEPT']              	
//? Returns the Accept header from the current request

// echo " Returns the Accept header from the current request <br>";
// echo $_SERVER['HTTP_ACCEPT'];
// echo "<br> <hr>";




//* $_SERVER['HTTP_ACCEPT_CHARSET']         
//? Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)

// echo " Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1) <br>";
// echo $_SERVER['HTTP_ACCEPT_CHARSET'];
// echo "<br> <hr>";




//* $_SERVER['HTTP_HOST']                	
//? Returns the Host header from the current request

// echo " Returns the Host header from the current request <br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br> <hr>";




//* $_SERVER['HTTP_REFERER']             	
//? Returns the complete URL of the current page (not reliable because not all user-agents support it)

// echo " Returns the complete URL of the current page (not reliable because not all user-agents support it) <br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br> <hr>";




//* $_SERVER['HTTPS']                	    
//? Is the script queried through a secure HTTP protocol

// echo " the script queried through a secure HTTP protocol <br>";
// echo $_SERVER['HTTPS'];
// echo "<br> <hr>";




//* $_SERVER['REMOTE_ADDR']              	
//? Returns the IP address from where the user is viewing the current page

// echo " Returns the IP address from where the user is viewing the current page <br>";
// echo $_SERVER['REMOTE_ADDR'];
// echo "<br> <hr>";




//* $_SERVER['REMOTE_HOST']              	
//? Returns the Host name from where the user is viewing the current page

// echo " Returns the Host name from where the user is viewing the current page <br>";
// echo $_SERVER['REMOTE_HOST'];
// echo "<br> <hr>";




//* $_SERVER['REMOTE_PORT']              	
//? Returns the port being used on the user's machine to communicate with the web server

// echo " Returns the port being used on the user's machine to communicate with the web server <br>";
// echo $_SERVER['REMOTE_PORT'];
// echo "<br> <hr>";




//* $_SERVER['SCRIPT_FILENAME']             
//? Returns the absolute pathname of the currently executing script

// echo " Returns the absolute pathname of the currently executing script <br>";
// echo $_SERVER['SCRIPT_FILENAME'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_ADMIN']             	
//? Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)

// echo " Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com) <br>";
// echo $_SERVER['SERVER_ADMIN'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_PORT']              	
//? Returns the port on the server machine being used by the web server for communication (such as 80)

// echo " Returns the port on the server machine being used by the web server for communication (such as 80) <br>";
// echo $_SERVER['SERVER_PORT'];
// echo "<br> <hr>";




//* $_SERVER['SERVER_SIGNATURE']            
//? Returns the server version and virtual host name which are added to server-generated pages

// echo " Returns the server version and virtual host name which are added to server-generated pages <br>";
// echo $_SERVER['SERVER_SIGNATURE'];
// echo "<br> <hr>";




//* $_SERVER['PATH_TRANSLATED']             
//? Returns the file system based path to the current script

// echo " Returns the file system based path to the current script <br>";
// echo $_SERVER['PATH_TRANSLATED'];
// echo "<br> <hr>";




//* $_SERVER['SCRIPT_NAME']              	
//? Returns the path of the current script

// echo " Returns the path of the current script <br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br> <hr>";




//* $_SERVER['SCRIPT_URI']               	
//? Returns the URI of the current page

// echo " Returns the URI of the current page <br>";
// echo $_SERVER['SCRIPT_URI'];
// echo "<br> <hr>";





//* $_SERVER['PHP_SELF']                 	Returns the filename of the currently executing script
//* $_SERVER['GATEWAY_INTERFACE']           Returns the version of the Common Gateway Interface (CGI) the server is using
//* $_SERVER['SERVER_ADDR']              	Returns the IP address of the host server
//* $_SERVER['SERVER_NAME']              	Returns the name of the host server (such as www.w3schools.com)
//* $_SERVER['SERVER_SOFTWARE']             Returns the server identification string (such as Apache/2.2.24)
//* $_SERVER['SERVER_PROTOCOL']             Returns the name and revision of the information protocol (such as HTTP/1.1)
//* $_SERVER['REQUEST_METHOD']              Returns the request method used to access the page (such as POST)
//* $_SERVER['REQUEST_TIME']             	Returns the timestamp of the start of the request (such as 1377687496)
//* $_SERVER['QUERY_STRING']             	Returns the query string if the page is accessed via a query string
//* $_SERVER['HTTP_ACCEPT']              	Returns the Accept header from the current request
//* $_SERVER['HTTP_ACCEPT_CHARSET']         Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
//* $_SERVER['HTTP_HOST']                	Returns the Host header from the current request
//* $_SERVER['HTTP_REFERER']             	Returns the complete URL of the current page (not reliable because not all user-agents support it)
//* $_SERVER['HTTPS']                	    Is the script queried through a secure HTTP protocol
//* $_SERVER['REMOTE_ADDR']              	Returns the IP address from where the user is viewing the current page
//* $_SERVER['REMOTE_HOST']              	Returns the Host name from where the user is viewing the current page
//* $_SERVER['REMOTE_PORT']              	Returns the port being used on the user's machine to communicate with the web server
//* $_SERVER['SCRIPT_FILENAME']             Returns the absolute pathname of the currently executing script
//* $_SERVER['SERVER_ADMIN']             	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
//* $_SERVER['SERVER_PORT']              	Returns the port on the server machine being used by the web server for communication (such as 80)
//* $_SERVER['SERVER_SIGNATURE']            Returns the server version and virtual host name which are added to server-generated pages
//* $_SERVER['PATH_TRANSLATED']             Returns the file system based path to the current script
//* $_SERVER['SCRIPT_NAME']              	Returns the path of the current script
//* $_SERVER['SCRIPT_URI']               	Returns the URI of the current page




//! PHP - $_REQUEST

//* $_REQUEST

//? $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.

//? In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

//? You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:

// $_REQUEST['firstname']


//* Using $_REQUEST on $_POST Requests

//? POST request are usually data submitted from an HTML form.

//? Here is an example of how a HTML form could look like:

?>

<!-- <html>

<body>

    <form method="post" action="demo_request.php">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

</body>

</html> -->
<?php

// $name = $_REQUEST['fname'];
// echo $name;

?>


<!-- <html>
<body>

<form method="post" action="<?php /*echo $_SERVER['PHP_SELF'];*/ ?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = htmlspecialchars($_REQUEST['fname']);
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }
?>

</body>
</html> -->



<?php

//! Using $_REQUEST on $_GET Requests

//? GET request can be form submissions as in the example above, with the method attribute of the HTML <form> element set to GET.

//? GET requests can also be data from a query string (information added after a URL address).

//? Here is an example of how an HTML hyperlink, with a query string could look like:        

?>
<!-- <html>

<body>

    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>

</html> -->

<!-- <html>
<body> -->

<?php
// echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];
?>

<!-- </body>
</html> -->



<?php

//! $_POST contains an array of variables received via the HTTP POST method.

//? There are two main ways to send variables via the HTTP Post method:

//* HTML forms
//* JavaScript HTTP requests


//! $_POST in HTML Forms

//? HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".
//? To demonstrate this, we start by creating a simple HTML form:


?>
<!-- 
<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<? /*php echo $_SERVER['PHP_SELF']; */ ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // collect value of input field
    //     $name = $_POST['fname'];
    //     if (empty($name)) {
    //         echo "Name is empty";
    //     } else {
    //         echo $name;
    //     }
    // }
    ?>

</body>

</html> -->

<?php

//! PHP Superglobal - $_GET

//! PHP $_GET

//? $_GET contains an array of variables received via the HTTP GET method.

//? There are two main ways to send variables via the HTTP GET method:

//? Query strings in the URL
//? HTML Forms

?>















<?php




//! 🧩 $_SERVER

//! ✅ What is it?

// * A superglobal array that contains server and execution environment information.
// * Data is provided by the web server and client request.

//! 🔍 Common $_SERVER Elements:

//!  Key                                Description                                            

//?  $_SERVER['PHP_SELF']           Returns the filename of the currently executing script 
//?  $_SERVER['SERVER_NAME']        The name of the server (e.g., localhost)             
//?  $_SERVER['HTTP_HOST']          Host header (e.g., localhost:8080)                   
//?  $_SERVER['REQUEST_METHOD']     GET or POST                                            
//?  $_SERVER['REQUEST_URI']        URI after domain (e.g., /form.php)                   
//?  $_SERVER['REMOTE_ADDR']        IP address of the client                               
//?  $_SERVER['HTTP_USER_AGENT']    Info about the user's browser/device                   

//! 🛠 Example:


echo $_SERVER['PHP_SELF'];        // Outputs: /form.php
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];  // Outputs: GET or POST




//! 🧩 $_REQUEST

//! ✅ What is it?

// * A superglobal array that combines data from:

//   * $_GET
//   * $_POST
//   * $_COOKIE

//! 🔍 When to Use:

// * When you don't care where the data comes from (GET, POST, or COOKIE).
// * However, not recommended for secure apps—use $_POST or $_GET specifically for clarity and security.

//! 🛠 Example:


//*  If form method is GET or POST and has input named 'username'

// echo $_REQUEST['username'];



//! ⚠️ Difference Summary

//*  Superglobal  Purpose                                 Contains                               

//?  $_SERVER   Server and environment info             URL, IP, browser info, etc.            
//?  $_REQUEST  User input (from GET, POST, or COOKIE)  Combines $_GET, $_POST, $_COOKIE 



//! 🧠 Tip:

//? ✅ Use:

// * $_GET           for reading data (e.g., search queries)
// * $_POST          for submitting data (e.g., login)
// * $_SERVER        for server info (e.g., routing, debugging)
// * $_REQUEST       only when you're sure it's safe and unambiguous
















//! 6. $_FILES

// $filename = $_FILES['profilePic']['name'];
// $tmpname = $_FILES['profilePic']['tmp_name'];
// move_uploaded_file($tmpname, "uploads/" . $filename);
// echo "Uploaded: " . $filename;




?>