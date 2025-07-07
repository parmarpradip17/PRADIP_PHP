<?php
header('Content-Type: application/json');

// DB 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_Ajex";

// Get form data
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$first_name = htmlspecialchars(trim($_POST['first_name'] ?? ''));
$last_name = htmlspecialchars(trim($_POST['last_name'] ?? ''));
$address = htmlspecialchars(trim($_POST['address'] ?? ''));

// Validate
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Invalid email address."]);
    exit();
}

if (empty($first_name) || empty($last_name) || empty($address)) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "All fields are required."]);
    exit();
}

// Connect DB
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Connection failed: " . $mysqli->connect_error]);
    exit();
}

// Check duplicate
$stmt = $mysqli->prepare("SELECT id FROM employees WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "Email already exists."]);
    $stmt->close();
    $mysqli->close();
    exit();
}

$stmt->close();

// Insert
$stmt = $mysqli->prepare("INSERT INTO employees (email, first_name, last_name, address) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $first_name, $last_name, $address);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Employee created successfully."]);
} else {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Error inserting record."]);
}

$stmt->close();
$mysqli->close();
?>

<?php ?>