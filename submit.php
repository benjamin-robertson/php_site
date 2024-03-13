<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Verification page</title>
</head>
<body>
<?php
function check_result($valid, $error) { ?>
    <hr />
    <?php if ($valid != 3) { ?>
        <b style="color:red;">There are some problems</b>
        <ul><li>
        <?= implode('</li><li>', $error); ?>
        </li></ul>
    <?php } else { ?>
        <b style="color:green:">You have successfully signed up!</b>
        <?php
    }
}
?>
</body>
</html>

<?php
// const ERR_USERNAME = 'Username must be between 6 and 8 characters';
define('ERR_USERNAME', 'Username must be between 6 and 8 characters');
const ERR_EMAIL = 'email must be valid';
const ERR_PASSWORD = 'Password must be at least 6 characters';
if ($_POST) {
    $valid = 0;
    //  Filter inputs from user

    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) ?? '';
    $username = trim(strip_tags(filter_var($_POST['username'], FILTER_SANITIZE_STRING))) ?? '';
    $password = trim($_POST['password']) ?? '';
    echo "</br> $email";
    echo "</br> $username";
    echo "</br> $password";
    // Check username length between 6 - 8 characters
    if (!empty($username) && strlen($username) >= 6 && strlen($username) <= 8) {
        echo "</br> username valid: $username";
        $valid++;
    } else {
        $error[] = ERR_USERNAME;
    }
    if (!empty($email) && filter_var($email, FILTER_SANITIZE_EMAIL)) {
        echo "</br> email valid: $email";
        $valid++;
    } else {
        $error[] = ERR_EMAIL;
    }
    if (!empty($password) && strlen($password) >= 6 && ctype_alnum($password)) {
        echo "</br> password valid: $password";
        $valid++;
    } else {
        $error[] = ERR_PASSWORD;
    }
    echo "</br> This is error array ${var_dump($error)}";
    phpinfo(INFO_VARIABLES);
    check_result($valid, $error);
} else {
    echo 'Unhappy';
}
