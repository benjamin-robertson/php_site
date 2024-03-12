<?php
// define a constant "FILE_NAME" that represents an arbitrary filename of your choice
const FILE_NAME = '/tmp/blah'
// Assign your first name to a variable $firstName
$firstname = 'ben'
// Write the contents of $firstName out to the file "FILE_NAME"
file_put_contents(FILE_NAME, $firstName);
// echo the OS family you are using
echo $PHP_OS;
// echo the name of the current directory
echo __dir__;