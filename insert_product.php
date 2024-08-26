<?php
include 'db.php'; // Include your database connection

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $description, $price, $image);

// Example data
$name = "Product A";
$description = "A high-quality product.";
$price = 29.99;
$image = "product_a.jpg";
$stmt->execute();

$name = "Product B";
$description = "Another great product.";
$price = 39.99;
$image = "product_b.jpg";
$stmt->execute();

echo "New products added successfully.";

$stmt->close();
$conn->close();
?>
