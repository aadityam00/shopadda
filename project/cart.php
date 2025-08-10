<?php
include("config/config1.php");

if (empty($_SESSION['email'])) {
    header("Location: login.php");
}
?>

<?php include("header.php"); ?>

<div class="container mt-4">

    <?php if (!empty($_SESSION['cart_msg'])): ?>
        <div class="alert alert-danger">
            <?php 
                echo $_SESSION['cart_msg'];
                unset($_SESSION['cart_msg']); 
            ?>
        </div>
    <?php endif; ?>

    <?php
    $email = $_SESSION['email'];

    // Fetch cart items for this user
    $sql = "SELECT * FROM cart_product WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    $total = 0;
    ?>

    <h2 class="mb-4">🛒 Your Cart</h2>

    <div class="row">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img class="card-img-top p-3" src="<?php echo htmlspecialchars($row['image']); ?>" alt="product image">
                        <div class="card-body text-center">
                            <p class="tag_name mb-1"><?php echo htmlspecialchars($row['product_name']); ?></p>
                            <strong>₹<?php echo number_format($row['price']); ?></strong>
                            <div class="mt-3 d-flex justify-content-center">
                                <button class="btn btn-info btn-sm me-2">Buy Now</button>
                                <a href="remove_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $total += $row['price']; ?>
            <?php endwhile; ?>

            <div class="col-12 text-end mt-3">
                <h4>Total: ₹<?php echo number_format($total); ?></h4>
            </div>

        <?php else: ?>
            <div class="alert alert-warning">Your cart is empty. <a href="index.php">Shop Now</a></div>
        <?php endif; ?>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>
