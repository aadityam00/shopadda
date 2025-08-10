<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Seller</title>
    <link rel="stylesheet" href="assest/css/seller.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container Seller-form mt-5 mb-3 d-flex justify-content-center">
        <div>
            <p id="success_msg"></p>
            <form action="#" method="post" class="form-content text-center ps-3 pe-5 pb-5">
                <h5 class="px-2 py-2 text-center">Selling With Us</h5>

                <label for="username" class="px-2 py-2">Enter the username</label>
                <input type="text" id="username" class="form-control" placeholder="Username">
                <p id="user_error"></p>
                
                <label for="seller" class="px-2 py-2">Enter the seller Name</label>
                <input type="text" id="seller" placeholder="Enter Seller Name" class="form-control px-2 py-2">

                <label for="contact" class="px-2 py-2">Enter Your contact Number</label>
                <input type="text" id="contact" placeholder="contact Number" class="form-control px-2 py-2">

                <label for="product" class="px-2 py-2">Enter Your Product</label>
                <textarea id="product" rows="5" class="form-control px-2 py-2" placeholder="Enter product"></textarea>

                <button type="submit" class="form-control mt-3 px-2 py-2">Become seller</button>
            </form>
        </div>
    </div>

    <?php include("footer.php"); ?>

</body>

</html>