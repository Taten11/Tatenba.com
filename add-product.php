<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $image = $_FILES['product_image']['name'];
    $target = "assets/images/" . basename($image);

    // Upload the image
    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
        $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
        if ($conn->query($sql) === TRUE) {
            echo "Product added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

$conn->close();
?>
