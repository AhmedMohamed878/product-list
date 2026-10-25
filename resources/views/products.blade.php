<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- favicon -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <span></span>
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Static Home</a></li>
                                        <li><a href="index_2.html">Slider Home</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">

                                        <li><a href="about.html">About</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="single-news.html">Single News</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="cart.html"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">

                            <div class="hero-btns">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque
                            eveniet beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row" id="products-list">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <img src="{{ asset('assets/img/products/product-img-1.jpg') }}" alt="Strawberries">
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> $85</p>
                        <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <img src="{{ asset('assets/img/products/product-img-2.jpg') }}" alt="Berries">
                        </div>
                        <h3>Berry</h3>
                        <p class="product-price"><span>Per Kg</span> $70</p>
                        <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <img src="{{ asset('assets/img/products/product-img-3.jpg') }}" alt="Lemons">
                        </div>
                        <h3>Lemon</h3>
                        <p class="product-price"><span>Per Kg</span> $35</p>
                        <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p>Fruitkha template by <a href="https://themewagon.com/">ThemeWagon</a>, designed by
                <a href="https://imransdesign.com/">Imran Hossain</a>.
            </p>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticker.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    ```html
    <script>
        async function loadProducts() {
            const container = document.getElementById('products-list');

            try {
                const response = await fetch('/api/products');

                if (!response.ok) {
                    throw new Error('Failed to load products');
                }

                const products = await response.json();
                container.innerHTML = '';

                if (products.length === 0) {
                    container.textContent = 'No products available.';
                    return;
                }

                products.forEach(function(product) {
                    const column = document.createElement('div');
                    column.className = 'col-lg-4 col-md-6 text-center';

                    const card = document.createElement('div');
                    card.className = 'single-product-item';

                    const image = document.createElement('div');
                    image.className = 'product-image';

                    const icon = document.createElement('i');
                    icon.className = 'fas fa-box-open fa-4x';
                    image.appendChild(icon);

                    const name = document.createElement('h3');
                    name.textContent = product.name;

                    const price = document.createElement('p');
                    price.className = 'product-price';

                    const label = document.createElement('span');
                    label.textContent = 'Price';

                    price.append(
                        label,
                        document.createTextNode(
                            ' ' + Number(product.price).toFixed(2)
                        )
                    );

                    card.append(image, name, price);
                    column.appendChild(card);
                    container.appendChild(column);
                });

            } catch (error) {
                container.textContent = 'Could not load products.';
                console.error(error);
            }
        }

        loadProducts();
    </script>
    ```
</body>

</html>
