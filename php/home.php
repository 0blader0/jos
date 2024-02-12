<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>JOS - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Vitej, <?php echo $_SESSION['name']; ?></h1>
     <a href="php/logout.php">Odhlasit se</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>