<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            max-width: 1366px;
            margin: 0 auto;
            width: 100%;
        }
    </style>
</head>

<body>


    <div class="container">
        <form action="GET.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name"><br>

            <label for="email">Email</label>
            <input type="text" name="email"><br>

            <label for="pass">Password</label>
            <input type="password" name="pass"><br>

            <input type="submit" name="save" value="Submit">
        </form>

    </div>

</body>

</html>