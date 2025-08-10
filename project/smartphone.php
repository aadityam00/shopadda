<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phones - E-commerce Store</title>
    <link rel="stylesheet" href="assest/css/smartphon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
   <?php include("header.php")?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="smartphone.php" class="active">Mobiles</a></li>
            <li><a href="electronics.php">Electronics</a></li>
            <li><a href="fashion.php">Fashion</a></li>
            <li><a href="#">Appliances</a></li>
            <li><a href="#">Grocery</a></li>
        </ul>
    </nav>

    <div class="breadcrumb">
        <a href="#">Home</a> > <a href="#">Electronics</a> > <span>Mobiles</span>
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
                <h4>Brand</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox" checked> Samsung</label>
                    <label><input type="checkbox" checked> Apple</label>
                    <label><input type="checkbox" checked> OnePlus</label>
                    <label><input type="checkbox" checked> Xiaomi</label>
                    <label><input type="checkbox" checked> Realme</label>
                </div>
            </div>

            <div class="filter-section">
                <h4>RAM</h4>
                <div class="checkbox-group">
                    <label><input type="checkbox"> 2 GB</label>
                    <label><input type="checkbox"> 4 GB</label>
                    <label><input type="checkbox" checked> 6 GB</label>
                    <label><input type="checkbox" checked> 8 GB</label>
                    <label><input type="checkbox"> 12 GB</label>
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
                    <div class="badge">New Launch</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/samsung-s23.png" alt="Samsung Galaxy S23">
                    </div>
                    <div class="product-details">
                        <h3>Samsung Galaxy S23 5G</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(2,345)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹74,999</span>
                            <span class="original-price">₹79,999</span>
                            <span class="discount">6% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>8GB RAM | 256GB ROM</li>
                                <li>6.1 inch Display</li>
                                <li>50MP + 12MP + 10MP Camera</li>
                                <li>3900 mAh Battery</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="badge">Best Seller</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61BGE6iu4AL.SL1500.jpg" alt="iPhone 14">
                    </div>
                    <div class="product-details">
                        <h3>Apple iPhone 14</h3>
                        <div class="ratings">
                            <span class="stars">★★★★★</span>
                            <span class="count">(5,678)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹69,999</span>
                            <span class="original-price">₹79,900</span>
                            <span class="discount">12% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>128GB ROM</li>
                                <li>6.1 inch Super Retina XDR Display</li>
                                <li>12MP Dual Camera</li>
                                <li>IP68 Water Resistance</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="https://m.media-amazon.com/images/I/61YSMhOd5EL.SL1500.jpg" alt="OnePlus 11R">
                    </div>
                    <div class="product-details">
                        <h3>OnePlus 11R 5G</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(1,234)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹39,999</span>
                            <span class="original-price">₹44,999</span>
                            <span class="discount">11% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>8GB RAM | 128GB ROM</li>
                                <li>6.74 inch AMOLED Display</li>
                                <li>50MP + 8MP + 2MP Camera</li>
                                <li>5000 mAh Battery</li>
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
                        <img src="assest/imag/redmi-note-12.png" alt="Redmi Note 12 Pro">
                    </div>
                    <div class="product-details">
                        <h3>Xiaomi Redmi Note 12 Pro 5G</h3>
                        <div class="ratings">
                            <span class="stars">★★★☆☆</span>
                            <span class="count">(3,456)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹23,999</span>
                            <span class="original-price">₹27,999</span>
                            <span class="discount">14% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>6GB RAM | 128GB ROM</li>
                                <li>6.67 inch AMOLED Display</li>
                                <li>50MP + 8MP + 2MP Camera</li>
                                <li>5000 mAh Battery</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="product-card">
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/redmi-note-10.png" alt="Realme 10 Pro">
                    </div>
                    <div class="product-details">
                        <h3>Realme 10 Pro 5G</h3>
                        <div class="ratings">
                            <span class="stars">★★★★☆</span>
                            <span class="count">(1,987)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹19,999</span>
                            <span class="original-price">₹24,999</span>
                            <span class="discount">20% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>8GB RAM | 128GB ROM</li>
                                <li>6.72 inch Display</li>
                                <li>108MP + 2MP Camera</li>
                                <li>5000 mAh Battery</li>
                            </ul>
                        </div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="product-card">
                    <div class="badge">New Launch</div>
                    <div class="wishlist"><i class="far fa-heart"></i></div>
                    <div class="product-image">
                        <img src="assest/imag/samsung-m34.png" alt="Samsung Galaxy M34">
                    </div>
                    <div class="product-details">
                        <h3>Samsung Galaxy M34 5G</h3>
                        <div class="ratings">
                            <span class="stars">★★★☆☆</span>
                            <span class="count">(876)</span>
                        </div>
                        <div class="price">
                            <span class="current-price">₹18,999</span>
                            <span class="original-price">₹20,999</span>
                            <span class="discount">9% off</span>
                        </div>
                        <div class="features">
                            <ul>
                                <li>6GB RAM | 128GB ROM</li>
                                <li>6.5 inch AMOLED Display</li>
                                <li>50MP + 8MP + 2MP Camera</li>
                                <li>6000 mAh Battery</li>
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
        console.log("Mobile category page loaded");
    </script>
</body>

</html>