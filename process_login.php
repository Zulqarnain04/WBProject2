<?php
session_start();
include('database/db_connect.php');

$username = $_POST['username'];
$password = md5($_POST['password']); // Same hash as in DB

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['full_name'] = $user['full_name'];

    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Login failed. Try again.'); window.location.href='login.php';</script>";
}
