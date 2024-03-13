<?php
if ($_POST) {
    $valid = 0;
    //  Filter inputs from user

    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) ?? '',
    phpinfo(INFO_VARIABLES);
    echo "</br> $email";
} else {
    echo 'Unhappy';
}
