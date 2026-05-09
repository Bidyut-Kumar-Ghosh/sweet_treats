<?php

include("../includes/auth.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>Admin Dashboard</p>

    </header>

    <nav>

        <a href="../index.php">Home</a>

        <a href="../menu.php">Daily Menu</a>

        <a href="add_menu.php">Add Menu</a>

        <a href="view_feedback.php">View Feedback</a>

        <a href="logout.php">Logout</a>

    </nav>

    <section class="menu-section">

        <div class="container">

            <h1>Welcome Admin</h1>

            <div class="menu-card">

                <h2>
                    Hello,
                    <?php echo $_SESSION['admin']; ?>
                </h2>

                <p>
                    Use the dashboard to manage bakery menu items
                    and customer feedback.
                </p>

            </div>

        </div>

    </section>

    <footer>

        <p>
            © <?php echo date("Y"); ?> Sweet Treats Bakery.
            All Rights Reserved.
        </p>

    </footer>

</body>
<script src="js/script.js"></script>
</html>