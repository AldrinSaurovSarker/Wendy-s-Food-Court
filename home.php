<?php
    $conn = mysqli_connect("localhost", "root", "", "wendys food court");

    if ($conn) {
        echo "";
    } else {
        die("Error: Failed to connect to the database.".mysqli_connect_error());
    }

    $offerList = mysqli_query($conn,
        "select name, image, offer_price, price as regular_price, offer_description, end_time
        from offer inner join food
        on offer.food_id = food.food_id
        where end_time > now() OR end_time is null
        order by end_time desc"
    )
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl carousel cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Additional CSS files -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome cdn -->
    <script src="https://kit.fontawesome.com/09146724eb.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-1">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">
                <img src="images/logo.png" width="100" alt="" class="d-inline-block align-middle mr-2">
                <span class="text-uppercase font-weight-bold fw-bold">Wendys</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars fs-2 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white active" aria-current="page" href="home.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" href="menu.php">
                            <i class="fas fa-book-open"></i> Menu
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" href="cart.php">
                            <i class="fas fa-shopping-cart"></i> My Cart
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" href="order.php">
                            <i class="fas fa-shopping-bag"></i> My Orders
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" href="bookings.php">
                            <i class="fas fa-pencil-alt"></i> Bookings
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" href="about.php">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="cover">
        <div class="container-fluid">
            <div class="image-container"></div>
            <div class="welcome">
                <h3 class="fw-bold fs-1">
                    <i class="fas fa-crown fs-5"></i> Welcome to
                </h3>
                <div class="name text-uppercase fw-bold display-2 text-center">Wendys Food Court</div>
                <h6 class="new-flavors text-uppercase">New flavors</h6>
                <div class="group-buttons mt-5">
                    <a href="menu.php" class="btn btn-warning fw-bold">Browse Menu</a>
                    <div class="btn btn-warning fw-bold">Book a Table</div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features section">
        <div class="container">
            <h1 class="text-uppercase fw-bold mt-5">Why choose us?</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="features-item first-feature wow fadeInUp f-1" data-wow-duration="1s" data-wow-delay="0s">
                                    <div class="first-number number">
                                        <h6>01</h6>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-mug-hot fa-4x"></i>
                                    </div>
                                    <h4>Exceptional Food Quality</h4>
                                    <div class="line-dec"></div>
                                    <p>Our foodcourt is known for its exceptional food quality, using only the freshest ingredients sourced from local producers. Our chefs are highly skilled and are constantly experimenting with new flavors and techniques to offer a unique culinary experience.</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item second-feature wow fadeInUp f-2" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <div class="second-number number">
                                        <h6>02</h6>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-concierge-bell fa-4x"></i>
                                    </div>
                                    <h4>Outstanding Service</h4>
                                    <div class="line-dec"></div>
                                    <p>The staff at our foodcourt are attentive, friendly and knowledgeable about the menu. They go above and beyond to ensure that every guest has a pleasant and memorable dining experience. Our foodcourt takes pride in providing exceptional service to its customers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item first-feature wow fadeInUp f-3" data-wow-duration="1s"
                                    data-wow-delay="0.4s">
                                    <div class="third-number number">
                                        <h6>03</h6>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-book-open fa-4x"></i>
                                    </div>
                                    <h4>Creative Menu</h4>
                                    <div class="line-dec"></div>
                                    <p>Our foodcourt's menu is constantly evolving, featuring innovative dishes that showcase the latest culinary trends. Our foodcourt prides itself on offering something for everyone, ensuring that all guests leave satisfied.</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="features-item second-feature last-features-item wow fadeInUp f-4" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="fourth-number number">
                                        <h6>04</h6>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-heart fa-4x"></i>
                                    </div>
                                    <h4>Welcoming Environment</h4>
                                    <div class="line-dec"></div>
                                    <p>The foodcourt creates a welcoming environment that makes guests feel comfortable and at ease. The staff are friendly and welcoming, and the foodcourt is inclusive and open to everyone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="offer">
        <div class="container my-5">
            <h1 class="text-center fw-bold special">Today's <span>Special</span>
                <i class="fas fa-fire"></i>
            </h1>
            <div class="row mt-2">
                <div class="owl-carousel">
                    <?php
                        foreach ($offerList as $offer) {
                            echo '
                                <div class="item mb-4 mx-2">
                                    <div class="card shadow">
                                        <img src="data:image;base64,'.base64_encode($offer['image']).'" alt="'.$offer['name'].'" class="card-img-top">
                                        <div class="card-body">
                                            <h4>'.$offer['name'].'</h4>
                                            <div class="price fw-bold">
                                                <del class="text-danger lead fw-bold">Regular price: ৳'.$offer['regular_price'].'</del>';
                                                
                                                if ($offer['offer_price'] != null) {
                                                    echo '<div class="text-success lead fw-bold">Offer price: ৳'.$offer['offer_price'].'</div>';
                                                }

                                                echo '
                                            </div>
                                            <div class="text-info">'.$offer['offer_description'].'</div>';

                                            if ($offer['end_time'] != null) {
                                                echo '<p class="text-secondary">Offer valid till: '.$offer['end_time'].'</p>';
                                            }
                                            echo '<a href="" class="btn bg-custom-1 text-light">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <hr class="bg-success">

    <section id="booking-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 booking-text mb-5">
                    <h2 class="fw-bold">Want to book a table in advance?</h2>
                    <p class="booking-description">Book now and enjoy the following benefits:</p>
                    <ol class="booking-benefits">
                        <li class="list-item">
                            <h3 class="headline">Guaranteed table availability</h3>
                            <p class="text-secondary">Ensure that you have a reserved spot for your meal, even during
                                busy times.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Faster service</h3>
                            <p class="text-secondary">With a pre-booked table, you'll receive faster service and can
                                enjoy your meal without unnecessary delays.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Prioritized seating</h3>
                            <p class="text-secondary">Get the best seats in the house with priority seating for
                                pre-booked tables.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Special promotions</h3>
                            <p class="text-secondary">Enjoy exclusive discounts and promotions that are only available
                                to those who book their tables in advance.</p>
                        </li>
                    </ol>
                    <div class="text-center w-100">
                        <a href="#" class="btn btn-lg btn-primary booking-btn">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 booking-image mb-5">
                    <img src="images/book-now.png" alt="Table Bookings" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <hr class="bg-success">

    <section id="hosting-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5">
                    <div class="row">
                        <div class="col-md-12 p-2">
                            <img src="images/host/birthday.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12 p-2">
                            <img src="images/host/wedding.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12 p-2">
                            <img src="images/Host/get-together.jpeg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 booking-text mb-5 text-end">
                    <h2 class="fw-bold pe-5">Host your events in our restaurant</h2>
                    <p class="booking-description pe-5">Host to enjoy the following benefits:</p>
                    <ol class="booking-benefits">
                        <li class="list-item">
                            <h3 class="headline">Free Venue Rental</h3>
                            <p class="text-secondary">We offer you a free rental of event space with a minimum food and beverage purchase.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Complimentary Appetizers</h3>
                            <p class="text-secondary">We provide a complimentary appetizer platter for each table as a welcome gesture for guests.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Discounted Packages</h3>
                            <p class="text-secondary">We offer discounted packages for events with a minimum guest count, such as a set menu or a fixed-price package.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Customized Menus</h3>
                            <p class="text-secondary">We work with you to create a customized menu that meet your specific dietary requirements and preferences.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Complimentary Decorations</h3>
                            <p class="text-secondary">We offer complimentary decorations, such as tablecloths, centerpieces, and lighting, to create a festive atmosphere for the event.</p>
                        </li>
                        <li class="list-item">
                            <h3 class="headline">Free Parking</h3>
                            <p class="text-secondary">We provide free parking facilities only to our guests who host an event in our foodcourt.</p>
                        </li>
                    </ol>
                    <div class="text-center w-100">
                        <a href="#" class="btn btn-lg btn-primary booking-btn">Host Event</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="text-white me-4"><i class="fab fa-twitter"></i></a>
                <a href="" class="text-white me-4"><i class="fab fa-google"></i></a>
                <a href="" class="text-white me-4"><i class="fab fa-instagram"></i></a>
                <a href="" class="text-white me-4"><i class="fab fa-linkedin"></i></a>
                <a href="" class="text-white me-4"><i class="fab fa-github"></i></a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Wendys Food Court</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>We serve the best food in town.</p>
                    </div>

                    <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><a href="#!" class="text-white">My Account</a></p>
                        <p><a href="#!" class="text-white">Help</a></p>
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i>Khulna University, Khulna, Bangladesh</p>
                        <p><i class="fas fa-envelope mr-3"></i> sumaiya2007@cseku.ac.bd</p>
                        <p><i class="fas fa-phone mr-3"></i> +880 1996-666834</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2023 Copyright:
            <a href="https://ku.ac.bd/discipline/cse">ku.ac.bd/discipline/cse</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/owl-carousel.js"></script>
</body>

</html>