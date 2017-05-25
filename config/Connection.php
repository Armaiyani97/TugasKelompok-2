<?php 

class Connection {

	public $con;

	// connection to database
	public function __construct()
	{
<<<<<<< HEAD
		$this->con = new mysqli("localhost","root","","daganganku");
=======
		$this->con = new mysqli("localhost","root","","projekrpl");
>>>>>>> c9e24a79723a47999516b226aec7cbd71f0827bf
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
<<<<<<< HEAD
			header("location: index.php");
		}else {
			header("location: logingagal.php");
=======
			header("location: index.html");
		}else {
			header("location: logingagal.html");
>>>>>>> c9e24a79723a47999516b226aec7cbd71f0827bf
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
<<<<<<< HEAD
				header("location: login.php");
			}else {
				header("location: signup.php");
			}

		}else {
			header("location: signupgagal.php");
=======
				header("location: index.html");
			}else {
				header("location: signup.html");
			}

		}else {
			header("location: signupgagal.html");
>>>>>>> c9e24a79723a47999516b226aec7cbd71f0827bf
		}

	}

}