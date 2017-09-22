
<?php 
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM student WHERE StudentID='$username' and password='$password'";
 
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);
  if ($count == 1){
  $_SESSION['username'] = $username;
  }
  else{
    $fmsg = "Invalid Login Credentials.";
    }
}
if (isset($_SESSION['username'])){
  $row=mysqli_fetch_array($result,MYSQLI_BOTH);
  echo "Hi," . $row[2] . "";
  echo "<div>This is your student portal</div>";
  echo "<div><a href='studentdashboard.php'>Dashboard</a></div>";
  echo "<div><a href='logout.php'>Logout</a></div>";
  echo "<div><a href='studentupdatepassword.php'>Change Password</a></div>";
}
else{
?>
<html>
<head>
   <title>Student Login</title>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Student Login</h2>
        <div class="input-group">
     <input type="text" name="username"  placeholder="Username" required>
   </div>
        <input type="password" name="password" id="inputPassword" placeholder="Password" required>
        <div><button type="submit">Login</button></div>
      </form>
</div>
 
</body>
 
</html>
<?php } ?>