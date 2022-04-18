<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAG   -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fulo Store - An E-commerce website</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">

    <!--CSS FILE-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/resonsive.css">
</head>
<body>

    <!--START HEADER SECTION -->
    <header class="header-section" id="myNav">

        <!--START HEADER-TOP SECTION -->
        <section class="header-top" id="home">
            <div class="row">
                <div class="header-top-container">
                    <div class="header-top-left">
                        <ul>
                            <li><a href="#"><i class="fas fa-envelope"></i>nayemishan377@gmail.com</a></li>
                            <li><a href="#"><i class="fas fa-phone-alt"></i>01637654490 </a></li>
                        </ul>
                    </div>
                    <div class="header-top-right">
                        <ul>
                            <li class="social-icon">
                                <a href=""><i class="fab fa-facebook"></i>
                                    </a>
                                <a href=""><i class="fab fa-twitter"></i>
                                    </a>
                                <a href=""><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li class="lang-menu">
                                <span>English <i class="fas fa-angle-down"></i> </span>
                            </li>
                            <li class="account-link">
                                <span>
                                    <a href="account.php">
                                        <i class="fas fa-user-circle"></i> Login / registration
                                    </a>
                                </span>
                            </li>
                    </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--END HEADER-TOP SECTION -->

        <!--START HEADER-SEARCH-SECTION -->
        <section class="header-search-section">
            <div class="row">
                <div class="header-search-container">
                    <div class="header-logo">
                        <a href="index.html">
                        <img src="resources/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="header-search-box">
                        <input type="text" name="search" placeholder="Search here">
                        <div class="search-btn">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="header-icon">
                        <ul>
                            <li><a href="#">
                                <i class="far fa-heart" value="8"></i>
                            </a></li>
                            <li><a href="cart.php">
                                <i class="fas fa-shopping-cart" value="5"></i>
                            </a></li>
                        </ul>
                    </div>
                    <div class="mobile-menu">
                        <span onclick="openNav()">&#9776;</span>
                        <div class="overlay" id="my-nav">
                            <a href="javascript:void()" onclick="closeNav()" class="clsbtn">&times;</a>
                            <div class="mobile-header-icon">
                                <a href="#" onclick="closeNav()">
                                    <i class="far fa-heart" value="8"></i>
                                </a>
                                <a href="cart.html" onclick="closeNav()">
                                    <i class="fas fa-shopping-cart" value="5"></i>
                                </a>
                            </div>
                            <div class="overlay-content">
                                <a href="index.php" onclick="closeNav()">home</a>
                                <a href="#" onclick="closeNav()">about us</a>
                                <a href="#" onclick="closeNav()">service</a>
                                <a href="#" onclick="closeNav()">pages</a>
                                <a href="#" onclick="closeNav()">shop</a>
                                <a href="#" onclick="closeNav()">blog</a>
                                <a href="contact.php" onclick="closeNav()">contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END HEADER-SEARCH-SECTION -->

        <!--START HEADER-NAV-SECTION -->
        <section class="header-nav-section navbar">
            <div class="row">
                <div class="nav-bar">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">pages</a></li>
                        <li><a href="#">shop</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </header>

    <!--END HEADER-NAV-SECTION -->

    



    <!-- START-MAIN-CONTENT-SECTION -->
    <!-- START-BREADCUMB-SECTION -->

    <section id="breadcumb-section">
        <div class="row">
            <div class="breadcumb-details">
                <h2>Cart Page</h2>
                <h4>Home / Cart</h4>
            </div>
        </div>
    </section>

    <!-- END-BREADCUMB-SECTION -->

    <!-- START-TABLE-SECTION -->
    <section id="table">
        <div class="table-form">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="resources/img/products/3.jpg" alt=""></td>
                            <td><h3>Etiam-Gravida</h3></td>
                            <td><span>240tk</span></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><span>240tk</span></td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                        <tr>
                            <td><img src="resources/img/products/14.jpg" alt=""></td>
                            <td><h3>Etiam-Gravida</h3></td>
                            <td><span>240tk</span></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><span>240tk</span></td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                        <tr>
                            <td><img src="resources/img/products/12.jpg" alt=""></td>
                            <td><h3>Etiam-Gravida</h3></td>
                            <td><span>240tk</span></td>
                            <td><input type="number" value="1" min="1"></td>
                            <td><span>240tk</span></td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="coupon-cart-contain">
                <div class="coupon">
                    <input type="text" placeholder="Coupon Code">
                    <a href="">Apply Coupon</a>
                </div>
                <div class="cart-up">
                    <a href="">Update Cart</a>
                </div>
            </div>
        </div>
    </section>

    <section id="cart-total">
        <div class="row">
            <div class="cart-total-container">
                <div class="cart-total-item">

                </div>
                <div class="cart-total-item">
                    <h3>Cart Total</h3>
                    <hr>
                    <div>
                    <h6>Subtotal</h6>  
                    <p>240tk</p>
                    </div>
                    <div>
                        <h6>Shippping</h6>  
                        <p>20tk</p>
                    </div>
                    <hr>
                    <div>
                        <h6>Total</h6>  
                        <p>260tk</p>
                    </div>
                    <a href="">Checkout</a>
                </div>
            </div>
        </div>
    </section>



    <!--END-MAIN-CONTENT-SECTION -->















