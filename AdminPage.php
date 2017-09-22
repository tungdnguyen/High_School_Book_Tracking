<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<style>

button {
    background-color: #ca0605;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
</style>

<body>
<h2>IIT High School Admin Page</h2>

<ul style="list-style-type:none">
  <li>
	<form action="./checksout_insert.php">
	  <div class="container">		
		<button type="submit">Check Out</button>
	  </div>
	</form>
  </li>
    <li>
	<form action="./return_book.php">
	  <div class="container">		
		<button type="submit">Return Book</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./course_insert.php">
	  <div class="container">		
		<button type="submit">Courses Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./instructor_insert.php">
	  <div class="container">		
		<button type="submit">Instructor Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./student_insert.php">
	  <div class="container">		
		<button type="submit">Student Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./parent_insert.php">
	  <div class="container">		
		<button type="submit">Parent Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./takes_insert.php">
	  <div class="container">		
		<button type="submit">Takes Course Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./textbook_insert.php">
	  <div class="container">		
		<button type="submit">Textbook Insert</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./DataOutputs.php">
	  <div class="container">		
		<button type="submit">Check database</button>
	  </div>
	</form>
  </li>
    <li>
	<form action="./adminupdatepassword.php">
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

