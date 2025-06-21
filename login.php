<?php include('includes/header.php'); ?>

<h2 style="text-align:center;">Login</h2>
<form action="process_login.php" method="POST" style="max-width:400px;margin:auto;">
  <label>Username:</label>
  <input type="text" name="username" required><br><br>
  
  <label>Password:</label>
  <input type="password" name="password" required><br><br>

  <button type="submit">Login</button>
</form>

<?php include('includes/footer.php'); ?>
