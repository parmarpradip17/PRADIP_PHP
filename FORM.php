<?php
// Initialize variables
$error = '';
$success = '';
$fname = '';
$lname = '';
$email = '';
$phone = '';
$gender = '';
$address1 = '';
$address2 = '';
$city = '';
$state = '';
$country = '';
$zip = '';
$qualification = '';
'';
'';

// Process form if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    if (empty($email)) {
        $error = "Email is required.";
    } else {
        // DB connection
        $conn = new mysqli("localhost", "root", "", "info_stud");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check for duplicate email
        $checkEmail = $conn->prepare("SELECT id FROM students WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $checkEmail->store_result();

        if ($checkEmail->num_rows > 0) {
            $error = "This email is already registered.";
        } else {
            $checkEmail->close();

            // Insert into DB
            $stmt = $conn->prepare("INSERT INTO students (fname, lname, email, phone, gender, address1, address2, city, state, country, zip, qualification) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssssss", $fname, $lname, $email, $phone, $gender, $address1, $address2, $city, $state, $country, $zip, $qualification);

            if ($stmt->execute()) {
                $success = "Form submitted successfully!";
            } else {
                $error = "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CURD Operation</title>
    <link rel="stylesheet" href="./css/style.css">
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
            <div class="form">
                <?php if ($error): ?>
                    <div style="color:red;"><?= htmlspecialchars($error) ?></div>
                <?php elseif ($success): ?>
                    <div style="color:green;"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>

                <form method="POST" action="FORM.php" novalidate>
                    <div class="form-group "><input type="text" class="form-control validation" name="fname" value="<?= htmlspecialchars($fname) ?>" placeholder="First Name" required></div>
                    <div class="form-group "><input type="text" class="form-control validation" name="lname" value="<?= htmlspecialchars($lname) ?>" placeholder="Last Name" required></div>
                    <div class="form-group "><input type="email" class="form-control validation" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="Email" required></div>
                    <div class="form-group "><input type="tel" class="form-control validation" name="phone" value="<?= htmlspecialchars($phone) ?>" placeholder="Phone" required></div>
                    <div class="form-group ">
                        <label for="gender">gender</label>
                        <div class="radio-btn">
                            <label><input type="radio" class="form-control validation" name="gender" value="Male" <?= ($gender == 'Male') ? 'checked' : '' ?>> Male</label>
                            <label><input type="radio" class="form-control validation" name="gender" value="Female" <?= ($gender == 'Female') ? 'checked' : '' ?>> Female</label><br>
                        </div>
                    </div>
                    <div class="form-group "><input type="text" class="form-control validation" name="add1" value="<?= htmlspecialchars($address1) ?>" placeholder="Address 1" required></div>
                    <div class="form-group "><input type="text" class="form-control validation" name="add2" value="<?= htmlspecialchars($address2) ?>" placeholder="Address 2"></div>
                    <div class="form-group "><input type="text" class="form-control validation" name="city" value="<?= htmlspecialchars($city) ?>" placeholder="City" required></div>
                    <div class="form-group "><input type="text" class="form-control validation" name="state" value="<?= htmlspecialchars($state) ?>" placeholder="State" required></div>
                    <div class="form-group "><input type="text" class="form-control validation" name="zip" value="<?= htmlspecialchars($zip) ?>" placeholder="ZIP Code" required></div>
                    <div class="form-group ">
                        <label for="country">country</label>
                        <select name="country" id="country" required>
                            <option value="" disabled selected>Select your country</option>
                            <option value="United States" <?= $country = 'United States' ? 'selected' : '' ?>>United States</option>
                            <option value="India" <?= $country = 'India' ? 'selected' : '' ?>>India</option>
                            <option value="Canada" <?= $country = 'Canada' ? 'selected' : '' ?>>Canada</option>
                            <option value="Australia" <?= $country = 'Australia' ? 'selected' : '' ?>>Australia</option>
                            <option value="Germany" <?= $country = 'Germany' ? 'selected' : '' ?>>Germany</option>
                            <option value="Japan" <?= $country = 'Japan' ? 'selected' : '' ?>>Japan</option>
                            <option value="Brazil" <?= $country = 'Brazil' ? 'selected' : '' ?>>Brazil</option>
                            <option value="France" <?= $country = 'France' ? 'selected' : '' ?>>France</option>
                            <option value="South Africa" <?= $country = 'South Africa' ? 'selected' : '' ?>>South Africa</option>
                            <option value="United Kingdom" <?= $country = 'United Kingdom' ? 'selected' : '' ?>>United Kingdom</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="quali">Qualification</label>
                        <select name="quali" id="quali" required>
                            <option value="">Select Qualification</option>
                            <option value="MCA" <?= $qualification == 'MCA' ? 'selected' : '' ?>>MCA</option>
                            <option value="MBA" <?= $qualification == 'MBA' ? 'selected' : '' ?>>MBA</option>
                            <option value="BCA" <?= $qualification == 'BCA' ? 'selected' : '' ?>>BCA</option>
                        </select><br>
                    </div>
                    <div class="sub-btn">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>