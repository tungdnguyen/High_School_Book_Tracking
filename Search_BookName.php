<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $BookName = $_POST['BookName'];
    
    $sql = "SELECT * FROM TextBook WHERE BookName = '$BookName'";
    $result = $conn->query($sql);
    
    echo "<table border='1'>
    <tr>
    <th>BookID</th>
    <th>ISBN</th>
    <th>Book Name</th>
    <th>Rental Cost</th>
    <th>Checked Out</th>
    <th>Available</th>
    <th>BookCost</th>
    <th>CourseID</th>
    <th>Total Books</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['ISBN'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['RentalCost'] . "</td>";
    echo "<td>" . $row['CheckedOut'] . "</td>";
    echo "<td>" . $row['Available'] . "</td>";
    echo "<td>" . $row['BookCost'] . "</td>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "<td>" . $row['Total'] . "</td>";
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
<h1>Book Search by Book Name</h1>
    
<form method = 'post' action = 'Search_BookName.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
	<label><b>Book Name</b></label><br />
    <input type="text" placeholder="Enter Book" name = 'BookName'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>

</body>
</html>