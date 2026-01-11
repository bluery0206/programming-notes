<?php

require '../bootstrap.php';
sleep(1);
if (str_replace(' ', '', $_GET['q'])) {
    $users = execute("SELECT * FROM users WHERE username LIKE ?", ["%".$_GET['q']."%"])->fetchAll();

    if ($users) {
        foreach ($users as $user) {
            echo "<div>{$user->username}</div>";
        }
    } else {
        echo "<div>No results found</div>";
    }   
}