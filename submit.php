<?php
if ($_POST) {
    phpinfo(INFO_VARIABLES);
    echo "</br> ${_POST['email']}";
} else {
    echo 'Unhappy';
}
