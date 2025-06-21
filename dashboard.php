<?php include('includes/auth_check.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<h2 style="text-align:center;">Welcome, <?= $_SESSION['full_name'] ?>!</h2>
<p style="text-align:center;">You are logged in as <strong><?= $_SESSION['role'] ?></strong>.</p>

<?php include('includes/footer.php'); ?>
