<?php
    $conn = mysqli_connect("localhost", "root", "", "wendys food court");

    if ($conn) {
        echo "";
    } else {
        die("Error: Failed to connect to the database.".mysqli_connect_error());
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    if (isset($_GET['lower-price']) && isset($_GET['upper-price']) && isset($_GET['sort-by']) && isset($_GET['search'])) {
        $sort = $_GET['sort-by'];
        $lowerprice = $_GET['lower-price'];
        $upperprice = $_GET['upper-price'];
        $query = $_GET['search'];

        if ($query == null) {
            $query = "";
        }
        
        if ($lowerprice == null && $upperprice == null) {
            $foodList = mysqli_query($conn,
                "select *
                from food
                where (food.name like '%".$query."%' or food.category like '%".$query."%')
                order by food.".$sort.", food.name");
        } else if ($lowerprice == null) {
            $foodList = mysqli_query($conn,
                "select *
                from food
                where food.price <= '$upperprice' and (food.name like '%".$query."%' or food.category like '%".$query."%')
                order by food.".$sort.", food.name");
        } else if ($upperprice == null) {

            $upperprice = $lowerprice;
            $foodList = mysqli_query($conn,
                "select *
                from food
                where food.price >= '$lowerprice' and (food.name like '%".$query."%' or food.category like '%".$query."%')
                order by food.".$sort.", food.name");
        } else {
            $foodList = mysqli_query($conn,
                "select *
                from food
                where food.price between '$lowerprice' and '$upperprice' and (food.name like '%".$query."%' or food.category like '%".$query."%')
                order by food.".$sort.", food.name");
        }
    } else {
        $lowerprice = 0;
        $upperprice = 0;
        $foodList = mysqli_query($conn, "select * from food order by food.name");
    }
    
    $restList = mysqli_query($conn, "select * from shop order by shop.shop_id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/09146724eb.js"></script>
</head>

<body class="bg-custom-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-1">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">
                <img src="images/logo.png" width="100" alt="" class="d-inline-block align-middle mr-2">
                <span class="text-uppercase font-weight-bold fw-bold">Wendys</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link mx-2 text-white active" href="menu.php">
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
    
    <div class="container my-5 bg-light p-5">
        <div class="row mb-3">
            <div class="col">
                <h1 class="fw-bold">Wendys Menu</h1>
            </div>
        </div>

        <div class="filter">
            <form action="" method="get" class="d-grid">
                <div class="filter-row name-filter">
                    <h6>Search by food name or category</h6>
                    <input type="text" placeholder="i.e., burger, fastfood, etc." name="search" class="form-control" value="<?php if (isset($_GET['search'])) { echo $_GET['search']; }?>">
                    <h6 class="ms-auto">Sort by</h6>
                    <select class="form-select" aria-label="Default select example" name="sort-by">
                        <option value="name"
                            <?php
                                if (isset($_GET['search'])) {
                                    if ($_GET['sort-by'] == 'name')
                                    {
                                        echo 'selected';
                                    }
                                }
                            ?>
                        >Name</option>

                        <option value="price"
                            <?php
                                if (isset($_GET['search'])) {
                                    if ($_GET['sort-by'] == 'price')
                                    {
                                        echo 'selected';
                                    }
                                }
                            ?>
                        >Price</option>

                        <option value="category"
                            <?php
                                if (isset($_GET['search'])) {
                                    if ($_GET['sort-by'] == 'category')
                                    {
                                        echo 'selected';
                                    }
                                }
                            ?>
                        >Category</option>
                    </select>
                </div>
                <div class="filter-row price-filter">
                    <h6>Filter by price</h6>
                    <input type="number" placeholder="lower range" name="lower-price" class="form-control" min="0" value="<?php if (isset($_GET['lower-price'])) { echo $_GET['lower-price']; }?>">
                    <input type="number" placeholder="upper range" name="upper-price" class="form-control" min="0" value="<?php if (isset($_GET['upper-price'])) { echo $_GET['upper-price']; }?>">
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
            </form>
        </div>

        <div class="row mb-3">
            <div class="col">
                <ul class="nav nav-tabs">
                    <?php
                        foreach ($restList as $rest) {
                            echo '
                                <li class="nav-item shop-tab">
                                    <a class="nav-link" data-bs-toggle="tab" href="#restaurant'.$rest['shop_id'].'">'.$rest['name'].'</a>
                                </li>
                            ';
                        }
                    ?>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <?php
                if (mysqli_num_rows($restList) > 0) {
                    foreach ($restList as $rest) {
                        if ($lowerprice > $upperprice) {
                            echo '
                                <div class="tab-pane fade" id="restaurant'.$rest['shop_id'].'">
                                    <div class="row">
                                        <h1 class="mt-5">Enter a valid price range.</h1>
                                    </div>
                                </div>';
                        } else {
                            if ($rest['open']) {
                                echo '
                                    <div class="tab-pane fade" id="restaurant'.$rest['shop_id'].'">
                                        <div class="row menu">';
                                        if (mysqli_num_rows($foodList) > 0) {
                                            $count = 0;
                                            foreach ($foodList as $food) {
                                                if ($food['shop_id'] == $rest['shop_id'] && $food['availability'] == 1) {
                                                    $count++;
                                                }
                                            }
                                            
                                            if ($count > 0) {
                                                foreach ($foodList as $food) {
                                                    if ($food['shop_id'] == $rest['shop_id'] && $food['availability'] == 1) {
                                                        echo '
                                                        <div class="card menu-item">';
                                                            if (!$food['image']) {
                                                                echo '<img src="images/default.jpg">';
                                                            } else {
                                                                echo '<img src="data:image;base64,'.base64_encode($food['image']).'" alt="'.$food['name'].'">';
                                                            }
                                                        
                                                            echo '<div class="d-flex w-100">
                                                                <span>'.$food['name'].'</span>';
                                                                    $id = $food['food_id'];
                                                                    $offer = mysqli_query($conn, "select * from offer where offer.food_id = '$id'");

                                                                    if (mysqli_num_rows($offer) > 0) {
                                                                        foreach ($offer as $off) {
                                                                            echo '<span class="price ms-auto"><del><b>৳</b>'.$food['price'].'</del></span>';
                                                                            echo '<span class="price text-success"><b>&nbsp;৳</b>'.$off['offer_price'].'</span>';
                                                                        }
                                                                    } else {
                                                                        echo '<span class="price ms-auto"><b>৳</b>'.$food['price'].'</span>';
                                                                    }

                                                                echo '
                                                            </div>
                                                            <div class="category text-secondary me-auto">'.$food['category'].'</div>
                                                            <div class="btn btn-primary btn-sm mt-auto">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                Add to Cart
                                                            </div>
                                                        </div>
                                                    ';
                                                    } 
                                                }
                                            } else {
                                                echo '<h4 class="text-danger">Nothing to show.</h4>';
                                            }
                                        } else {
                                            echo '<h4 class="text-danger">Nothing to show.</h4>';
                                        }
                                        echo '</div>
                                    </div>
                                ';
                            } else {
                                echo '
                                    <div class="tab-pane fade mb-5" id="restaurant'.$rest['shop_id'].'">
                                        <h4>
                                            <i class="fas fa-exclamation-triangle text-danger"></i>
                                            SORRY! 
                                            <i class="text-bold text-info">'.$rest['name'].'</i>
                                            is closed now!
                                            <i class="fas fa-frown text-warning"></i>
                                            But we\'ll open soon!
                                            <i class="fas fa-laugh-beam text-success"></i>
                                        </h4>
                                        <div class="closed"></div>
                                    </div>
                                ';
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>

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
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                        <p>We serve the best food in town.</p>
                    </div>

                    <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                        <p><a href="#!" class="text-white">My Account</a></p>
                        <p><a href="#!" class="text-white">Help</a></p>
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
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

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>