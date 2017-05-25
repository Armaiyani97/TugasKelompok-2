<?php

require_once('config/Connection.php');

$auth=$_POST['auth'];

$obj=new Connection();
if($auth=='login')
{

	$email=$_POST['email'];
	$password=$_POST['password'];
	$obj->login($email,$password);

}else {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$konfirmasi_password=$_POST['konfirmasi_password'];
	$obj->register($username,$email,$password,$konfirmasi_password);
}




