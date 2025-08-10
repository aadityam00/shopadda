
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopADDA</title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <!-- logo img  -->
            <div class="logo">
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid" src="assest/imag/shopadda.png" alt="Shop Adda Logo">
                </a>
            </div>
            <!-- search bar  -->
            <div class="search-container">
                <form action="#" method="post" class="search-form">
                    <div class="input-group">
                        <div class="d-flex search-icon">
                            <button type="button" class="btn">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" color="#4a4a4a" fill="none">
                                    <path d="M17 17L21 21" stroke="#4a4a4a" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C15.4183 19 19 15.4183 19 11Z"
                                        stroke="#4a4a4a" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <input type="text" name="search" id="search-bar" style="width: 285px;"
                            placeholder="search for Products,brands and more" class="form-control ">
                    </div>
                </form>
            </div>


            <!-- nav - items -->
            <div class="collapse navbar-collapse nav-div d-lg-flex d-none" id="navbarNav">
                <ul class="navbar-nav nav_ul">
                    <!-- nav links  -->
                    <li class="nav-item ">
                        <a class="nav-link nav_list" href="index.php">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_list" href="#">Products</a>
                    </li>
                    <li class="nav-item me-3">
                        <?php if (isset($_SESSION['email'])) { ?>
                            <a href="logout.php" class="btn btn-custom">Logout</a>
                        <?php } else { ?>
                        <a href="#" class="btn btn-custom">Shop Now </a>
                    <?php } ?>
                    </li>
                </ul>
            </div>

            <div class="gap-2 d-flex align-items-center">
                <!-- Login icon -->
                <div class="Login_icon p-2">
                    <?php
                    if (!empty($_SESSION['email'])) {
                        ?>
                        <a href="#" class="nav-link login_link" id="logindropdown" aria-label="login">
                            <span>
                                <?php echo $_SESSION['name']; ?>
                            </span>
                        </a>
                    <?php } else { ?>
                        <a href="login.php" class="nav-link login_link" id="logindropdown" aria-label="login">
                            <span>
                                <img src="assest/svgs/login.svg" alt="login">
                            </span>
                            <span class="nav_title">Login</span>
                        </a>
                    <?php } ?>
                </div>


                <!-- cart  -->
                <div class="link_custom p-2">
                    <a href="cart.php" class="nav-link" aria-label="cart">
                        <span><img src="assest/svgs/cart.svg" alt="cart"></span>
                        <span class="nav_title">Cart</span>
                    </a>
                </div>
                <!-- seller -->
                <div class="link_custom p-2 seller">
                    <a href="seller.php" class="nav-link" aria-label="Become a seller">
                        <span><img src="assest/svgs/seller.svg" alt="seller"></span>
                        <span class="nav_title">Become a Seller</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- responsive search bar  -->
    <div class="search-container-2">

        <div class="container location_box">
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Location not set</span>

            </p>
        </div>
        <div class="input-group search-form-2">
            <div class="d-flex search-icon_2 ">
                <button type="button" class="btn search_btn">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        color="#1254E7" fill="none">
                        <path d="M17 17L21 21" stroke="#1254E7" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path
                            d="M19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C15.4183 19 19 15.4183 19 11Z"
                            stroke="#1254E7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
            </div>
            <input type="text" name="search" id="search-bar" placeholder="search Products and brands"
                class="form-control search_box-2">
        </div>
        </form>
    </div>

</body>

</html>