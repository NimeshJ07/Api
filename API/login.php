<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conn = mysqli_connect('localhost','root','','api');
	if(isset($email)){
		$sql = "select * from signup where email='$email' AND password='$password' ";
		$r = mysqli_query($conn , $sql);

		if (mysqli_num_rows($r)==1) {
			header("Location: home.html");
		}
		else
		{
			echo "Wrong DETAILED";
			exit();
		}
	}
?>






 