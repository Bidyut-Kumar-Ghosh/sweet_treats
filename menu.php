<?php

session_start();

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Menu - Sweet Treats Bakery</title>

    <!-- CSS -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <!-- ================= HEADER ================= -->

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>
            Daily Bakery Menu
        </p>

    </header>

    <!-- ================= NAVIGATION ================= -->

    <nav>

        <a href="index.php">Home</a>

        <a href="menu.php">Daily Menu</a>

        <a href="feedback.php">Feedback</a>

        <?php if(isset($_SESSION['admin'])){ ?>

            <a href="admin/dashboard.php">
                Dashboard
            </a>

            <a href="admin/logout.php">
                Logout
            </a>

        <?php } else { ?>

            <a href="login.php">
                Admin Login
            </a>

        <?php } ?>

    </nav>

    <!-- ================= MENU SECTION ================= -->

    <section class="menu-section">

        <div class="container">

            <h1>Today's Available Items</h1>

            <!-- Search Box -->

            <input
                type="text"
                id="menuSearch"
                class="search-box"
                placeholder="Search bakery items..."
            >

            <?php

            $query = "SELECT * FROM menu_items ORDER BY id DESC";

            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

            ?>

                <!-- Menu Card -->

                <div class="menu-card">

                    <h2>

                        <i class="fa-solid fa-cake-candles"></i>

                        <?php echo htmlspecialchars($row['item_name']); ?>

                    </h2>

                    <p>

                        <?php echo htmlspecialchars($row['description']); ?>

                    </p>

                    <h3>

                        $<?php echo htmlspecialchars($row['price']); ?>

                    </h3>

                </div>

            <?php

                }

            } else {

                echo "

                <div class='menu-card'>

                    <h2>No Menu Items Available</h2>

                    <p>
                        The bakery menu has not been updated yet.
                    </p>

                </div>

                ";

            }

            ?>

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