<?php



// Destroy the session
session_destroy();

// Redirect to the login page or any other desired location
header("Location: login.php"); // Update with the actual login page URL
exit;
?>
