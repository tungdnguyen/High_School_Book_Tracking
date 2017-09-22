<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $BookID = $_POST['BookID'];
    
    $sql = "SELECT * FROM TextBook WHERE BookID = $BookID";
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
   echo "Fetched data successfully\n";
}
?>

<html>
<head>
<title>Book Search</title>
</head>
<body>
<h1>Book Search By BookID</h1>
    
<form method = 'post' action = 'textbook_search_id.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
    <legend>Book Search</legend>
    <lable>BookID:<input type="number" name='BookID' /></lable>

</fieldset>
<br />
<input type="submit" value="Submit" />
</form>
</body>
</html>