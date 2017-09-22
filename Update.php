<!DOCTYPE html>
<?php
if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $Table = $_POST['Table'];
    $Column = $_POST['Column'];
    $Update = $_POST['Update'];
    $Attribute = $_POST['Attribute'];
    $Val = $_POST['Val'];
    $sql = "UPDATE $Table SET $Column = '$Update' WHERE $Attribute = $Val";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
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
<title>Update</title>
</head>
<body>
<h1>Update</h1>
<form method = 'post' action = 'update.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
  <div class="container">
	<label><b>Table Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Table'>
	<br />
	
	<label><b>Column Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Column'>
	<br />
	
	<label><b>Updated Value</b></label><br />
    <input type="text" placeholder="Enter Value" name = 'Update'>
	<br />
	
	<label><b>Attribute Name</b></label><br />
    <input type="text" placeholder="Enter Name" name = 'Attribute'>
	<br />
	
	<label><b>Attribute Value</b></label><br />
    <input type="text" placeholder="Enter Value" name = 'Val'>
	<br />
  </div>
<p>Enter Information in form of: </p>
<p>Update "Table" Set "Column" = "Update" Where "Attribute" = "Val"</p>  
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./DataOutputs.php">Back</button>
</form>

</body>
</html>