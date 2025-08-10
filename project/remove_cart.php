<?php
include("config/config1.php");

if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; // Always typecast to avoid SQL injection

    // Delete from cart table
    $sql = "DELETE FROM cart_product WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: cart.php"); // Redirect back to cart
        exit;
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    header("Location: cart.php"); // If no ID, go back
    exit;
}

?>
