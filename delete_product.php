<?php
include 'db.php'; // Include your database connection

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
$stmt->bind_param("i", $id);

// Example deletion
$id = 1; // Product ID to delete
$stmt->execute();

echo "Product deleted successfully.";

$stmt->close();
$conn->close();
?>
