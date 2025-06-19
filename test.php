<?php 
include('includes/auth_check.php');        // Checks login session
include('includes/header.php');            // Top HTML and styles
include('includes/navbar.php');            // Navigation bar
include('database/db_connect.php');        // Database connection
?>

<h2 style="text-align:center; margin-top:30px;">Test Page Loaded</h2>
<p style="text-align:center;">If you're seeing this, your includes are working!</p>

<?php
// Test DB connection by fetching something simple (optional)
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);

echo "<div style='text-align:center; margin-top:20px;'>";
if ($result) {
    echo "<strong>Database connected successfully. Tables found:</strong><br><br>";
    while ($row = mysqli_fetch_row($result)) {
        echo "🗃️ " . $row[0] . "<br>";
    }
} else {
    echo "❌ Failed to fetch tables. Check your database connection.";
}
echo "</div>";
?>

<?php include('includes/footer.php'); ?>

