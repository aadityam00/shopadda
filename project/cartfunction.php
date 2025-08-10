<?php
include("config/config1.php");
include("config/function.php");

if (isset($_POST["add_cart"])) {

    $email = $_SESSION['email'];
    $image = $_REQUEST['img_src'];
    $product_name = $_REQUEST['product_name'];
    $price = (int)$_REQUEST['price'];


    if (!empty($_SESSION['email'])) {

        $register_date = date("Y-m-d H:i:s");

        //  User exists → Add to cart
        $check_cart = "SELECT * FROM cart_product WHERE product_name='$product_name' and email = '$email'";
        $cart_result = mysqli_query($conn, $check_cart);

        if (mysqli_num_rows($cart_result) == 0) {
            $insert_sql = "INSERT INTO cart_product (email,product_name,image , price ,register_date, status , flag) VALUES ('$email','$product_name', '$image', '$price', '$register_date', 1 , 0)";
            if (mysqli_query($conn, $insert_sql)) {
                $_SESSION['cart_msg'] = "Product added to cart.";
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['cart_msg'] = "Something went wrong while adding to cart.";
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['cart_msg'] = "Product already in cart.";
            header("Location: cart.php");
            exit();
        }
    } else {
        //  User not found → Redirect to login
        $_SESSION['cart_msg'] = "You are not logged in. Please login first.";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['cart_msg'] = "Email or product is missing.";
    header("Location: index.php");
    exit();
}
?>