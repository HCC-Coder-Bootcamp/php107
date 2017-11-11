<?php 

require('../library/login.php');

echo 'Welcome to FaceBug' . PHP_EOL;

echo 'Login Your Account to Continue' . PHP_EOL;

$user_name = readline('Username ' . PHP_EOL);

$password =  readline('Password ' . PHP_EOL);

$login_status = login_account($user_name,$password);

if ($login_status == true) {
	echo "Login Successful";
}else{
	echo "Login Failed Please Try Again";
}
