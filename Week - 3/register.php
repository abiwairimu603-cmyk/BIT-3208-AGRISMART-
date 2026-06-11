<?php

include "db.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username,email,password,role)
            VALUES('$username','$email','$password','$role')";

    mysqli_query($conn, $sql);

    echo "Registration Successful!";
} else {
echo "Error: " .
mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>

<body>

<h2>Register Form</h2>

<form method="POST" action="register.php">

    <input type="text" name="username" placeholder="Username"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <input type="password" name="password" id="password" placeholder="password"><br><br>
    <p id="strength"></p><br>

    <select name="role" id="role">
    <option value="farmer">Farmer</option>
    <option value="buyer">Buyer</option></select><br><br>

    <button type="submit"
    name="register">Register</button>

</form>

<script src="validation.js"></script>

</body>
</html>