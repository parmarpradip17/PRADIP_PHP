<?php

//! PHP Include Files

//? The include (or require) statement takes all the text/code/markup that exists
//? in the specified file and copies it into the file that uses the include statement.
//? Including files is very useful when you want to include
//? the same PHP, HTML, or text on multiple pages of a website.



//! PHP include and require Statements


//? It is possible to insert the content of one PHP file into another
//? PHP file (before the server executes it), with the include or require statement.

//* The include and require statements are identical, except upon failure:

//? require will produce a fatal error (E_COMPILE_ERROR) and stop the script
//? include will only produce a warning (E_WARNING) and the script will continue


//* Syntax
//? include 'filename';
//! or
//? require 'filename';

// include "Header.php";
// require "Header.php";

//! PHP include vs. require



//! ✅ include vs require

//*  Feature                include                                                                  require                                     

//?  Error Handling         Generates a warning if the file is not found, script continues      Generates a fatal error, script stops 
//?  Use Case               Optional files (e.g., sidebar, ads)                                 Mandatory files (e.g., DB connection, config) 
//?  Return Value           Returns false on failure                                            Returns false on failure                    



//! 🔸 Example – include

// include 'Header.php';  // If missing, shows a warning and continues
// echo "This will still be executed.";


//! 🔸 Example – require

// require 'Header.php';  // If missing, fatal error and script stops
// echo "This will NOT be executed if the file is missing.";




//! 🔁 When to Use What?

// * Use require for essential files (config, authentication, DB connection).
// * Use include for optional components (header, footer, sidebar).



//! ✅ Bonus:

// * include_once and require_once do the same, but ensure the file is only included once, preventing redeclaration errors.

?>
<?php ?>