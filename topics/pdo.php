<?php

$hname  = "localhost";
$uname  = "root";
$pwd    = "";
$dbname = "test-db";

$dsn = "mysql:host=$hname;dbname=$dbname";

$conn = new PDO($dsn, $uname, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] && $_POST['password'])  {
        $stmt = $conn->prepare("SELECT * from users WHERE username = ?");
        $stmt->execute([$_POST['username']]);
    
        $user = $stmt->fetch();

        if (!$user) {
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->execute([$_POST['username'], $hashed_password]);

            if ($stmt) {
                echo "eyah";
            }
        }
    }
}