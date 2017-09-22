<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $BookID = $_POST['BookID'];
    
    $sql = "SELECT TextBook.BookID,BookName,CourseID,CheckoutID FROM ChecksOuts INNER JOIN TextBook ON TextBook.BookID = ChecksOuts.BookID WHERE TextBook.BookID = $BookID";
    $result = $conn->query($sql);
    
    echo "<table border='1'>
    <tr>
    <th>BookID</th>
    <th>BookName</th>
    <th>CourseID</th>
    <th>CheckoutID</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "<td>" . $row['CheckoutID'] . "</td>";

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
<h1>Book Search by Book ID</h1>
    
<form method = 'post' action = 'Search_BookID.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
	<label><b>Book ID</b></label><br />
    <input type="number" placeholder="Enter ID" name = 'BookID'>
	<br />
  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>

</body>
</html>