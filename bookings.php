<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/09146724eb.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/form-style.css">
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
                        <a class="nav-link mx-2 text-white" aria-current="page" href="home.php">
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
                        <a class="nav-link mx-2 text-white active" href="bookings.php">
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

    <section>
        <div class="container mt-5 py-5">
            <div class="row">
                <div class="col-md-6 p-4 text-center d-grid">
                    <div>
                        <h2>Book a table</h2>
                        <h4>Book a seat at our restaurant</h4>
                        <p>Fill out the form below to reserve your table.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal">Book
                            Now</button>
                    </div>

                    <div class="p-4 pb-0">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr class="bg-custom-1 text-white text-center fs-5 py-2">
                                    <td>Guaranteed table availability</td>
                                </tr>
                                <tr class="bg-custom-2 text-white text-center fs-5 py-2">
                                    <td>Faster service</td>
                                </tr>
                                <tr class="bg-primary text-white text-center fs-5 py-2">
                                    <td>Prioritized seating</td>
                                </tr>
                                <tr class="bg-custom-1 text-white text-center fs-5 py-2">
                                    <td>Special promotions</td>
                                </tr>
                                <tr class="bg-custom-2 text-white text-center fs-5 py-2">
                                    <td>Better Customer Experience</td>
                                </tr>
                                <tr class="bg-primary text-white text-center fs-5 py-2">
                                    <td>Better Environment</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 p-4 text-center d-grid">
                    <div>
                        <h2>Host an event</h2>
                        <h4>We give you space to host your event</h4>
                        <p>Fill out the form below to host your event at our restaurant.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hostModal">Host
                            Now</button>
                    </div>
                    
                    <div class="p-4 pb-0">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr class="bg-custom-1 text-white text-center fs-5 py-2">
                                    <td>Free Venue Rental</td>
                                </tr>
                                <tr class="bg-custom-2 text-white text-center fs-5 py-2">
                                    <td>Complimentary Appetizers</td>
                                </tr>
                                <tr class="bg-primary text-white text-center fs-5 py-2">
                                    <td>Discounted Packages</td>
                                </tr>
                                <tr class="bg-custom-1 text-white text-center fs-5 py-2">
                                    <td>Customized Menus</td>
                                </tr>
                                <tr class="bg-custom-2 text-white text-center fs-5 py-2">
                                    <td>Complimentary Decorations</td>
                                </tr>
                                <tr class="bg-primary text-white text-center fs-5 py-2">
                                    <td>Free Parking</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookModalLabel">Book a Table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time">
                            </div>
                            <div class="form-group">
                                <label for="guests">Number of Guests</label>
                                <select class="form-control" id="guests">
                                    <?php
                                        for ($i=1; $i<=20; $i++) {
                                            echo '<option>'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="special">Special Notes (Optional)</label>
                                <textarea class="form-control" id="special"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="hostModal" tabindex="-1" role="dialog" aria-labelledby="hostModalLabel"
            aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hostModalLabel">Host an event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="event-type">Event Type</label>
                                <select class="form-control" id="event-type">
                                    <option>Birthday Party</option>
                                    <option>Wedding</option>
                                    <option>Corporate Event</option>
                                    <option>Get together</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Host Now</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>