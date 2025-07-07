<?php
$error = "";
$success = "";

$fname         = $_POST['fname'] ?? '';
$lname         = $_POST['lname'] ?? '';
$email         = trim($_POST['email'] ?? '');
$phone         = $_POST['phone'] ?? '';
$gender        = $_POST['gender'] ?? '';
$address1      = $_POST['add1'] ?? '';
$address2      = $_POST['add2'] ?? '';
$city          = $_POST['city'] ?? '';
$state         = $_POST['state'] ?? '';
$country       = $_POST['country'] ?? '';
$zip           = $_POST['zip'] ?? '';
$qualification = $_POST['quali'] ?? '';
$profilePath   = '';

$id = $_GET['id'] ?? ($_POST['id'] ?? null);
$isEdit = $id !== null;

$conn = new mysqli("localhost", "root", "", "info_stud");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Fetch data if editing (GET method)
if ($isEdit && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $address1 = $row['address1'];
        $address2 = $row['address2'];
        $city = $row['city'];
        $state = $row['state'];
        $country = $row['country'];
        $zip = $row['zip'];
        $qualification = $row['qualification'];
        $profilePath = $row['profile_photo'];
    }
    $stmt->close();
}

// ✅ Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($email)) {
        $error = "Email is required.";
    } else {
        // ✅ Check email uniqueness
        if ($isEdit && $id) {
            $checkEmail = $conn->prepare("SELECT id FROM students WHERE email = ? AND id != ?");
            $checkEmail->bind_param("si", $email, $id);
        } else {
            $checkEmail = $conn->prepare("SELECT id FROM students WHERE email = ?");
            $checkEmail->bind_param("s", $email);
        }

        $checkEmail->execute();
        $checkEmail->store_result();
        if ($checkEmail->num_rows > 0) {
            $error = "This email is already registered.";
        }
        $checkEmail->close();

        // ✅ Handle profile image
        if (empty($error)) {
            if (isset($_FILES['profile']) && $_FILES['profile']['error'] === 0) {
                $targetDir = "./img/";
                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                $fileName = uniqid("img_") . "." . pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);
                $targetFilePath = $targetDir . $fileName;
                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                $mimeType = mime_content_type($_FILES["profile"]["tmp_name"]);

                if (in_array($fileType, $allowedTypes) && strpos($mimeType, 'image/') === 0) {
                    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)) {
                        $profilePath = $targetFilePath;
                    } else {
                        $error = "Error uploading the image.";
                    }
                } else {
                    $error = "Invalid file type. Only JPG, JPEG, PNG & GIF are allowed.";
                }
            } elseif ($isEdit && empty($profilePath)) {
                $stmt = $conn->prepare("SELECT profile_photo FROM students WHERE id = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($row = $result->fetch_assoc()) {
                    $profilePath = $row['profile_photo'];
                }
                $stmt->close();
            }
        }

        // ✅ Insert or Update logic       
        if (empty($error)) {
            if ($isEdit && $id) {
                $sql = "UPDATE students SET fname=?, lname=?, email=?, phone=?, gender=?, address1=?, address2=?, city=?, state=?, country=?, zip=?, qualification=?, profile_photo=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssssssssssi", $fname, $lname, $email, $phone, $gender, $address1, $address2, $city, $state, $country, $zip, $qualification, $profilePath, $id);
            } else {
                $sql = "INSERT INTO students (fname, lname, email, phone, gender, address1, address2, city, state, country, zip, qualification, profile_photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssssssssss", $fname, $lname, $email, $phone, $gender, $address1, $address2, $city, $state, $country, $zip, $qualification, $profilePath);
            }

            if ($stmt->execute()) {
                $stmt->close();
                header("Location: curd.php?updated=1");
                exit();
            } else {
                $error = ($isEdit ? "Update" : "Insert") . " failed: " . $stmt->error;
                $stmt->close();
            }
        }
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CURD Operation</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header-txt" id="header-txt">
                <h2>CURD Operation</h2>
            </div>
        </div>
    </header>

    <section class="form-curd">
        <div class="container">
            <!-- Display error or success messages -->
            <?php if ($success): ?>
                <p style="color: green;"><?php echo $success; ?></p>
            <?php endif; ?>

            <?php if ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <div class="form">

                <form id="stud_form" method="POST" role="form" enctype="multipart/form-data" novalidate>
                    <?php if ($isEdit): ?>
                        <input type="hidden" name="id" value="<?= $id ?>">
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control validation" id="fname" value="<?= htmlspecialchars($fname) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control validation" id="lname" value="<?= htmlspecialchars($lname) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control validation" id="email" value="<?= htmlspecialchars($email) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control validation" maxlength="10" id="phone" value="<?= htmlspecialchars($phone) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div class="radio-btn">
                            <span id="Male">
                                <label>
                                    <input type="radio" name="gender" class="form-control validation" id="male" value="Male" <?= ($gender == 'Male') ? 'checked' : '' ?> required>
                                    Male
                                </label>
                            </span>
                            <span id="Female">
                                <label>
                                    <input type="radio" name="gender" class="form-control validation" id="female" value="Female" <?= ($gender == 'Female') ? 'checked' : '' ?> required>
                                    Female
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add1">Address1</label>
                        <input type="text" name="add1" class="form-control validation" id="add1" value="<?= htmlspecialchars($address1) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="add2">Address2</label>
                        <input type="text" name="add2" class="form-control" id="add2" value="<?= htmlspecialchars($address2) ?>">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control validation" id="city" value="<?= htmlspecialchars($city) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" class="form-control validation" id="state" value="<?= htmlspecialchars($state) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="form-control validation" required>
                            <option value="" disabled <?= (empty($country)) ? 'selected' : '' ?>>Select your country</option>
                            <option value="USA" <?= $country == 'USA' ? 'selected' : '' ?>>United States</option>
                            <option value="India" <?= $country == 'India' ? 'selected' : '' ?>>India</option>
                            <option value="Canada" <?= $country == 'Canada' ? 'selected' : '' ?>>Canada</option>
                            <option value="Australia" <?= $country == 'Australia' ? 'selected' : '' ?>>Australia</option>
                            <option value="Germany" <?= $country == 'Germany' ? 'selected' : '' ?>>Germany</option>
                            <option value="Japan" <?= $country == 'Japan' ? 'selected' : '' ?>>Japan</option>
                            <option value="Brazil" <?= $country == 'Brazil' ? 'selected' : '' ?>>Brazil</option>
                            <option value="France" <?= $country == 'France' ? 'selected' : '' ?>>France</option>
                            <option value="South Africa" <?= $country == 'South Africa' ? 'selected' : '' ?>>South Africa</option>
                            <option value="United Kingdom" <?= $country == 'United Kingdom' ? 'selected' : '' ?>>United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zip">ZIP</label>
                        <input type="text" name="zip" maxlength="6" class="form-control validation" id="zip" value="<?= htmlspecialchars($zip) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="quali">Qualification</label>
                        <select name="quali" id="quali" class="form-control validation" required>
                            <option value="" disabled <?= (empty($qualification)) ? 'selected' : '' ?>>Select your qualification</option>
                            <option value="MCA" <?= $qualification == 'MCA' ? 'selected' : '' ?>>MCA</option>
                            <option value="MBA" <?= $qualification == 'MBA' ? 'selected' : '' ?>>MBA</option>
                            <option value="BCA" <?= $qualification == 'BCA' ? 'selected' : '' ?>>BCA</option>
                            <option value="B.Com" <?= $qualification == 'B.Com' ? 'selected' : '' ?>>B.Com</option>
                            <option value="BBA" <?= $qualification == 'BBA' ? 'selected' : '' ?>>BBA</option>
                            <option value="BA" <?= $qualification == 'BA' ? 'selected' : '' ?>>B.A</option>
                            <option value="MA" <?= $qualification == 'MA' ? 'selected' : '' ?>>M.A</option>
                            <option value="PhD" <?= $qualification == 'PhD' ? 'selected' : '' ?>>Ph.D</option>
                        </select>
                    </div>
                    <div class="profile-img ">
                        <label for="profile">profile photo</label>
                        <input type="file" name="profile">
                    </div>

                    <div class="sub-btn">
                        <button type="submit" class="btn btn-primary"><?= $isEdit ? 'Update' : 'Submit' ?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="./js/form.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>