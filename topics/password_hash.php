<?php

$password = "idk";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

print_r($hashed_password);
