<?php

include("includes/db.php");
include("includes/header.php");
session_start();

$message = "";

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    if(!empty($name) && !empty($email) && !empty($feedback)){

        $query = "INSERT INTO feedback(name, email, feedback)
                  VALUES('$name', '$email', '$feedback')";

        if(mysqli_query($conn, $query)){
            $message = "Feedback submitted successfully!";
        } else {
            $message = "Something went wrong!";
        }

    } else {
        $message = "All fields are required!";
    }
}

?>

<section class="feedback-section">

    <div class="container">

        <h1>Customer Feedback</h1>

        <p class="subtitle">
            Share your experience with Sweet Treats Bakery.
        </p>

        <?php if($message != ""){ ?>

            <div class="message">
                <?php echo $message; ?>
            </div>

        <?php } ?>

        <form method="POST" class="feedback-form">

            <input 
                type="text" 
                name="name" 
                placeholder="Enter Your Name"
                required
            >

            <input 
                type="email" 
                name="email" 
                placeholder="Enter Your Email"
                required
            >

            <textarea 
                name="feedback" 
                rows="6"
                placeholder="Write Your Feedback"
                required
            ></textarea>

            <button type="submit" name="submit">
                Submit Feedback
            </button>

        </form>

    </div>

</section>

<section class="feedback-display">

    <div class="container">

        <h2>Recent Customer Feedback</h2>

        <?php

        $selectQuery = "SELECT * FROM feedback ORDER BY id DESC";
        $result = mysqli_query($conn, $selectQuery);

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
                    Submitted Successfully
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
<script src="js/script.js"></script>
<?php
include("includes/footer.php");
?>