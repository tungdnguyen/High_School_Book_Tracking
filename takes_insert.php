<!DOCTYPE html>
<?php

if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $StudentID = $_POST['SID'];
    $CourseID = $_POST['CID'];

    $sql = "INSERT INTO Takes (StudentID,CourseID) VALUES ($StudentID,'$CourseID')";
        
    if ($conn->query($sql) === TRUE) {
        echo "Student Take Course";
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
<h1>Add Enrollment Information</h1>
<form method = 'post' action = 'takes_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>	
  <div class="container">
  	<label><b>Student ID</b></label><br />
    <input type="number" placeholder="Enter StudentID" name = 'SID'>
	<br />
  
    <label><b>Course ID</b></label><br />
    <input type="text" placeholder="Enter CourseID" name = 'CID'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>

</body>
</html>