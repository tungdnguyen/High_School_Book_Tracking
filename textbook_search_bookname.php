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
   echo "Fetched data successfully\n";
}
?>

<html>
<head>
<title>Book Search</title>
</head>
<body>
<h1>Book Search</h1>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>