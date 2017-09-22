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
<h2>Data List</h2>

<ul style="list-style-type:none">
  <li>
	<form action="./authorization_table.php">
	  <div class="container">		
		<button type="submit">Authorize Table</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./checkout_table.php">
	  <div class="container">		
		<button type="submit">Check Out Table</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./textbook_table.php">
	  <div class="container">		
		<button type="submit">TextBook Table</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./Search_BookName.php">
	  <div class="container">		
		<button type="submit">Search by Book Name</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./Search_CourseName.php">
	  <div class="container">		
		<button type="submit">Search by Course Name</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./Search_BookID.php">
	  <div class="container">		
		<button type="submit">Search by Book ID</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./Update.php">
	  <div class="container">		
		<button type="submit">Update</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./Delete.php">
	  <div class="container">		
		<button type="submit">Delete</button>
	  </div>
	</form>
  </li>
  <li>
	<form action="./AdminPage.php">
	  <div class="container">		
		<button type="submit">Back</button>
	  </div>
	</form>
  </li>
</ul>

</body>
</html>