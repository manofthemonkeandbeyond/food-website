<?php
include 'db.php';

// Fetch Menu Items matching the SQL schema order
$sql = "SELECT title, url FROM menu_items ORDER BY sort_order ASC";
$result = $conn->query($sql);

// Plain text-only navigation structure
echo "<nav>";
echo "  <ul>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<a href='" . htmlspecialchars($row["url"]) . "'>";
        echo htmlspecialchars($row["title"]);
        echo "</a>";
        echo "</li>";
    }
} else {
    echo "<li>No menu items found.</li>";
}

echo "  </ul>";
echo "</nav>";

echo "<hr>";

// Main Page Content
echo "<main>";
echo "  <h1>Welcome</h1>";
echo "  <p>This is a barebones, text-only website layout recoded using the mysqli architecture.</p>";
echo "</main>";

$conn->close();
?>