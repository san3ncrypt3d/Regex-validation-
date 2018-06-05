<?php include_once('db.php') ?>

  <html>
  <body>
  <link rel="stylesheet" type="text/css" href="display.css">
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
//$username=$_POST['username'];
//$email=$_POST['email'];
//$address=$_POST['address'];
//$number=$_POST['number'];
//$userbio=$_POST['userbio'];

echo "<a href="#">view the data</a>";
 ?>
 
<?php
$id= $_POST['id'];


echo "<ol>";
$sql="SELECT * FROM users WHERE id='$id' LIMIT 1";
$qry=mysql_query($sql);
while($row=mysql_fetch_array($qry))
	echo"<li>id:$row[0]</li>
		<li>userName:$row[1]</li>
         <li>email:$row[2]</li>
		 <li>address:$row[3]</li>
		 <li>phone:$row[4]</li>
		 <li>userbio:$row[5]</li>
		 <br/>";
		 echo "<ol>";
		 ?>