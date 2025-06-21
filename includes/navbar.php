<nav style="text-align:center; background:#f0f0f0; padding:10px;">
    <a href="index.php">Dashboard</a>

    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'student'): ?>
        <a href="apply.php">Apply for Room</a>
        <a href="status.php">My Application</a>
    <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'manager'): ?>
        <a href="review.php">Review Applications</a>
    <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <a href="admin_panel.php">Admin Panel</a>
    <?php endif; ?>

    <?php if (isset($_SESSION['role'])): ?>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</nav>
