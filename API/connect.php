<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// now conection to DB
	$conn = mysqli_connect('localhost','root','','api');
		if ($conn->connect_error) {
		die('Connection is failed : '.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into signup(username,email,password) values('$username','$email','$password')");
		$stmt->execute();
	echo "signup done";
	$stmt->close();
	$conn->close();
	}
?>











 