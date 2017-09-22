<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $ID = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sql = "INSERT INTO Instructor ( InstFirstName,InstLastName) VALUES ('$fname','$lname')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<style>
form {
    border: 3px solid #ca0605;
}
.container {
    padding: 16px;
}
button {
    background-color: #ca0605;
    color: white;
    padding: 14px 20px;
    align: center;
    border: none;
    cursor: pointer;
    width: 50%;
}
</style>
<html>
<head>
<title>Insert Data</title>
</head>
<body>
<h1>Add New Instructor</h1>

<form method = 'post' action = 'instructor_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container"> 
    <label><b>First Name</b></label><br />
    <input type="text" placeholder="Enter First Name" name = 'fname'>
	<br />
	
	<label><b>Last Name</b></label><br />
    <input type="text" placeholder="Enter Last Name" name = 'lname'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>