<?php
// logout.php - destroys admin session and redirects safely
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login/admin page
header('Location: admin.php');
exit;