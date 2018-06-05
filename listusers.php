<?php include_once('db.php') ?>
<html>

	<title>display data</title>
	<link rel="stylesheet" type="text/css" href="se.css">
	<body>
<form action="display.php" method="POST">
<p> enter the ID associated with username to get full information </p>
<input type="text" name="id"><br/>
<input type="submit" name="submit" value="show me">
</form>
</body>
</html>

  
  <?php
  
   
  if(isset($_POST['username'])){
	  echo $_POST['username'];
  }
  if(isset($_POST['email'])){
	  echo $_POST['email'];
  }if(isset($_POST['address'])){
	  echo $_POST['address'];
  }if(isset($_POST['number'])){
	  echo $_POST['number'];
  }if(isset($_POST['userbio'])){
	  echo $_POST['userbio'];
  }
  

  echo "<a href="#">view the data</a>";
  ?>
  
  <?php 
  
  echo "<ol>";
$sql="select id,username from users";
$qry=mysql_query($sql);
while($row=mysql_fetch_array($qry))
	echo"<li>ID:$row[0]</li>
         <li>userName:$row[1]</li>
		 <br/>";
		 echo "<ol>";
  
  
  
  
  ?>