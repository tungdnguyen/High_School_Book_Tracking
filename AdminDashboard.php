<!DOCTYPE html>
<?php 
session_start();
include('connect.php');
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $query = "SELECT * FROM admin WHERE AdminName='$username'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row=mysqli_fetch_array($result,MYSQLI_BOTH);
  echo "Hi," . $row[0] . "";
  echo "<div><a href='logout.php'>Logout</a></div>";
  echo "<div><a href='adminupdatepassword.php'>Change Password</a></div>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO YOUR HOME PAGE</title>
</head>
<body>
	<p>Choose what do you want to do here</p>
</body>
</html>