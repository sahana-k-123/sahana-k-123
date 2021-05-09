<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "sahanak@12345";
$dbname = "test";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname); 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, gender, phone FROM sahana";
$result = $conn->query($sql);
?>
<html>
<body>
<form align="center" action="registration.php" method="post">
<h3> To create a data </h3>
 <tr>
    <td><input align="center" type="submit" value="Create"></td>
   </tr>
</form>
<table align="center" border="1px" style="width:800px;line-height:40px";>
<tr>
<th colspan="6"><h2>Registration data</h2></th>
</tr>
<t>
<th> ID </th>
<th> Name </th>
<th> Email </th>
<th> Phone </th>
<th> Gender </th>
</t>

<?php
while($row = $result->fetch_assoc()) 
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['firstname']," ",$row['lastname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['gender']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<?php

$conn->close();
?>