<!DOCTYPE html>
<?php

if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $Table = $_POST['Table'];
    $Column = $_POST['Column'];
    $Attribute = $_POST['Attribute'];

    $sql = "DELETE FROM $Table WHERE $Column = $Attribute";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }


}

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
<head>
<title>Delete</title>
</head>
<body>
<h1>Delete</h1>
<form method = 'post' action = 'delete.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
  <div class="container">
	<label><b>Table Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Table'>
	<br />
	
	<label><b>Column Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Column'>
	<br />
	

	<label><b>Attribute Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Attribute'>
	<br />

  </div> 
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>

</body>
</html>