<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics - E-commerce Store</title>
    <link rel="stylesheet" href="assest/css/electronics.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include("header.php"); ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="smartphone.php">Mobiles</a></li>
            <li><a href="#" class="active">Electronics</a></li>
            <li><a href="fashion.php">Fashion</a></li>
            <li><a href="#">Appliances</a></li>
            <li><a href="#">Grocery</a></li>
        </ul>
    </nav>

    <div class="breadcrumb">
        <a href="index.php">Home</a> > <span>Electronics</span>
    </div>

    <div class="container">
        <aside class="filters">
            <h3>Filters</h3>

            <div class="filter-section">
                <h4>Price</h4>
                <div class="price-range">
                    <input type="range" min="0" max="100000" value="50000" class="slider" id="priceRange">
                    <p>Max Price: ₹<span id="priceValue">50000</span></p>
                </div>
            </div>

            <div class="filter-section">
                <h4>Categories</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox" checked> Laptops</label>
                    <label><input type="checkbox" checked> TVs</label>
                    <label><input type="checkbox" checked> Headphones</label>
                    <label><input type="checkbox" checked> Cameras</label>
                    <label><input type="checkbox" checked> Smart Watches</label>
                </div>
            </div>

            <div class="filter-section">
                <h4>Brand</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox" checked> Samsung</label>
                    <label><input type="checkbox" checked> Sony</label>
                    <label><input type="checkbox" checked> Apple</label>
                    <label><input type="checkbox" checked> Dell</label>
                    <label><input type="checkbox" checked> HP</label>
                </div>
            </div>

            <div class="filter-section">
                <h4>Customer Ratings</h4>
                <div class="rating-filter">
                    <label><input type="checkbox"> <span class="stars">★★★★★</span> & above</label>
                    <label><input type="checkbox"> <span class="stars">★★★★☆</span> & above</label>
                    <label><input type="checkbox"> <span class="stars">★★★☆☆</span> & above</label>
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
                    <div class="badge">Best Seller</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/71TPda7cwUL.SL1500.jpg" alt="MacBook Air">
                    </div>
                    <div class="product-details">
                        <h3>Apple MacBook Air M1</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(5,432)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹84,990</span>
                            <span class="original-price">₹92,900</span>
                            <span class="discount">8% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>Apple M1 Chip</li>
                                <li>8GB RAM | 256GB SSD</li>
                                <li>13.3-inch Retina Display</li>
                                <li>Mac OS</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="badge">New Launch</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/81LmL94PUvS.SL1500.jpg" alt="Sony Bravia TV">
                    </div>
                    <div class="product-details">
                        <h3>Sony Bravia 164 cm (65 inches)</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(3,210)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹99,990</span>
                            <span class="original-price">₹1,29,900</span>
                            <span class="discount">23% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>4K Ultra HD Smart LED TV</li>
                                <li>Google TV</li>
                                <li>Dolby Vision/Atmos</li>
                                <li>X1 4K Processor</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/sony-headphon.png" alt="Sony Headphones">
                    </div>
                    <div class="product-details">
                        <h3>Sony WH-1000XM4 Wireless Headphones</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(7,654)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹19,990</span>
                            <span class="original-price">₹29,990</span>
                            <span class="discount">33% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>Industry Leading ANC</li>
                                <li>30 hrs Battery</li>
                                <li>Touch Controls</li>
                                <li>Built-in Alexa</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card">
                    <div class="badge">Trending</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/canon.png" alt="Canon EOS Camera">
                    </div>
                    <div class="product-details">
                        <h3>Canon EOS M50 Mark II</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(1,234)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹59,995</span>
                            <span class="original-price">₹69,995</span>
                            <span class="discount">14% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>24.1MP APS-C CMOS Sensor</li>
                                <li>4K Video Recording</li>
                                <li>DIGIC 8 Image Processor</li>
                                <li>Vari-angle Touchscreen</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/apple-watch.png" alt="Apple Watch">
                    </div>
                    <div class="product-details">
                        <h3>Apple Watch Series 8</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(4,321)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹41,900</span>
                            <span class="original-price">₹45,900</span>
                            <span class="discount">8% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>GPS + Cellular</li>
                                <li>45mm Midnight Aluminium Case</li>
                                <li>Blood Oxygen & ECG Apps</li>
                                <li>Water Resistant</li>
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
                        <img src="https://m.media-amazon.com/images/I/61Dw5Z8LzJL.SL1500.jpg" alt="Dell Laptop">
                    </div>
                    <div class="product-details">
                        <h3>Dell Inspiron 14 Laptop</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(2,109)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹54,990</span>
                            <span class="original-price">₹64,990</span>
                            <span class="discount">15% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>Intel Core i5-11320H</li>
                                <li>16GB RAM | 512GB SSD</li>
                                <li>14-inch FHD Display</li>
                                <li>Windows 11</li>
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

        // For demo purposes - in a real implementation you would fetch actual products
        console.log("Electronics category page loaded");
    </script>
</body>

</html>