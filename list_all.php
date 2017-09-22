<?php
    session_start();
   include('connect.php');

    $sql = "SELECT Student.StudentID,StuLastName,StuFirstName,ParentID,FatherFirst,FatherLast,MotherFirst,MotherLast,SUM(RentalCost) AS total_rental_cost
        FROM Student LEFT OUTER JOIN Parent ON Parent.StudentID = Student.StudentID 
        LEFT OUTER JOIN ChecksOuts ON Student.StudentID = ChecksOuts.StudentID
        INNER JOIN TextBook ON TextBook.BookID = ChecksOuts.BookID
        WHERE DateReturned IS NULL
        GROUP BY Student.StudentID,StuLastName,StuFirstName,ParentID,FatherFirst,FatherLast,MotherFirst,MotherLast";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>StudentID</th>
    <th>StuLastName</th>
    <th>ParentID</th>
    <th>FatherFirst</th>
    <th>FatherLast</th>
    <th>MotherFirst</th>
    <th>MotherLast</th>
    <th>total_rental_cost</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['StuLastName'] . "</td>";
    echo "<td>" . $row['StuFirstName'] . "</td>";
    echo "<td>" . $row['ParentID'] . "</td>";
    echo "<td>" . $row['FatherFirst'] . "</td>";
    echo "<td>" . $row['FatherLast'] . "</td>";
    echo "<td>" . $row['MotherFirst'] . "</td>";
    echo "<td>" . $row['MotherLast'] . "</td>";
    echo "<td>" . $row['total_rental_cost'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

   
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
