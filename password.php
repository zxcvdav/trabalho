<?php

$password= "123456";
$hast = password_hash($password, PASSWORD_DEFAULT);
 
echo $hast;

if (password_verify("123456", $hast)) {
    echo 'success!';
}
else {
    echo 'invalid';
}
?>