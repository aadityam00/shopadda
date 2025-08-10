<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion - E-commerce Store</title>
    <link rel="stylesheet" href="assest/css/fashion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include("header.php") ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="smartphone.php">Mobiles</a></li>
            <li><a href="electronics.php">Electronics</a></li>
            <li><a href="#" class="active">Fashion</a></li>
            <li><a href="#">Appliances</a></li>
            <li><a href="#">Grocery</a></li>
        </ul>
    </nav>

    <div class="breadcrumb">
        <a href="#">Home</a> > <span>Fashion</span>
    </div>

    <div class="container">
        <aside class="filters">
            <h3>Filters</h3>

            <div class="filter-section">
                <h4>Price</h4>
                <div class="price-range">
                    <input type="range" min="0" max="20000" value="10000" class="slider" id="priceRange">
                    <p>Max Price: ₹<span id="priceValue">10000</span></p>
                </div>
            </div>

            <div class="filter-section">
                <h4>Categories</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox" checked> Men</label>
                    <label><input type="checkbox" checked> Women</label>
                    <label><input type="checkbox" checked> Kids</label>
                    <label><input type="checkbox" checked> Footwear</label>
                    <label><input type="checkbox" checked> Accessories</label>
                </div>
            </div>

            <div class="filter-section">
                <h4>Brand</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox" checked> Nike</label>
                    <label><input type="checkbox" checked> Adidas</label>
                    <label><input type="checkbox" checked> Zara</label>
                    <label><input type="checkbox" checked> H&M</label>
                    <label><input type="checkbox" checked> Puma</label>
                </div>
            </div>

            <div class="filter-section">
                <h4>Size</h4>
                <div class="size-options">
                    <button class="size-btn">S</button>
                    <button class="size-btn">M</button>
                    <button class="size-btn active">L</button>
                    <button class="size-btn">XL</button>
                    <button class="size-btn">XXL</button>
                </div>
            </div>

            <div class="filter-section">
                <h4>Color</h4>
                <div class="color-options">
                    <button class="color-btn" style="background-color: #000;"></button>
                    <button class="color-btn" style="background-color: #fff; border: 1px solid #ddd;"></button>
                    <button class="color-btn" style="background-color: #ff0000;"></button>
                    <button class="color-btn" style="background-color: #0000ff;"></button>
                    <button class="color-btn" style="background-color: #008000;"></button>
                </div>
            </div>

            <button class="apply-btn">Apply Filters</button>
        </aside>

        <main class="product-list">
            <div class="sort-options">
                <span>Sort By:</span>
                <select>
                    <option>Popularity</option>
                    <option>Price -- Low to High</option>
                    <option>Price -- High to Low</option>
                    <option>Newest First</option>
                    <option>Customer Rating</option>
                </select>
                <div class="view-options">
                    <span>View:</span>
                    <button class="grid-view active"><i class="fas fa-th"></i></button>
                    <button class="list-view"><i class="fas fa-list"></i></button>
                </div>
            </div>

            <div class="products-grid">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <div class="badge">Bestseller</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61-jBuhtgZL.UL1500.jpg" alt="Nike T-Shirt">
                    </div>
                    <div class="product-details">
                        <h3>Nike Men's Dry T-Shirt</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(1,234)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹999</span>
                            <span class="original-price">₹1,299</span>
                            <span class="discount">23% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>100% Cotton</li>
                                <li>Machine Wash</li>
                                <li>Slim Fit</li>
                                <li>Available in 5 colors</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="badge">Trending</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="" alt="Women's Dress">
                    </div>
                    <div class="product-details">
                        <h3>Zara Women's Floral Dress</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(2,345)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹2,499</span>
                            <span class="original-price">₹3,999</span>
                            <span class="discount">37% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>Polyester Blend</li>
                                <li>Machine Wash</li>
                                <li>Regular Fit</li>
                                <li>Length: Above Knee</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61S2KdoGNnL.UL1500.jpg" alt="Adidas Shoes">
                    </div>
                    <div class="product-details">
                        <h3>Adidas Running Shoes</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(3,456)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹3,999</span>
                            <span class="original-price">₹5,999</span>
                            <span class="discount">33% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>Breathable Mesh Upper</li>
                                <li>Cloudfoam Midsole</li>
                                <li>Regular Fit</li>
                                <li>Available in 4 colors</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card">
                    <div class="badge">New Arrival</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/71G6zJLK2+L.UL1500.jpg" alt="Men's Jeans">
                    </div>
                    <div class="product-details">
                        <h3>Levi's Men's Slim Fit Jeans</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(4,567)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹2,199</span>
                            <span class="original-price">₹3,299</span>
                            <span class="discount">33% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>99% Cotton, 1% Elastane</li>
                                <li>Machine Wash</li>
                                <li>Slim Fit</li>
                                <li>Stretchable Fabric</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61D8bNTlBTL.UL1500.jpg" alt="Women's Handbag">
                    </div>
                    <div class="product-details">
                        <h3>H&M Women's Tote Bag</h3>
                        <div class="ratings">
                            <span class="stars">★★★☆☆</span>
                            <span class="count">(987)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹1,299</span>
                            <span class="original-price">₹1,999</span>
                            <span class="discount">35% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>100% Polyester</li>
                                <li>Wipe Clean Only</li>
                                <li>Dimensions: 35 x 40 x 15 cm</li>
                                <li>2 Inner Compartments</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="product-card">
                    <div class="badge">Limited Deal</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61cT6pP2xJL.UL1500.jpg" alt="Kids T-Shirt">
                    </div>
                    <div class="product-details">
                        <h3>Puma Kids' Printed T-Shirt</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(1,876)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹599</span>
                            <span class="original-price">₹999</span>
                            <span class="discount">40% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>100% Cotton</li>
                                <li>Machine Wash</li>
                                <li>Regular Fit</li>
                                <li>Age: 5-6 Years</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <button class="page-btn next">Next <i class="fas fa-chevron-right"></i></button>
            </div>
        </main>
    </div>

    <footer>
        <div class="footer-section">
            <h4>ShopNow</h4>
            <p>India's fastest growing e-commerce platform with millions of happy customers.</p>
        </div>
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Customer Service</h4>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order Tracking</a></li>
                <li><a href="#">Returns & Refunds</a></li>
                <li><a href="#">FAQs</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Connect With Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Price range slider functionality
        const priceSlider = document.getElementById('priceRange');
        const priceValue = document.getElementById('priceValue');

        priceSlider.oninput = function () {
            priceValue.textContent = this.value;
        }

        // Size selection functionality
        const sizeBtns = document.querySelectorAll('.size-btn');
        sizeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                sizeBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        // Color selection functionality
        const colorBtns = document.querySelectorAll('.color-btn');
        colorBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                colorBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        // For demo purposes - in a real implementation you would fetch actual products
        console.log("Fashion category page loaded");
    </script>
</body>

</html>