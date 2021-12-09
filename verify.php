<?php

if(isset($_POST['submit'])) {

$un = $_POST['name'];
$pw = $_POST['password'];

echo '<pre>';
print_r($un);
echo '</pre>';
echo '<pre>';
print_r($pw);
echo '</pre>';
}

$_POST['submit'=>'submit','un'=>'username','[pw]'=>'password']
$un = $POST['un'];

