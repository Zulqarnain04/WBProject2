//user navigation based of role

<?php
if (!isset($_SESSION)) session_start();
?>
<nav>
  <ul>
    <li><a href="/dashboard.php">Dashboard</a></li>
    
    //student's nav
    <?php if ($_SESSION['role'] == 'student'): ?>
      <li><a href="/student/apply.php">Apply</a></li>
      <li><a href="/student/status.php">Status</a></li>
    
    //manager nav
    <?php elseif ($_SESSION['role'] == 'manager'): ?>
      <li><a href="/manager/review_applications.php">Review</a></li>
      <li><a href="/manager/sort_reports.php">Reports</a></li>

    //admin nav
    <?php elseif ($_SESSION['role'] == 'admin'): ?>
      <li><a href="/admin/manage_users.php">Manage Users</a></li>
    <?php endif; ?>

    //logout 
    <li><a href="/logout.php">Logout</a></li>
  </ul>
</nav>
