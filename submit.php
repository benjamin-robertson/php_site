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
} else {
    echo 'Unhappy';
}
