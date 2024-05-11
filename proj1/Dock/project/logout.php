<?php
session_start();
session_destroy();
session_unset();
header('Location: index.php'); // Redirect to another page after clearing the session
?>
