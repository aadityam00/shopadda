<?php
session_start();
include("header.php");
include("menubar.php");
?>

<!-- slider  -->
<div class="container-fluid mt-5">
  <div class="carousel slide" id="slidshow" data-bs-ride="carousel" data-bs-intervel="3000">
    <div class="carousel-inner div">
      <div class="carousel-item active img_box">
        <img class="d-block border bg-info ad-img" src="assest/imag/laptop.png" alt="slidshow">
      </div>
      <div class="carousel-item img_box">
        <img class="d-block bg-info ad-img" src="assest/imag/footwear-banner.png" alt="slidshow">
      </div>
      <div class="carousel-item img_box">
        <img class="d-block border bg-info ad-img" src="assest/imag/footwear4.png" alt="slidshow">
      </div>
      <div class="carousel-item img_box">
        <img class="d-block border bg-info ad-img img_5"
          src="assest/imag/Free-E-commerce-Product-Banner-Design-with-Green-Colors-scaled.jpg" width="1240px"
          alt="slidshow">
      </div>
      <div class="carousel-item  imb_box">
        <img class="d-block border bg-info ad-img img_6" src="assest/imag/IMG_20250730_083606.jpg" alt="slidshow">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slidshow" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slidshow" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slidshow" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#slidshow" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#slidshow" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#slidshow" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#slidshow" data-bs-slide-to="4"></button>
    </div>
  </div>
</div>

<!-- cards slider -->
<div class="container-fluid mb-5">
  <div class="category-scrollbar card-scrollbar d-flex px-2 py-2 ms-auto bg-white mt-3 border">
    <div class="card">
      <img class="card-img-top" src="assest/imag/card-img1.png" alt="pajamas">
      <div class="card-body">
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assest/imag/headphone.png" alt="Card image">
      <div class="card-body">
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assest/imag/fashion-card.png" alt="Card image">
      <div class="card-body">
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assest/imag/jecket.png" alt="Card image">
      <div class="card-body">
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="assest/imag/watch.png" alt="Card image">
    </div>
  </div>
</div>
</div>

<!-- cards Buy -->
<div class="container-fluid">
  <div class="row justify-content-center">

    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/abhishik1.png" alt="abhishek1" name="image" id="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name" id="prod_name">Fancy Men Suit Sets <i>black</i></p>
          <strong>₹3499</strong>
          <span class="oldprice">₹5000</span>
          <span class="discount text-success ms-2">30% off</span>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" id="img_src">
            <input type="hidden" name="product_name" id="product_name">
            <input type="hidden" name="price" id="price" value="3499">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>

          <script>
            document.getElementById("img_src").value = document.getElementById("image").src;
            document.getElementById("product_name").value = document.getElementById("prod_name").innerText;
          </script>
        </div>
      </div>
    </div>

    <!-- Card End -->
    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/abhishek2.png" alt="abhishek2" name="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name">Fancy Men Suit kurtas <i>white</i></p>
          <strong>₹2499</strong>
          <span class="oldprice">₹5000</span>
          <span class="discount text-success ms-2">30% off</span>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" value="assest/imag/abhishek2.png">
            <input type="hidden" name="product_name" value="Fancy Men Suit kurtas">
            <input type="hidden" name="price" value="3499">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- Card End -->
    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/devender.png" alt="abhishek1" name="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name">Fancy Men jackets <i>black</i></p>
          <strong>₹4499</strong>
          <span class="oldprice">₹5000</span>
          <span class="discount text-success ms-2">10% off</span>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" value="assest/imag/devender.png">
            <input type="hidden" name="product_name" value="Fancy Men jackets">
            <input type="hidden" name="price" value="3499">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Card End -->
    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/vivo.png" alt="abhishek1" name="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name"> vivo t4 <i>gray</i></p>
          <strong>₹20000</strong>
          <span class="oldprice">₹25000</span>
          <span class="discount text-success ms-2">30% off</span>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" value="assest/imag/vivo.png">
            <input type="hidden" name="product_name" value="vivo t4">
            <input type="hidden" name="price" value="200000">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Card End -->
    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/headphone-card.png" alt="abhishek1" name="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name">sony earburds <i>black</i></p>
          <strong>₹5499</strong>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" value="assest/imag/headphone-card.png">
            <input type="hidden" name="product_name" value="sony earburds ">
            <input type="hidden" name="price" value="5499">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Card End -->
    <!-- Card Start -->
    <div class="col-lg-4 col-md-6 col-12 mb-4 justify-content-center">
      <div class="card h-100 shadow-sm" name="card_1">
        <img class="card-img-top p-3" src="assest/imag/office-chair.png" alt="chair" name="image">
        <div class="card-body text-center">
          <p class="tag_name mb-1" name="prod_name">Fancy office-chair</p>
          <strong>₹1499</strong>

          <form action="cartfunction.php" method="post">
            <input type="hidden" name="img_src" value="assest/imag/office-chair.png">
            <input type="hidden" name="product_name" value="Fancy office-chair">
            <input type="hidden" name="price" value="3499">
            <div class="mt-3 d-flex justify-content-center">
              <button class="btn btn-info btn-sm me-2">Buy Now</button>
              <button type="submit" name="add_cart" class="btn btn-info btn-sm">Add To Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Card End -->

  </div>
</div>



<?php
include("footer.php");
?>
</body>

</html>