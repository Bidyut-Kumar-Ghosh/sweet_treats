<?php

include("../includes/auth.php");
include("../includes/db.php");

$id = $_GET['id'];

$query = "SELECT * FROM menu_items WHERE id='$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $update = "UPDATE menu_items 
               SET item_name='$item_name',
                   description='$description',
                   price='$price'
               WHERE id='$id'";

    mysqli_query($conn, $update);

    header("Location: add_menu.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Menu</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header>

    <h1>Edit Menu Item</h1>

</header>

<section class="feedback-section">

    <div class="container">

        <form method="POST" class="feedback-form">

            <input
                type="text"
                name="item_name"
                value="<?php echo $row['item_name']; ?>"
                required
            >

            <textarea
                name="description"
                rows="5"
                required
            ><?php echo $row['description']; ?></textarea>

            <input
                type="number"
                step="0.01"
                name="price"
                value="<?php echo $row['price']; ?>"
                required
            >

            <button type="submit" name="update">

                Update Menu Item

            </button>

        </form>

    </div>

</section>

</body>
</html>