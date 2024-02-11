<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>JOS</h1>
	<p>Jsi přihlášen.</p>
	<a href="logout.php">odhlásit</a>
</body>
</html>