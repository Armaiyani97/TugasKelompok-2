<?php 

class Connection {

	public $con;

	// connection to database
	public function __construct()
	{
		$this->con = new mysqli("localhost","root","","projekrpl");
	}

	// try authentication user
	public function login($email,$password)
	{
		$query="select *From users where email=? AND password=?";
		$stmt=$this->con->prepare($query);
		$stmt->bind_param("ss",$email,md5($password)); 
		$stmt->execute();

		if($stmt->fetch())
		{
			header("location: index.html");
		}else {
			header("location: logingagal.html");
		}
	}

	public function register($username,$email,$password,$konfirmasi_password)
	{
		if($password==$konfirmasi_password)
		{
			$password=md5($password);
			$status='user';

		 	$query="INSERT INTO users (username,email,password,status) VALUES(?,?,?,?)";
		 	$statement=$this->con->prepare($query);
		 	$statement->bind_param('ssss', $username,$email,$password,$status);

			if($statement->execute())
			{
				header("location: index.html");
			}else {
				header("location: signup.html");
			}

		}else {
			header("location: signupgagal.html");
		}

	}

}