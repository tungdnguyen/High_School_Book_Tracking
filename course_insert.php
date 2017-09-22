<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $CID = $_POST['CID'];
    $CName = $_POST['CName'];
    $TotalStudents = $_POST['TotalStudents'];
    $InstructorID = $_POST['InstructorID'];
    $sql = "INSERT INTO Course (CourseName,CourseID,TotStudents,InstructorID) VALUES ('$CName','$CID',$TotalStudents,$InstructorID)";
        
    if ($conn->query($sql) === TRUE) {
        echo "New class added successfully";
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
<h1>Add New Course</h1>
    
<form method = 'post' action = 'course_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
	<label><b>Course ID</b></label><br />
    <input type="text" placeholder="Enter ID" name = 'CID'>
	<br />

    <label><b>Course Name</b></label><br />
    <input type="Name" placeholder="Enter Name" name = 'CName'>
	<br />
	
	<label><b>Instructor ID</b></label><br />
    <input type="number" placeholder="Enter ID" name = 'InstructorID'>
	<br />
	
	<label><b>Total Students</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'TotalStudents'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>

   
</body>
</html>