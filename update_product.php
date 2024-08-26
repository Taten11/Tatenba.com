<?php
include 'db.php'; // Include your database connection

// Prepare and bind
$stmt = $conn->prepare("UPDATE products SET price = ? WHERE id = ?");
$stmt->bind_param("di", $price, $id);

// Example update
$price = 25.99; // New price
$id = 1; // Product ID to update
$stmt->execute();

echo "Product updated successfully.";

$stmt->close();
$conn->close();
?>
