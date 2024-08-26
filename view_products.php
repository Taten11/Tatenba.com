<?php
include 'db.php'; // Include your database connection

$sql = "SELECT id, name, description, price, image FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "ID: " . $row["id"]. "<br>";
        echo "Name: " . $row["name"]. "<br>";
        echo "Description: " . $row["description"]. "<br>";
        echo "Price: $" . $row["price"]. "<br>";
        echo "<img src='assets/images/" . $row["image"] . "' alt='" . $row["name"] . "'><br>";
        echo "</div><hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
