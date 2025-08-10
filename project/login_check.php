<?php
include('config/config1.php');
include('config/function.php');


//register code
if (isset($_REQUEST['signup']) == 'signup') {
    $name = $_REQUEST['name'];
    $email = strtolower($_REQUEST['email']);
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    if (!empty($name) && !empty($email) && !empty($password) && emailvaidat($email)) {
        $pass = md5($password);
        if ($password == $cpassword) {

            $sql_dup = "SELECT * FROM login_tbl WHERE email ='$email' ";
            $result = mysqli_query($conn, $sql_dup);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['error'] = "Your email id already exists";
                header("location:" . "login.php");
            } else {

                $sql = "INSERT INTO login_tbl(name, email, password, status, flag) VALUES('$name', '$email', '$pass', 1, 0)";
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['error'] = "Your Registration successfull";
                    header("location:" . "index.php");
                }
            }

        } else {
            $_SESSION['error'] = "Your confirm password did not match";
            header("location:" . "login.php");
        }
    } else {
        $_SESSION['error'] = "Fill the all fields";
        header("location:" . "login.php");
    }
}

//login...code
if (isset($_REQUEST['submit']) == 'submit') {
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);

    if (!empty($email) && emailvaidat($email) && !empty($password)) {

        $sql = "SELECT * FROM login_tbl WHERE email='$email'";
        $result = mysqli_query($conn, $check_quary);
        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $data['password']) {
                $_SESSION['email'] = $data['email'];
                header("location:" . "index.php");

            } else {
                $_SESSION['error'] = "Your password did not match";
                header("location:" . "login.php");
            }
        } else {
            $_SESSION['error'] = "Your email id not register in our portal";
            header("location: sing-up.php");
        }
    } else {
        $_SESSION['error'] = "Please enter a vaild mail id";
        header("location: login.php");
    }
}

?>