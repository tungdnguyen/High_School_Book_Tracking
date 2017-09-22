<!DOCTYPE html>
<?php
   include('connect.php');

    $sql = $sql  = 'SELECT TextBook.BookID, TextBook.ISBN,TextBook.BookName,TextBook.RentalCost,TextBook.BookCost,TextBook.CheckedOut,TextBook.Available,TextBook.Total, Course.CourseID,Course.CourseName FROM Course LEFT JOIN TextBook ON TextBook.CourseID = Course.CourseID';
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>BookID</th>
    <th>ISBN</th>
    <th>Book Name</th>
    <th>Rental Cost</th>
    <th>BookCost</th>
    <th>Checked Out</th>
    <th>Available</th>
    <th>Total Books</th>
    <th>CourseID</ths>
    <th>CourseName</th>

    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['ISBN'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['RentalCost'] . "</td>";
    echo "<td>" . $row['BookCost'] . "</td>";
    echo "<td>" . $row['CheckedOut'] . "</td>";
    echo "<td>" . $row['Available'] . "</td>";
    echo "<td>" . $row['Total'] . "</td>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "<td>" . $row['CourseName'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
   echo "Fetched data successfully\n";
   
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
<form>
	<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>
</html>





<!DOCTYPE html>
<?php
   include('connect.php');

    $sql = "SELECT * FROM TextBook";
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
<form>
	<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>
</html>