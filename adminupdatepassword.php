<?php

if (isset($_POST['submitted'])) {
    include('connect.php');
   $password = $_POST['password'];
   $old = $_POST['old'];
   $username = $_POST['username'];
   $sql = "UPDATE admin SET Password='$password' WHERE AdminName='$username'";


        
    if ($conn->query($sql) === TRUE) {
       echo "Password Changed !";
    } else {
       echo "Error: ";
    }



}

?>

<html>
<head>
<title>Change Password</title>
</head>
<body>
<h1>Change Password</h1>
    
<form method = 'post' action = 'adminupdatepassword.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
    <legend>Change password</legend>
    <lable>Username:<input type="text" name='username' /></lable>
    <lable>New Password:<input type="password" name='password' /></lable>
</fieldset>
<br />
<input type="submit" value="Submit" />
<div><a href='AdminPage.php'>Back</a></div></form>
</body>
</html>