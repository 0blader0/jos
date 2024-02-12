<!DOCTYPE html>
<html>
<head>
	<title>Registrace</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="php/signup-check.php" method="post">
     	<h2>Registrace</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Jmeno</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Zadej krestni jmeno"><br>
          <?php }?>

          <label>Prihlasovaci jmeno</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Zadej prihlasovaci jmeno"><br>
          <?php }?>


     	<label>Heslo</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Zadej heslo"><br>

          <label>Heslo znovu</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Zadej heslo znovu."><br>

     	<button type="submit">Zalozit ucet</button>
          <a href="index.php" class="ca">Jiz mas ucet?</a>
     </form>
</body>
</html>