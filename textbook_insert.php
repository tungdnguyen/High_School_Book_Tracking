<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $ISBN = $_POST['ISBN'];
    $BookName = $_POST['BName'];
    $RentCost = $_POST['RCost'];
    $Available = $_POST['Available'];
    $BookCost = $_POST['BCost'];
    $CourseID = $_POST['CID'];
    $Total = $_POST['Total'];
    
    $sql = "INSERT INTO TextBook (ISBN,BookName,RentalCost,Available,BookCost,CourseID,Total) VALUES ($ISBN,'$BookName',$RentCost,$Available,$BookCost,'$CourseID',$Available)";
        
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
<h1>Add Textbook Information</h1>
<form method = 'post' action = 'textbook_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
    <label><b>ISBN</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'ISBN'>
	<br />
	
	<label><b>Book Name</b></label><br />
    <input type="text" placeholder="Enter Title" name = 'BName'>
	<br />
	
    <label><b>Rental Cost</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'RCost'>
	<br />
	
    <label><b>In Stock</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'Available'>
	<br />
	
	<label><b>Book Cost</b></label><br />
    <input type="number" placeholder="Enter Number" name = 'BCost'>
	<br />
	
    <label><b>Course ID</b></label><br />
    <input type="text" placeholder="Enter ID" name = 'CID'>
	<br />
	

  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>