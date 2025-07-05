<?php

/**
 * For password encryption
 */

$passwordRaw = "password123";
$passwordHashed = password_hash($passwordRaw, PASSWORD_DEFAULT);

print_r($passwordHashed);
