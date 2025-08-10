<?php include("config/config1.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Shop ADDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assest/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="assest/java/project.js"></script> -->

</head>

<body>
    <?php include("header.php") ?>

    <?php include("menubar.php") ?>

    <div class="px-3 py-3 mt-1 login_box col-lg-6 m-auto">
        <div class="login_form container">
            <h4>Sign in or Creat Account</h4>

            <!-- <div class="alert alert-success d-none" id="success_msg">
            </div> -->
            <?php
            if ($_SESSION['error'] != '') { ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                </div>
            <?php }
            $_SESSION['error'];
            ?>

            <form action="datafunction.php" method="post" class="d-flex gap-2 flex-column">
                <label for="username"> Enter Your email</label>
                <input type="email" id="username" name="email" placeholder="Enter Here">

                <div class="mb-5">
                    <label>Password</label>
                    <input type="password" id="username" name="password" class="form-control" placeholder="**********">
                </div>
                <!-- <p id="login_error" class="text-danger"></p> -->

                <button type="submit" id="login_btn" name="submit"
                    class="btn-custom btn mb-2 m-auto d-flex justify-content-center">Sign-in</button>

                <p class="legal_text gap-3">To Sign-in,You agree to ShopADDA's
                    <a href="#">conditions of use</a>
                    and
                    <a href="#">Privacy Notice</a>
                </p>
            </form>
            <p><a href="sign-up.php">Creating a Account</a></p>
        </div>
    </div>

    <?php include("footer.php") ?>


</body>

</html>