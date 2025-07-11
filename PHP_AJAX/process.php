<?php

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['superheroAlias'])) {
    $errors['superheroAlias'] = 'Superhero alias is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);
?>
<?php ?>

<!DOCTYPE html>
<html>

<head>
    <title>jQuery Form Example</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>
    <div class="col-sm-6 col-sm-offset-3">
        <h1>Processing an AJAX Form</h1>

        <form action="process.php" method="POST">
            <div id="name-group" class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />
            </div>

            <div id="email-group" class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" />
            </div>

            <div id="superhero-group" class="form-group">
                <label for="superheroAlias">Superhero Alias</label>
                <input type="text" class="form-control" id="superheroAlias" name="superheroAlias"
                    placeholder="Ant Man, Wonder Woman, Black Panther, Superman, Black Widow" />
            </div>

            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </form>
    </div>

    <script src="form.js"></script>
</body>

</html>