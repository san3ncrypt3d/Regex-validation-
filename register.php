<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
  <link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div><div class="input-group">
  	  <label>address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
	<div class="input-group">
  	  <label>number</label>
  	  <input type="text" name="number" value="<?php echo $number; ?>">
  	</div>
	<div class="input-group">
  	  <label>Userbio</label>
  	  <input type="text" name="userbio" value="<?php echo $userbio; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">submit</button>
  	</div>
  	
  </form>
</body>
</html>