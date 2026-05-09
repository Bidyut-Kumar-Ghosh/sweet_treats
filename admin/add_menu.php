<?php

include("../includes/auth.php");
include("../includes/db.php");

$message = "";

if(isset($_POST['add_menu'])){

    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);

    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $price = mysqli_real_escape_string($conn, $_POST['price']);

    if(!empty($item_name) && !empty($description) && !empty($price)){

        $query = "INSERT INTO menu_items(item_name, description, price)
                  VALUES('$item_name', '$description', '$price')";

        if(mysqli_query($conn, $query)){

            $message = "Menu item added successfully.";

        } else {

            $message = "Failed to add menu item.";

        }

    } else {

        $message = "All fields are required.";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Menu Item</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <header>

        <h1>Sweet Treats Bakery</h1>

        <p>Manage Daily Menu</p>

    </header>

    <nav>

        <a href="dashboard.php">Dashboard</a>

        <a href="add_menu.php">Add Menu</a>

        <a href="view_feedback.php">View Feedback</a>

        <a href="logout.php">Logout</a>

    </nav>

    <section class="feedback-section">

        <div class="container">

            <h1>Add Daily Menu Item</h1>

            <?php if($message != ""){ ?>

                <div class="message">

                    <?php echo $message; ?>

                </div>

            <?php } ?>

            <form method="POST" class="feedback-form">

                <input
                    type="text"
                    name="item_name"
                    placeholder="Enter Item Name"
                    required
                >

                <textarea
                    name="description"
                    rows="5"
                    placeholder="Enter Item Description"
                    required
                ></textarea>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    placeholder="Enter Item Price"
                    required
                >

                <button type="submit" name="add_menu">

                    Add Menu Item

                </button>

            </form>

        </div>

    </section>

    <!-- Manage Menu Items -->

    <section class="menu-section">

        <div class="container">

            <h1>Manage Menu Items</h1>

            <div class="table-container">

                <table>

                    <tr>

                        <th>ID</th>

                        <th>Item Name</th>

                        <th>Description</th>

                        <th>Price</th>

                        <th>Actions</th>

                    </tr>

                    <?php

                    $select = "SELECT * FROM menu_items ORDER BY id DESC";

                    $result = mysqli_query($conn, $select);

                    if(mysqli_num_rows($result) > 0){

                        while($row = mysqli_fetch_assoc($result)){

                    ?>

                    <tr>

                        <td>
                            <?php echo $row['id']; ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($row['item_name']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($row['description']); ?>
                        </td>

                        <td>
                            $<?php echo htmlspecialchars($row['price']); ?>
                        </td>

                        <td>

                            <a 
                                href="edit_menu.php?id=<?php echo $row['id']; ?>" 
                                class="btn"
                            >
                                Edit
                            </a>

                            <a 
                                href="delete_menu.php?id=<?php echo $row['id']; ?>" 
                                class="btn"
                                onclick="return confirm('Are you sure you want to delete this item?')"
                            >
                                Delete
                            </a>

                        </td>

                    </tr>

                    <?php

                        }

                    } else {

                        echo "
                        <tr>
                            <td colspan='5'>
                                No menu items available.
                            </td>
                        </tr>
                        ";

                    }

                    ?>

                </table>

            </div>

        </div>

    </section>

    <footer>

        <p>
            © <?php echo date("Y"); ?> Sweet Treats Bakery.
            All Rights Reserved.
        </p>

    </footer>

    <script src="../js/script.js"></script>

</body>
</html>