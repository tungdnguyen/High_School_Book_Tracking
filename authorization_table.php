<!DOCTYPE html>
<?php
   include('connect.php');

    $sql = "SELECT StudentID,StuFirstName,StuLastName,AccessLevel FROM Student";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>StudentID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Access Level</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['StuFirstName'] . "</td>";
    echo "<td>" . $row['StuLastName'] . "</td>";
    echo "<td>" . $row['AccessLevel'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";


    $sql = "SELECT InstructorID, InstFirstName,InstLastName,AccessLevel FROM Instructor";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>InstructorID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Access Level</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['InstructorID'] . "</td>";
    echo "<td>" . $row['InstFirstName'] . "</td>";
    echo "<td>" . $row['InstLastName'] . "</td>";
    echo "<td>" . $row['AccessLevel'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    $sql = "SELECT ParentID, FatherFirst,FatherLast,AccessLevel FROM Parent";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>ParentID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Access Level</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['ParentID'] . "</td>";
    echo "<td>" . $row['FatherFirst'] . "</td>";
    echo "<td>" . $row['FatherLast'] . "</td>";
    echo "<td>" . $row['AccessLevel'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    $sql = "SELECT ParentID, MotherFirst,MotherLast,AccessLevel FROM Parent";
    $result = $conn->query($sql);
   
    echo "<table border='1'>
    <tr>
    <th>ParentID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Access Level</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['ParentID'] . "</td>";
    echo "<td>" . $row['MotherFirst'] . "</td>";
    echo "<td>" . $row['MotherLast'] . "</td>";
    echo "<td>" . $row['AccessLevel'] . "</td>";
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