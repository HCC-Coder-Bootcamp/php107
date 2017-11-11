<?php

function login_account($user_name,$password){

$status = false;

if ($user_name == "alice" && $password == 12345 ) {

	$status = true;

} else if ($user_name == "bob" && $password == 23456 ) {

	$status = true;

} else if ($user_name == "cindy" && $password == "a2ncd" ) {

	$status = true;

}

	return $status,

}