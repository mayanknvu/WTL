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

$sql = "INSERT INTO students (fname, lname, age, address, pincode) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<form action="result.php" method="post">
Last Name: <input type="text" name="lname" />
<input type="submit" />
</form>

<br> OR </br>

<form action="result2.php" method="post">
Enter age to delete: <input type="text" name="age" />
<input type="submit" />
</form>
</body>
</html>