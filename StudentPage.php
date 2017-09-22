<!DOCTYPE html>
<?php
    session_start();
    include('connect.php');
    $StudentID = $_SESSION['username'];

    echo "<h3>Your Courses</h3>";
    $sql = "SELECT CourseID FROM Takes WHERE StudentID=$StudentID";
	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>CourseID</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    echo "<h3>Your Parent</h3>";

	$sql = "SELECT ParentID, FatherFirst, FatherLast, MotherFirst,MotherLast FROM Parent WHERE StudentID=$StudentID";
	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>ParentID</th>
    <th>FatherFirst</th>
    <th>FatherLast</th>
    <th>MotherFirst</th>
	<th>MotherLast</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['ParentID'] . "</td>";
    echo "<td>" . $row['FatherFirst'] . "</td>";
    echo "<td>" . $row['FatherLast'] . "</td>";
    echo "<td>" . $row['MotherFirst'] . "</td>";
	echo "<td>" . $row['MotherLast'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    echo "<h3>Your Rental</h3>";
	$sql = "SELECT TextBook.BookID,DateOut,DueDate,RentalCost
    FROM ChecksOuts 
    INNER JOIN Textbook ON TextBook.BookID = ChecksOuts.BookID 
    WHERE StudentID=$StudentID
    AND DateReturned IS NULL";

	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>BookID</th>
    <th>DateOut</th>
    <th>DueDate</th>
    <th>RentalCost</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['DateOut'] . "</td>";
    echo "<td>" . $row['DueDate'] . "</td>";
    echo "<td>" . $row['RentalCost'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    $sql = "SELECT SUM(RentalCost) AS sum
        FROM ChecksOuts 
    INNER JOIN Textbook ON TextBook.BookID = ChecksOuts.BookID 
    WHERE StudentID=$StudentID
    AND DateReturned IS NULL";

    $result2 = $conn->query($sql);
    $check = $result2->fetch_assoc();
    echo "<h4> Total rental cost is: ". $check['sum'] . "</h4>";

    echo "<h3>Your Instructors </h3>";
	$sql = "SELECT InstructorID, InstFirstName,InstLastName FROM Instructor WHERE InstructorID IN (SELECT InstructorID FROM Student WHERE StudentID=$StudentID)";
	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>InstructorID</th>
    <th>InstFirstName</th>
    <th>InstLastName</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['InstructorID'] . "</td>";
    echo "<td>" . $row['InstFirstName'] . "</td>";
    echo "<td>" . $row['InstLastName'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
?>

<html>
<head>
<title>Insert Data</title>
</head>
<body>
<h1>Student Portal</h1>
    <ul>
        <li>
            <form action="./studentupdatepassword.php">
            <div class="container">       
            <button type="submit">Update Your Password</button>
        </div>
        </form>
        </li>
        <li>
            <form action="./logout.php">
            <div class="container">       
            <button type="submit">Log Out</button>
        </div>
        </form>
  </li> 
    </ul>
</body>
</html>