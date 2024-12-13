<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oak website</title>
    <!-- swiper-js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- swiper-js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
    <!-- nav-secion -->
    <div class="header-all">
        <section class="nav-section">
            <div class="nav">
                <a href="#">
                    <img class="logo" width="60px" height="60px" src="assets/img/logo.svg" alt="logo">
                </a>

                <input type="checkbox" id="check" name="nav-toggle">
                <label for="check">
                    <span class="menu">
                        <img src="{{ asset('assets/img/icon/menu-icon.svg') }}" alt="icon">
                    </span>
                    <span class="menu-close">
                        <img src="{{ asset('assets/img/icon/menu-x.svg') }}" alt="icon">
                    </span>
                </label>

                <ul class="nav-list-items">
                    <li>
                        <a class="nav-active" href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Product</a>
                    </li>
                    <li>
                        <a href="#">Product Categories</a>
                    </li>
                    <li>
                        <a href="#">Our Story</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </ul>
                <div class="nav-icons">
                    <a href="#">
                        <img width="23px" height="23px" src="assets/img/icon/ser-icon.svg" alt="icon">
                    </a>
                    <a href="#">
                        <img width="23px" height="23px" src="assets/img/icon/user-icon.svg" alt="icon">
                    </a>
                    <a href="#">
                        <img width="23px" height="23px" src="assets/img/icon/in-icon.svg" alt="icon">
                    </a>
                </div>
            </div>
        </section>
        <!-- nav-secion -->
        <!-- hero-section -->

    </div>
    <!-- Swiper JS -->
    <!-- hero-section -->
@yield('body')
<!-- service-and-contact-section -->

<!-- service-and-contact-section -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-all-content">
                <div class="footer-leftsite">
                    <a href="#">
                        <img class="footer-logo" width="74px" height="74px" src="assets/img/footer-logo.png" alt="logo">
                    </a>
                    <p class="font-poppins">successfully completed over 200
                        large-scale projects for clients in
                        Bangladesh, including a significant
                        number of SaaS companies,
                        thriving startups, and educational
                        establishments.
                    </p>
                    <div class="footer-brand-logo">
                        <a href="#">
                            <img src="assets/img/paypal.png" alt="logo">
                        </a>
                        <a href="#">
                            <img src="assets/img/stripe.png" alt="logo">
                        </a>
                        <a href="#">
                            <img src="assets/img/id.png" alt="logo">
                        </a>
                    </div>
                    <div class="nix-logo">
                        <a href="#">
                            <img src="assets/img/nix.png" alt="logo">
                        </a>
                        <span>< 18 years we do not sell alcohol < 25 years, show your ID</span>
                    </div>
                </div>
                <div class="footer-rightsite">
                    <div class="footer-all-page-content">
                        <div class="footer-page">
                            <h4>Pages</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Product</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-page footer-item">
                            <h4>Food</h4>
                            <ul>
                                <li>
                                    <a href="#">Spanish Foods</a>
                                </li>
                                <li>
                                    <a href="#">Spanish Drinks</a>
                                </li>
                                <li>
                                    <a href="#">Spanish Hampers & Gifts</a>
                                </li>
                                <li>
                                    <a href="#">Kitchenware</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-page footer-social-item">
                            <h4>Contact</h4>
                            <div class="social">
                                <a href="#">
                                    <img src="assets/img/icon/fb-icon.svg" alt="icon">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/towi.svg" alt="icon">
                                </a>
                                <a href="#">
                                    <img src="assets/img/icon/lind.svg" alt="icon">
                                </a>
                            </div>
                            <div class="social-id">
                                <div class="email-phone">
                                    <img src="assets/img/icon/phone.svg" alt="icon">
                                    <span>+880 1728247398</span>
                                </div>
                                <div class="email-phone">
                                    <img src="assets/img/icon/email.svg" alt="icon">
                                    <span>info@example.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-subscribe">
                        <div class="input-button">
                            <input type="text" placeholder="Your Email">
                            <a href="#">
                                Subscribe
                            </a>
                        </div>
                        <span>Get 15% of your first order by subscribing to our newsletter</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- swiper-js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- swiper-js -->
    @yield('script')
    @yield('style')
</body>
</html>
