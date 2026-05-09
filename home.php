<?php
include("includes/header.php");
session_start();
?>

<section class="hero">

    <div class="hero-content">

        <h1>Welcome to Sweet Treats Bakery</h1>

        <p>
            Fresh pastries, delicious cakes, and daily bakery specials made with love.
            Explore today's menu and share your feedback with us.
        </p>

        <a href="menu.php" class="btn">
            View Today's Menu
        </a>

    </div>

</section>

<section class="features">

    <div class="feature-box">
        <h2>Fresh Daily Menu</h2>
        <p>
            Our bakery menu is updated every day with new pastries, cakes,
            cookies, and special treats.
        </p>
    </div>

    <div class="feature-box">
        <h2>Customer Feedback</h2>
        <p>
            Customers can leave feedback about products and services
            to help us improve every day.
        </p>
    </div>

    <div class="feature-box">
        <h2>Admin Management</h2>
        <p>
            Bakery staff can securely log in to manage menu items
            and review customer feedback.
        </p>
    </div>

</section>

<section class="about">

    <h2>About Sweet Treats</h2>

    <p>
        Sweet Treats Bakery is a local bakery dedicated to providing fresh and high-quality
        baked products every day. Our goal is to create a simple and enjoyable online
        experience where customers can easily browse the menu and share their opinions.
    </p>

</section>

<?php
include("includes/footer.php");
?>