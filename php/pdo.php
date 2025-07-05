<?php

$hname  = "localhost";
$uname  = "root";
$pwd    = "";
$dbname = "test-db";

$dsn = "mysql:host=$hname;dbname=$dbname";

$conn = new PDO($dsn, $uname, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // VALIDATION

    // Empty fields
    if (!isset($_POST['username']) &&
        !isset($_POST['password']))  {
        // if username and password is not set then
        // there is non username or password in the input field
        // and therefore cancel the registration
    }
    
    // Already Taken Username
    $stmt = $conn->prepare("SELECT * from users WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();

    if ($user) {
        // if has user means the username is taken
        // and so cancel the registration
    }


    // REGISTRATION

    // Password Hashing
    $passwordHashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Database Insertion
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_POST['username'], $passwordHashed]);
}