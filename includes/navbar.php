<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav>
    <a href="index.php">Dashboard</a>
    <?php if (isset($_SESSION['role'])): ?>
        <?php if ($_SESSION['role'] === 'admin'): ?>
            <a href="admin_panel.php">Admin Panel</a>
        <?php elseif ($_SESSION['role'] === 'student'): ?>
            <a href="apply.php">Apply</a>
        <?php elseif ($_SESSION['role'] === 'manager'): ?>
            <a href="review.php">Review</a>
        <?php endif; ?>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</nav>
