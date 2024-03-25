<?php
    error_log(0);

    $con = mysqli_connect("localhost","root","5702","sample");
    if(!$con) {
        die('connection failure:'.mysqli_connect_error());
    }

    //------------MySQL QUERY FOR Offer products----------------//
    $offerproduct_sql = "SELECT * FROM `intern` WHERE Category = 'offer_products'";
    $offerproduct_result = mysqli_query($con,$offerproduct_sql);
    $offerproduct_array = mysqli_fetch_all($offerproduct_result);

    //-------------MySQL QUERY FOR Other products----------------//
    $otherproduct_sql = "SELECT * FROM `intern` WHERE Category = 'other_products'";
    $otherproduct_result = mysqli_query($con,$otherproduct_sql);
    $otherproduct_array = mysqli_fetch_all($otherproduct_result);

    //-------------MySQL QUERY FOR Accessories----------------//
    $accessories_sql = "SELECT * FROM `intern` WHERE Category = 'Accessoires'";
    $accessories_result = mysqli_query($con,$accessories_sql);
    $accessories_array = mysqli_fetch_all($accessories_result);

    //-------------MySQL QUERY FOR offer banner----------------//
    $offerbanner_sql = "SELECT * FROM `intern` WHERE Category = 'offer_banner'";
    $offerbanner_result = mysqli_query($con,$offerbanner_sql);
    $offerbanner_array = mysqli_fetch_all($offerbanner_result);

    //-------------MySQL QUERY FOR banner----------------//
    $banner_sql = "SELECT * FROM `intern` WHERE Category = 'banner'";
    $banner_result = mysqli_query($con,$banner_sql);
    $banner_array = mysqli_fetch_all($banner_result);

    //-------------MySQL QUERY FOR logo----------------//
    $logo_sql = "SELECT * FROM `intern` WHERE Category = 'Logo'";
    $logo_result = mysqli_query($con,$logo_sql);
    $logo_array = mysqli_fetch_all($logo_result);

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="E-Commerce Website for mobiles,laptops and other electronics gadgets."/>
        <meta name="keywords" content="E-Commerce,mobiles,laptops,electronic gadgets,html,css,js,php,mysql"/>
        <meta name="author" content="Lalith"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="assets/e-commerce logo white.png" type="image/x-icon">

        <!-- --------------Icon pack links----------- -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
        <title>LK Tech Hub</title>
    </head>

    <body>

        <div>
            <img width="50" height="50" src="https://img.icons8.com/material-sharp/50/collapse-arrow.png" alt="collapse-arrow" onclick="topFunction()" id="myBtn"/>
        </div>
        
        <div class="header" id="home">
            <div class="container">
                <nav class="navbar">
                    <div class="logo">
                        <?php
                            foreach ($logo_array as $key => $value) {
                                $row = $value;
                                $image = $row[1];

                                echo '<img src="'. $image .'" alt="logo-image" height="60px" width="100px">';
                            }
                        ?>
                    </div>
                    <div class="menu" id="menu-items">
                            <a href="#home">Home</a>
                            <a href="#product">Products</a>
                            <a href="#about">About</a>
                            <a href="#contact">Contact</a>
                    </div>
                    <div class="icon">
                        <i class='bx bx-cart'></i>
                        <i class='bx bx-menu' class="menu" id="menu-items"></i>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-md-6 ">
                        <h1 class="text-white">Introducing All New<br> Apple Vision Pro</h1>
                        <p>Apple Vision Pro is Apple's first 3D camera. You can capture magical spatial photos and spatial videos in 3D, 
                            then relive those cherished moments like never before with immersive Spatial Audio. Your existing library of photos 
                            and videos looks incredible at remarkable scale.
                        </p>
                        
                        <a href="#" class="btn btn-main">Explore Now &#8594;</a>
                    </div>
                    <div class="col-md-6">
                        <?php
                            foreach ($banner_array as $key => $value) {
                                $row = $value;
                                $image = $row[1];

                                echo '<img src="'. $image .'" alt="banner-image" class="center">';
                            }
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <!-- Offer products -->
        <div id="product" class="small-container mt-5">
            <h2 class="title">Offer Products</h2>

            <div class="row horizontal-scroll-wrapper squares">

                <?php
                    foreach ($offerproduct_array as $key => $value) {
                        $row = $value;
                        $image = $row[1];
                        $topic = $row[2];
                        $price = $row[3];

                        echo '<div class="col-4 box-container">
                                <img src="'. $image .'">
                                <h5 class="product_name">'. $topic .'</h5>
                                <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p class="price_name" >Rs '. $price .'</p>
                            <div class="btn btn-secondary"> Buy now</div>  
                            <div class="btn btn-secondary" title="Preview Item"><i class="fa fa-cart-plus" aria-hidden="true"></i> </div>
                        </div>';
                    }
                ?>
            </div>

            <!-- Other products -->
            <h2 class="title">Other Products</h2>
            <div class="row">
                
                <?php
                    foreach ($otherproduct_array as $key => $value) {
                        $row = $value;
                        $image = $row[1];
                        $topic = $row[2];
                        $price = $row[3];

                        echo '<div class="col-4 box-container">
                                <img src="'. $image .'">
                                <h5 class="product_name">'. $topic .'</h5>
                                <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p class="price_name" >Rs '. $price .'</p>
                            <div class="btn btn-secondary"> Buy now</div>  
                            <div class="btn btn-secondary" title="Preview Item"><i class="fa fa-cart-plus" aria-hidden="true"></i> </div>
                        </div>';
                    }
                ?>
            </div>
        </div>

        <!-- offer Banner-->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-6">

                        <?php
                            foreach ($offerbanner_array as $key => $value) {
                                $row = $value;
                                $image = $row[1];

                                echo '<img src=" '. $image .' " alt="imac">';
                            }
                        ?>
                    </div>
                    <div class="col-6 text-data text-white">
                        <p>Top Prodcuts you should Buy</p>
                        <h1>Limited offers on iMac!</h1>
                        
                        <a href="#" class="btn">Buy Now &#8594</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accessoires products -->
        <div class="small-container mt-5">
            <h2 class="title">Accessories</h2>
            <div class="row">
                
                <?php
                    foreach ($accessories_array as $key => $value) {
                        $row = $value;
                        $image = $row[1];
                        $topic = $row[2];
                        $price = $row[3];

                        echo '<div class="col-4 box-container">
                                <img src="'. $image .'">
                                <h5 class="product_name">'. $topic .'</h5>
                                <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p class="price_name" >Rs '. $price .'</p>
                            <div class="btn btn-secondary"> Buy now</div>  
                            <div class="btn btn-secondary" title="Preview Item"><i class="fa fa-cart-plus" aria-hidden="true"></i> </div>
                        </div>';
                    }
                ?>
            </div>
        </div>


        <!-- about -->
        <div class="about" id="about">
            <h1><em>About</em></h1>
            <p><strong><em>LK Tech Hub</em></strong></p>
            <div class="about-content">
                <p>We are India's Local Apple Expert and one-stop shop for everything related to Apple, from iPhone, MacBook, iPad,
                     Apple Watch, AirPods, HomePods, and other Apple accessories.</p>
                <p>Established in 2022 with one store and five staff in chennai, LK Tech Hub has become the go-to destination for 
                    Apple enthusiasts across the country. With 6 retail stores and 7 service centers across the nation, we continue
                     to expand, bringing the latest Apple innovations closer to you.</p>
                <p>Explore our stores and indulge in the world of Apple. Immerse yourself into Apple, or try out the latest Apple 
                    accessories. Our knowledgeable Apple experts are always ready to assist you, providing personalized guidance 
                    and support.</p>
                <p>As an Apple Authorized Service Provider (AASP), we also take care of your Apple products, service and repair needs.
                     Our service centers are deployed by Apple-certified and trained professionals to ensure that your devices are in
                      trusted hands.</p>
                <p>At LK Tech Hub, we prioritize your satisfaction and aim to deliver a superior retail experience. We believe in the
                     power of innovation, design, and technology to enhance your digital lifestyle. More than a Million customers trust
                      us in providing reliable service, and a seamless Apple experience.</p>
                <p>Join the Millions of satisfied customers who have made LK Tech Hub as their preferred Apple destination. Visit us 
                    today and elevate your Apple experience to new heights.</p>
            </div>
        </div>


        <!-- contact -->
        <div class="contact" id="contact">
            <p><em>Shop Details</em></p>
            <div class="contact-details" id="contact-details">  
                <div class="contact-container2">
                    <div class="value" id="value">
                        <pre><b>Phone :</b> +91-9********7</pre>
                        <pre><b>Landline :</b> 044-2748****</pre>
                        <pre><b>Email :</b> lktechhub@gmail.com</pre>
                        <pre><b>Address :</b> Greater Area Chennai,<br/>          Tamil Nadu 600028,<br/>          India.</pre>
                        <pre><b>Landmark :</b> Near Chennai Central Railway.
                    </div>
                </div>

                <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.848533637785!2d80.26299387216565!3d13.085738046534217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265fbe6a909ab%3A0x5a6046dfc9f0d784!2sJawaharlal%20Nehru%20Stadium!5e0!3m2!1sen!2sin!4v1706013316879!5m2!1sen!2sin" height="300" width="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Payments -->
        <div class="payments">
            <div class="small-container">
                <p>Our Payment Partners</p>
                <p>100% Secured Payment Gateways</p>
                <div class="row">
                    <img width="50" height="50" src="https://img.icons8.com/ios-glyphs/99/mac-os.png" alt="mac-os"/>
                    <img width="50" height="50" src="https://img.icons8.com/color/50/paytm.png" alt="paytm"/>
                    <img width="50" height="50" src="https://img.icons8.com/fluency/50/paypal.png" alt="paypal"/>
                    <img width="50" height="50" src="https://img.icons8.com/color/50/mastercard-logo.png" alt="mastercard-logo"/>
                    <img width="50" height="50" src="https://img.icons8.com/color/50/google-pay.png" alt="google-pay"/>
                </div>
                
            </div>
        </div>

        <!-- -------footer------ -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our app</h3>
                        <p>For Better Experience and Offers</p>
                        <div class="app-logo">
                            <img width="50" height="50" src="https://img.icons8.com/fluency/50/google-play-store-new.png" alt="google-play-store-new"/>
                            <img width="50" height="50" src="https://img.icons8.com/color/50/apple-app-store--v3.png" alt="apple-app-store--v3"/>
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <h3>Shop Timings</h3>
                            <p>Monday - Friday : </p>
                            <p>9:00 Am to 8:00 Pm</p>
                            <p>Saturday & Sunday : </p>
                            <p>9:00 Am to 9:00 Pm</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Reviews</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">&#169; 2024 | All Rights Reserved</p>
                <p class="copyright"> Designed by Lalith.</p>
            </div>
        </div>

        <!-- scroll top button function -->
        <script>
            let mybutton = document.getElementById("myBtn");
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>

</html>