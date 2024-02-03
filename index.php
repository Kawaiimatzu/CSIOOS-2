<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    
    <section class="navbar">
        <div class="container">

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="login.php">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.php">
            <div class="box-3 float-container">
                <img src="images/coke.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Coca-cola</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/cookiesNcream.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Cookies & Cream</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/cafelatte.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Cafe Latte</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/coke.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Coca-cola</h4>
                    <p class="food-price">₱25</p>
                    <p class="food-detail">
                    Coca Cola made with love.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pepsi.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pepsi</h4>
                    <p class="food-price">₱25</p>
                    <p class="food-detail">
                    Pepsi made with care.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/wintermelon.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Wintermelon</h4>
                    <p class="food-price">₱30</p>
                    <p class="food-detail">
                    Its fresh and leafy flavour makes this bubble tea drink extremely refreshing.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cookiesNcream.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cookies & Cream</h4>
                    <p class="food-price">₱30</p>
                    <p class="food-detail">
                    This wonderful tea blends the flavors of maple, honey, and chocolate.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cafelatte.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cafe Latte</h4>
                    <p class="food-price">₱20</p>
                    <p class="food-detail">
                    A caffe latte has a mildly sweet, creamy flavor.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mixedberries.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mixed Berries</h4>
                    <p class="food-price">₱15</p>
                    <p class="food-detail">
                    Made with shadow.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>

</body>
</html>