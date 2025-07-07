<?php

//! ✅ 14.1: Consuming and Creating RESTful APIs with PHP

//! 🔷 What is a RESTful API?

//? RESTful APIs allow web applications to communicate using HTTP methods like:

// * GET → Retrieve data
// * POST → Send new data
// * PUT/PATCH → Update existing data
// * DELETE → Delete data

//! 📥 Part 1: Consuming a REST API in PHP

//? You can consume (call/use) APIs using:

// * file_get_contents() (simple)
// * cURL (more control)

//! ✅ Example: GET Data from an API



// $api_url = "https://jsonplaceholder.typicode.com/users";

// $response = file_get_contents($api_url);
// $data = json_decode($response, true);

// // Loop through users
// foreach ($data as $user) {
//     echo "Name: " . $user['name'] . "<br>";
//     echo "Email: " . $user['email'] . "<br><br>";
// }



//! ✅ Example: POST Data using cURL



// $url = "https://jsonplaceholder.typicode.com/posts";

// $postData = [
//     'title' => 'Test Post',
//     'body' => 'This is test content.',
//     'userId' => 101
// ];

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// $response = curl_exec($ch);
// curl_close($ch);

// echo $response;



//! 📤 Part 2: Creating a REST API in PHP

//? You can build an API using plain PHP or a micro-framework like Slim or Lumen. Here's a plain PHP example:

//! ✅ Example: Basic REST API in PHP

//! api.php



// header("Content-Type: application/json");

// $method = $_SERVER['REQUEST_METHOD'];

// switch ($method) {
//     case 'GET':
//         $data = [
//             ["id" => 1, "name" => "Peter Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 2, "name" => "Lois Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 3, "name" => "Stewie Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 4, "name" => "Stewie Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 5, "name" => "Stewie Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 6, "name" => "Stewie Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"],
//             ["id" => 7, "name" => "Stewie Griffin", "email" => "pradip@gmail.com", "city" => "junagadh"]
//         ];
//         echo json_encode($data);
//         break;

//     case 'POST':
//         $input = json_decode(file_get_contents('php://input'), true);
//         echo json_encode(["status" => "Received", "data" => $input]);
//         break;

//     default:
//         http_response_code(405);
//         echo json_encode(["error" => "Method Not Allowed"]);
//         break;
// }


// Test this with a tool like Postman or curl.

//! 🔒 Security Tips

// * Sanitize input using filter_input() or htmlspecialchars()
// * Validate JSON with json_decode() !== null
// * Use API keys or tokens for protected routes

//! ✅ Real-Life Use Cases

// * Mobile apps talking to PHP backend
// * JavaScript frontend (AJAX, React) calling PHP API
// * PHP app consuming third-party services like:

//   * Weather
//   * Payment gateways
//   * Social media

?>
<?php ?>