<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $SFirst = $_POST['SFirst'];
    $SLast = $_POST['SLast'];
    $TotCourses = $_POST['TotCourses'];
    $InstID = $_POST['InstID'];
    $sql = "INSERT INTO Student (StuFirstName,StuLastName,TotCourses,InstructorID) VALUES ('$SFirst','$SLast',$TotCourses,$InstID)";
        
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
<h1>Add Student Information</h1>
<form method = 'post' action = 'student_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
    <label><b>First Name</b></label><br />
    <input type="text" placeholder="Enter First Name" name = 'SFirst'>
	<br />
	
	<label><b>Last Name</b></label><br />
    <input type="text" placeholder="Enter Last Name" name = 'SLast'>
	<br />
	
  	<label><b>Total Courses</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'TotCourses'>
	<br />
	
	<label><b>Instructor ID</b></label><br />
    <input type="number" placeholder="Enter ID" name = 'InstID'>
	<br />


  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>