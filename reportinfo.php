<html>
<body>
<center>
<?php
require('connect.php');

 if(isset($_POST['info']))
{
    
 
$sql = "SELECT vendors_name FROM vendor_info" ;

$result = mysqli_query($conn,$sql)or die(mysqli_error());

echo "<table border=1 cellspacing=0 cellpading=0>";
echo "<tr><th>Vendors name</th></tr>";

while($row = mysqli_fetch_array($result)) {
  
	 $vendors_name = $row['vendors_name'];
	 
    echo "<tr><td style='width: 20%;'>".$vendors_name."</td></tr>";
} 

echo "</table>";
}
mysqli_close($conn);
?>
<form method="POST" action="login.php">
<input type="submit" name="button1"  value="EXIT">
</center>
</body>
</html>