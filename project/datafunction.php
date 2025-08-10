<?php
include('config/config1.php');
include('config/function.php');

if (isset($_REQUEST['signup']) == 'signup') {
	$name = $_REQUEST['name'];
	$email = strtolower($_REQUEST['email']);
	$password = $_REQUEST['password'];
	$cpassword = $_REQUEST['cpassword'];

	if (!empty($name) && !empty($email) && !empty($password) && emailvaidat($email)) {
		$pass = md5($password);
		if ($password == $cpassword) {
			$register_date = datetime();
			$sql_dup = "SELECT * FROM login_user WHERE email ='$email' ";
			$result = mysqli_query($conn, $sql_dup);

			if (mysqli_num_rows($result) > 0) {
				$_SESSION['error'] = "Your email id already exists";
				header("location: login.php");
			} else {

				$sql = "INSERT INTO login_user (register_date ,email, password, status, flag , name) VALUES('$register_date', '$email', '$pass', 1, 0 , '$name')";
				if (mysqli_query($conn, $sql)) {
					$_SESSION['error'] = "Your Registration successfull";
					header("location: index.php");
				}
			}

		} else {
			$_SESSION['error'] = "Your confirm password did not match";
			header("location: sign-up.php");
		}
	} else {
		$_SESSION['error'] = "Fill the all fields";
		header("location: sign-up.php");
	}
}


// Login Code

if (isset($_REQUEST['submit']) == 'submit') {
	$email = $_REQUEST['email'];
	$password = md5($_REQUEST['password']);

	if (!empty($email) && !empty($password) && emailvaidat($email)) {

		$sql = "SELECT * FROM login_user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		$data = mysqli_fetch_assoc($result);

		if (mysqli_num_rows($result) > 0) {
			if ($password == $data['password']) {
				$_SESSION['email'] = $data['email'];
				$_SESSION['name'] = $data['name'];
				header("location: index.php");

			} else {
				$_SESSION['error'] = "Your password did not match";
				header("location: login.php");
			}
		} else {
			$_SESSION['error'] = "Your email id not register in our portal";
			header("location: login.php");
		}
	} else {
		$_SESSION['error'] = "Fill the all fields";
		header("location: login.php");
	}
}