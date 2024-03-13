<?php
if ($_POST) {
    $valid = 0;
    //  Filter inputs from user

    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) ?? '';
    $username = trim(strip_tags(filter_var($_POST['username'], FILTER_SANITIZE_STRING))) ?? '';
    $password = trim($_POST['password']) ?? '';
    phpinfo(INFO_VARIABLES);
    echo "</br> $email";
    echo "</br> $username";
    echo "</br> $password";
    // Check username length between 6 - 8 characters
    if (!empty($username) && strlen($username) >= 6 && strlen($username) <= 8) {
        echo "</br> username valid: $username";
    } else {
        $error[] = ERR_USERNAME;
    }
    if (!empty($email) && filter_var($email, FILTER_SANITIZE_EMAIL)) {
        echo "</br> email valid: $email";
    } else {
        $error[] = ERR_EMAIL;
    }
    if (!empty($password) && strlen($password) <= 6) {
        echo "</br> password valid: $password";
    } else {
        $error[] = ERR_PASSWORD;
    }
    echo "</br> This is error array $error"
} else {
    echo 'Unhappy';
}
