<?php
include("config/config1.php");
include("dynamicphp/header.php");
?>
<div class="container">
    <a href="login.php" class="btn btn-warning mt-5">Signin</a>
    <h5 class="text-center mt-5 text-danger">SignUp Here</h5>
    <div class="row border p-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="datafunction.php">
                <div class="mb-5">
                    <label>Name *</label>
                    <input type="text" name="name" placeholder="name" class="form-control">
                </div>
                <div class="mb-5">
                    <label>Email *</label>
                    <input type="text" name="email" placeholder="email" class="form-control">
                </div>
                <div class="mb-5">
                    <label>Password *</label>
                    <input type="password" name="password" placeholder="*******" class="form-control">
                </div>
                <div class="mb-5">
                    <label>Confirm Password *</label>
                    <input type="password" name="cpassword" placeholder="*******" class="form-control">
                </div>
                <div class="mb-5">
                    <button type="submit" name="signup" class="btn btn-success w-100">SignUp</button>
                </div>
                <?php
                if ($_SESSION['error'] !== '') { ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                    <?php
                    unset($_SESSION['error']);
                }
                ?>
            </form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
include("dynamicphp/footer.php");
?>