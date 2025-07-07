<?php

//! PHP Form Validation


//! The validation rules for the form above are as follows:

//* Field	        Validation Rules

//? Name	        Required. + Must only contain letters and whitespace
//? E-mail	        Required. + Must contain a valid email address (with @ and .)
//? Website	        Optional. If present, it must contain a valid URL
//? Comment	        Optional. Multi-line input field (textarea)
//? Gender	        Required. Must select one



//* Text Fields
//? The name, email, and website fields are text input elements, and the comment field is a textarea.

//! The HTML code looks like this:

//? Name: <input type="text" name="name">
//? E-mail: <input type="text" name="email">
//? Website: <input type="text" name="website">
//? Comment: <textarea name="comment" rows="5" cols="40"></textarea>


//* Radio Buttons
//? The gender fields are radio buttons and the HTML code looks like this:

//! Gender:
//? <input type="radio" name="gender" value="female">Female
//? <input type="radio" name="gender" value="male">Male
//? <input type="radio" name="gender" value="other">Other


//* The Form Element
//? The HTML code of the form looks like this:

//? <form method="post" action=" echo htmlspecialchars($_SERVER["PHP_SELF"]);">
//? When the form is submitted, the form data is sent with method="post".


//* Warning!
//? The $_SERVER["PHP_SELF"] variable can be used by hackers!
//? If PHP_SELF is used in your page then a user can enter a slash / and then some Cross Site Scripting (XSS) commands to execute.
//? Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users.



//! How To Avoid $_SERVER["PHP_SELF"] Exploits?

//? $_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.









//! PHP Forms - Required Fields

//* PHP - Required Fields
//? From the validation rules table on the previous page, we see that the 
//? "Name", "E-mail", and "Gender" fields are required. These fields cannot
//? be empty and must be filled out in the HTML form.

//* Field	    Validation Rules

//? Name	    Required. + Must only contain letters and whitespace
//? E-mail	    Required. + Must contain a valid email address (with @ and .)
//? Website	    Optional. If present, it must contain a valid URL
//? Comment	    Optional. Multi-line input field (textarea)
//? Gender	    Required. Must select one


//? PHP Forms - Validate E-mail and URL

//! PHP - Validate Name

//? The code below shows a simple way to check if the name field only contains letters,
//? dashes, apostrophes and whitespaces. If the value of the name field is not valid, then store an error message:

// $name = test_input($_POST["name"]);
// if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
//     $nameErr = "Only letters and white space allowed";
// }



//! PHP - Validate E-mail

//? The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.
//? In the code below, if the e-mail address is not well-formed, then store an error message:

// $email = test_input($_POST["email"]);
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $emailErr = "Invalid email format";
// }

//! PHP - Validate URL
//? The code below shows a way to check if a URL address syntax is valid 
//? (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:

// $website = test_input($_POST["website"]);
// if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//   $websiteErr = "Invalid URL";
// }



?>


<?php ?>