<?php

session_start();

include("includes/db.php");

$message = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM admins 
              WHERE username='$username' 
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){

        $_SESSION['admin'] = $username;

        header("Location: admin/dashboard.php");

        exit();

    } else {

        $message = "Invalid Username or Password";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Sweet Treats Bakery</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>Admin Login</p>

    </header>

    <nav>

        <a href="index.php">Home</a>

        <a href="menu.php">Daily Menu</a>

        <a href="feedback.php">Feedback</a>

        <a href="login.php">Admin Login</a>

    </nav>

    <section class="feedback-section">

        <div class="container">

            <h1>Admin Login</h1>

            <?php if($message != ""){ ?>

                <div class="message">

                    <?php echo $message; ?>

                </div>

            <?php } ?>

            <form method="POST" class="feedback-form">

                <input 
                    type="text" 
                    name="username" 
                    placeholder="Enter Username"
                    required
                >

                <input 
                    type="password" 
                    name="password" 
                    placeholder="Enter Password"
                    required
                >

                <button type="submit" name="login">

                    Login

                </button>

            </form>

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