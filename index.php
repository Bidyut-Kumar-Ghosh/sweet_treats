<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sweet Treats Bakery</title>

    <!-- Main CSS -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- ================= HEADER ================= -->

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>
            Fresh Cakes, Pastries & Desserts Every Day
        </p>

    </header>

    <!-- ================= RESPONSIVE NAVBAR ================= -->

    <nav class="navbar">

        <!-- Logo -->

        <div class="logo">

            Sweet Treats

        </div>

        <!-- Hamburger Menu -->

        <div class="menu-toggle" id="mobile-menu">

            <i class="fa-solid fa-bars"></i>

        </div>

        <!-- Navigation Links -->

        <ul class="nav-list" id="nav-list">

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>

            <li>
                <a href="menu.php">
                    Daily Menu
                </a>
            </li>

            <li>
                <a href="feedback.php">
                    Feedback
                </a>
            </li>

            <?php if(isset($_SESSION['admin'])){ ?>

                <li>
                    <a href="admin/dashboard.php">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="admin/logout.php">
                        Logout
                    </a>
                </li>

            <?php } else { ?>

                <li>
                    <a href="login.php">
                        Admin Login
                    </a>
                </li>

            <?php } ?>

        </ul>

    </nav>

    <!-- ================= SLIDER ================= -->

    <section class="slider">

        <!-- Slide 1 -->

        <div class="slides fade active-slide">

            <div class="overlay"></div>

            <img
                src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1974&auto=format&fit=crop"
                alt="Bakery Image"
            >

            <div class="slide-content">

                <h1>Fresh Bakery Every Morning</h1>

                <p>
                    Enjoy delicious pastries, cakes and desserts prepared fresh daily.
                </p>

                <a href="menu.php" class="btn">

                    View Daily Menu

                </a>

            </div>

        </div>

        <!-- Slide 2 -->

        <div class="slides fade">

            <div class="overlay"></div>

            <img
                src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=1974&auto=format&fit=crop"
                alt="Cake Image"
            >

            <div class="slide-content">

                <h1>Premium Cakes & Pastries</h1>

                <p>
                    Taste handcrafted bakery products made with quality ingredients.
                </p>

                <a href="feedback.php" class="btn">

                    Leave Feedback

                </a>

            </div>

        </div>

        <!-- Slide 3 -->

        <div class="slides fade">

            <div class="overlay"></div>

            <img
                src="https://images.unsplash.com/photo-1486427944299-d1955d23e34d?q=80&w=1974&auto=format&fit=crop"
                alt="Dessert Image"
            >

            <div class="slide-content">

                <h1>Daily Special Bakery Menu</h1>

                <p>
                    Browse our updated bakery menu and enjoy sweet treats every day.
                </p>

                <?php if(isset($_SESSION['admin'])){ ?>

                    <a href="admin/dashboard.php" class="btn">

                        Go To Dashboard

                    </a>

                <?php } else { ?>

                    <a href="login.php" class="btn">

                        Admin Login

                    </a>

                <?php } ?>

            </div>

        </div>

        <!-- Slider Controls -->

        <a class="prev" onclick="changeSlide(-1)">
            ❮
        </a>

        <a class="next" onclick="changeSlide(1)">
            ❯
        </a>

    </section>

    <!-- ================= FEATURES ================= -->

    <section class="features">

        <div class="feature-box">

            <i class="fa-solid fa-cake-candles"></i>

            <h2>Fresh Daily Menu</h2>

            <p>
                Browse updated bakery items every day including cakes,
                pastries, cupcakes, and desserts.
            </p>

        </div>

        <div class="feature-box">

            <i class="fa-solid fa-comments"></i>

            <h2>Customer Feedback</h2>

            <p>
                Customers can share feedback and experiences
                about bakery products and services.
            </p>

        </div>

        <div class="feature-box">

            <i class="fa-solid fa-user-lock"></i>

            <h2>Admin Management</h2>

            <p>
                Bakery staff can securely manage menu items
                and customer feedback through the admin panel.
            </p>

        </div>

    </section>

    <!-- ================= ABOUT ================= -->

    <section class="about">

        <div class="container">

            <h2>About Sweet Treats Bakery</h2>

            <p>
                Sweet Treats Bakery is a local bakery committed to providing fresh,
                high-quality baked products every day. Customers can browse daily menu
                items, explore bakery specials, and share feedback through our dynamic
                website platform.
            </p>

        </div>

    </section>

    <!-- ================= FOOTER ================= -->

    <footer>

        <p>
            © <?php echo date("Y"); ?> Sweet Treats Bakery.
            All Rights Reserved.
        </p>

    </footer>

    <!-- ================= JAVASCRIPT ================= -->

    <script src="js/script.js"></script>

</body>
</html>