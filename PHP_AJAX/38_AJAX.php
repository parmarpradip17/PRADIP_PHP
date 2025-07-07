<?php

//! What is AJAX?
//? AJAX = Asynchronous JavaScript and XML.
//? AJAX is a technique for creating fast and dynamic web pages.
//? AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes.
//? This means that it is possible to update parts of a web page, without reloading the whole page.
//? Classic web pages, (which do not use AJAX) must reload the entire page if the content should change.


//* AJAX applications are browser- and platform-independent!


//! AJAX is used to create more interactive applications.

//! AJAX can be used for interactive communication with a database.


//*  Option             Type                 Description                                                                                     
//?  type/method      string               HTTP method: "GET", "POST", "PUT", "DELETE", etc.                                       
//?  url                string               The URL to send the request to.                                                                 
//?  data               object / string      Data to send to the server (can be serialized form or JSON).                                    
//?  dataType           string               Expected data type from the server: "json", "text", "html", "script", etc.              
//?  success            function             Function to run if request succeeds.                                                            
//?  error              function             Function to run if request fails.                                                               
//?  beforeSend         function             Function to run before request is sent.                                                         
//?  complete           function             Function to run after request (success or error).                                               
//?  headers            object               Set custom HTTP headers.                                                                        
//?  contentType        string               The content type of the request. Default: 'application/x-www-form-urlencoded; charset=UTF-8'. 
//?  processData        boolean              Set to false if you're sending FormData or JSON as raw body.                                  
//?  timeout            number               Timeout in milliseconds before request is aborted.                                              


//      $.ajax({
//          type: "POST",
//          url: "save.php",
//          data: { name: "John", email: "john@example.com" },
//          dataType: "json",
//          contentType: "application/x-www-form-urlencoded; charset=UTF-8",
//          beforeSend: function () {
//              console.log("Sending...");
//          },
//          success: function (response) {
//              console.log("Success:", response);
//          },
//          error: function (xhr, status, error) {
//              console.log("Error:", error);
//          },
//          complete: function () {
//              console.log("Request completed");
//          }
//      });






//*  Feature                       Use For                                         

//?  type / method             "POST" or "GET" etc.                        
//?  url                         The script or API endpoint to call              
//?  data                        Data sent to the server                         
//?  dataType                    Format you expect back (json, text, html) 
//?  success, error            Callback functions                              
//?  contentType, processData  For JSON or file uploads                        






//! ✅ jQuery $.ajax() Options Explained with Examples



//!  🔹 1. type / method

// * What it does: Defines the HTTP method: GET, POST, PUT, DELETE.
// * When to use: Use POST when submitting form data, GET when fetching info.
// * ✅ Example:

//? type: 'POST'  // or method: 'POST'

//!  🔹 2. url

// * What it does: Specifies the server-side file or API endpoint to send the request to.
// * ✅ Example:

//? url: 'submit.php'

//!  🔹 3. data

// * What it does: Sends form data or JSON to the server.
// * When to use: When submitting data to the server.
// * ✅ Example (Form data):

//? data: $('#userForm').serialize()

// * ✅ Example (JSON):

//? data: JSON.stringify({ name: "John", email: "john@example.com" })

//!  🔹 4. dataType

// * What it does: Expected format of the response: 'json', 'text', 'html', 'script'.
// * ✅ Example:

//? dataType: 'json' // Use if PHP returns JSON: echo json_encode(['msg' => 'Success']);

//!  🔹 5. success

// * What it does: A function that runs when the request is successful.
// * ✅ Example:

//? success: function(response) {
//?     console.log("Server says:", response);
//? }

//!  🔹 6. error

// * What it does: A function that runs if the server returns an error or fails to respond.
// * ✅ Example:

//? error: function(xhr, status, error) {
//?     console.error("Error occurred:", error);
//? }

//!  🔹 7. beforeSend

// * What it does: A function that runs just before sending the request.
// * Use for: showing loaders, disabling buttons.
// * ✅ Example:

//? beforeSend: function() {
//?     $('#submitBtn').prop('disabled', true);
//? }

//!  🔹 8. complete

// * What it does: Runs after the request finishes, whether it succeeds or fails.
// * Use for: hiding loaders, re-enabling buttons.
// * ✅ Example:

//? complete: function() {
//?     $('#submitBtn').prop('disabled', false);
//? }

//!  🔹 9. headers

// * What it does: Adds custom HTTP headers to the request.
// * Use for: sending tokens or custom auth.
// * ✅ Example:

//? headers: {
//?     'Authorization': 'Bearer YOUR_TOKEN',
//?     'X-Custom-Header': 'value'
//? }

//!  🔹 10. contentType

// * What it does: Sets the media type of the request body.
// * Default: 'application/x-www-form-urlencoded'
// * ✅ Example:

//? contentType: 'application/json' // for JSON request body

//!  🔹 11. processData

// * What it does: Tells jQuery to turn data into a query string. Set to false when using FormData or raw JSON.
// * ✅ Example:

//? processData: false, // use false when sending FormData or raw body

//!  🔹 12. timeout

// * What it does: Aborts the request if it takes too long.
// * ✅ Example:

//? timeout: 5000 // 5 seconds

//! 🔄 Full Example Using All Options

// $.ajax({
//     type: 'POST',
//     url: 'submit.php',
//     data: JSON.stringify({
//         name: 'Ali',
//         email: 'ali@example.com',
//         phone: '1234567890',
//         city: 'Lahore'
//     }),
//     dataType: 'json',
//     contentType: 'application/json',
//     processData: false,
//     headers: {
//         'X-Requested-With': 'XMLHttpRequest'
//     },
//     beforeSend: function () {
//         console.log("Sending...");
//     },
//     success: function (response) {
//         console.log("Success:", response.message);
//     },
//     error: function (xhr, status, error) {
//         console.error("Error:", xhr.responseText);
//     },
//     complete: function () {
//         console.log("Request completed.");
//     },
//     timeout: 7000
// });

?>

<!-- <!DOCTYPE html>
<html>

<head>
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>

    <p><b>Start typing a name in the input field below:</b></p>
    <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>

</body>

</html> -->