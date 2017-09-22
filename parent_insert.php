<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $ParentID = $_POST['PID'];
    $FFirst = $_POST['FFirst'];
    $FLast = $_POST['FLast'];
    $MFirst = $_POST['MFirst'];
    $MLast = $_POST['MLast'];
    $SID = $_POST['SID'];
    $sql = "INSERT INTO Parent (ParentID,FatherFirst,FatherLast,MotherFirst,MotherLast,StudentID) VALUES ($ParentID,'$FFirst','$FLast','$MFirst','$MLast',$SID)";
        
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
<h1>Add Parent(s) Information</h1>
    
<form method = 'post' action = 'parent_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
  	<label><b>Parent ID</b></label><br />
    <input type="text" placeholder="Enter ID" name = 'PID'>
	<br />
	
    <label><b>Student ID</b></label><br />
    <input type="text" placeholder="Enter ID" name = 'SID'>
	<br />
	
    <label><b>Father's First Name</b></label><br />
    <input type="text" placeholder="Enter First Name" name = 'FFirst'>
	<br />
	
	<label><b>Father's Last Name</b></label><br />
    <input type="text" placeholder="Enter Last Name" name = 'FLast'>
	<br />
	
    <label><b>Mother's First Name</b></label><br />
    <input type="text" placeholder="Enter First Name" name = 'MFirst'>
	<br />
	
	<label><b>Mother's Last Name</b></label><br />
    <input type="text" placeholder="Enter Last Name" name = 'MLast'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>