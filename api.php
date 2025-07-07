<?php
header("Content-Type: application/json");

// DB Connection
$conn = new mysqli("localhost", "root", "", "rest_demo");
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {

    case 'GET':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        if ($id > 0) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
        } else {
            $stmt = $conn->prepare("SELECT * FROM users");
        }

        $stmt->execute();
        $result = $stmt->get_result();

        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        echo json_encode($id > 0 ? $users[0] ?? ["error" => "Not found"] : $users);
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);

        if (!isset($data['name'])) {
            http_response_code(400);
            echo json_encode(["error" => "Name is required"]);
            break;
        }

        $stmt = $conn->prepare("INSERT INTO users (name) VALUES (?)");
        $stmt->bind_param("s", $data['name']);
        $stmt->execute();

        echo json_encode([
            "status" => "User created",
            "id" => $stmt->insert_id,
            "name" => $data['name']
        ]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method Not Allowed"]);
        break;
}

$conn->close();
?>
<?php  ?>
