<html>
<body style="background-color:powderblue;">
<h2> Mayank Bajaj - R17CS230 </h2> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE from students where age='$_POST[age]'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
echo "<br><br>";

$sql2 = "SELECT * from students";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
  echo "<table border='1' border-collapse: collapse>
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Age</th>
	<th>Address</th>
	<th>Pincode</th>
	</tr>"; 
while($row = $result->fetch_assoc()) 
{
	echo "<tr>";
	echo "<td>" . $row['fname'] . "</td>";
	echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['age'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['pincode'] . "</td>";
	echo "</tr>";
}
echo "</table>";
} 
else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>