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
        echo "</br> username invalid: $username";
    }
} else {
    echo 'Unhappy';
}
