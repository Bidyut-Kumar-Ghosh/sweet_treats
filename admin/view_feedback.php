<?php

include("../includes/auth.php");
include("../includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Feedback</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>Customer Feedback</p>

    </header>

    <nav>

        <a href="dashboard.php">Dashboard</a>

        <a href="add_menu.php">Add Menu</a>

        <a href="view_feedback.php">View Feedback</a>

        <a href="logout.php">Logout</a>

    </nav>

    <section class="feedback-display">

        <div class="container">

            <h2>Recent Customer Feedback</h2>

            <?php

            $query = "SELECT * FROM feedback ORDER BY id DESC";

            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

            ?>

                <div class="feedback-card">

                    <h3>
                        <?php echo htmlspecialchars($row['name']); ?>
                    </h3>

                    <p>
                        <?php echo htmlspecialchars($row['feedback']); ?>
                    </p>

                    <small>
                        Customer Email Hidden
                    </small>

                </div>

            <?php

                }

            } else {

                echo "<p>No feedback available.</p>";

            }

            ?>

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