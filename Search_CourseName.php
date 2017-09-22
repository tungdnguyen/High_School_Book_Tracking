<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $CourseID = $_POST['CourseID'];
    
    $sql = "SELECT TextBook.CourseID,ChecksOuts.BookID,BookName,StudentID FROM TextBook INNER JOIN ChecksOuts ON TextBook.BookID = ChecksOuts.BookID WHERE TextBook.CourseID = '$CourseID'";
    $result = $conn->query($sql);
    
    echo "<table border='1'>
    <tr>
    <th>CourseID</th>
    <th>BookID</th>
    <th>Book Name</th>
    <th>Student ID</th>

    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
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
<title>Book Search</title>
</head>
<body>
<h1>Book Checked Out Search by Course ID</h1>
    
<form method = 'post' action = 'Search_CourseName.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
	<label><b>Course ID</b></label><br />
    <input type="text" placeholder="Enter ID" name = 'CourseID'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>

</body>
</html>