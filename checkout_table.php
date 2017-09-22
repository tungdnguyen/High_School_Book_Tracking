<!DOCTYPE html>
<?php
   include('connect.php');

    $sql = "SELECT S.StudentID, S.StuFirstName, S.StuLastName, T.BookName, C.DateOut, C.DueDate FROM Student as S, TextBook as T, ChecksOuts as C WHERE S.StudentID = C.StudentID AND T.BookID = C.BookID";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>StudentID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Book Name</th>
    <th>Date Out</th>
    <th>Due Date</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['StuFirstName'] . "</td>";
    echo "<td>" . $row['StuLastName'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "<td>" . $row['DateOut'] . "</td>";
    echo "<td>" . $row['DueDate'] . "</td>";
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