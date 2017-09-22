
<!DOCTYPE html>
<?php
    session_start();
    include('connect.php');
    $IID = $_SESSION['username'];

    echo "<h3>Your Courses and Textbook</h3>";
    $sql = "SELECT Course.CourseID, CourseName, BookID,BookName FROM Course
     INNER JOIN TextBook ON TextBook.CourseID = Course.CourseID
     WHERE InstructorID=$IID";

	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>CourseID</th>
    <th>CourseName</th>
    <th>BookID</th>
    <th>BookName</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['CourseID'] . "</td>";
    echo "<td>" . $row['CourseName'] . "</td>";
    echo "<td>" . $row['BookID'] . "</td>";
    echo "<td>" . $row['BookName'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    echo "<h3>Your Students </h3>";

	$sql = "SELECT StudentID,StuFirstName,StuLastName FROM Student
	 WHERE InstructorID=$IID";
	$result = $conn->query($sql);
	echo "<table border='1'>
    <tr>
    <th>StudentID</th>
    <th>StuFirstName</th>
    <th>StuLastName</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['StudentID'] . "</td>";
    echo "<td>" . $row['StuFirstName'] . "</td>";
    echo "<td>" . $row['StuLastName'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

?>

<html>
<head>
<title>Instructor Portal</title>
</head>
<body>
<h1>Instructor Portal</h1>
    <ul>
        <li>
            <form action="./instructorupdatepassword.php">
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