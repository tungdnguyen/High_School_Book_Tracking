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

  header('Location: StudentPage.php');
}
else{
?>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #ca0605;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body>
<center>
	<img src="IIT_Logo.png" alt="logoIIT" style="max-width:100%;max-height:100%;">
</center>

<h2>IIT High School Access Student Login</h2>

<form class="form-signin" method="POST">
  <div class="container">
    <?php if(isset($fmsg)){ ?><div> <?php echo $fmsg; ?> </div><?php } ?>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="inputPassword" name="password" required>
        
    <button type="submit">Login</button>
  </div>
</form>
<a href="./index.php">Back</a>
</body>
</html>

<?php } ?>