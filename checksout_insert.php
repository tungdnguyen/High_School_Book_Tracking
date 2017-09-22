
<?php

if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $DateOut = $_POST['DateOut'];
    $DueDate = $_POST['DueDate'];
    $SID = $_POST['SID'];
    $BID = $_POST['BID'];

    $sql1 = "SELECT COUNT(*) AS total FROM Takes WHERE StudentID=$SID";
    $result = $conn->query($sql1);
    $takeclass = $result->fetch_assoc();



    $sql2 = "SELECT COUNT(*) AS total_2 FROM ChecksOuts WHERE StudentID=$SID AND DateReturned IS NULL ";
    $result2 = $conn->query($sql2);
    $check = $result2->fetch_assoc();


    $sql3 = "SELECT Available AS avail FROM TextBook WHERE BookID = $BID";
    $result3 = $conn->query($sql3);
    $check3 = $result3->fetch_assoc();
    if($check3['avail']<=0)
    {
        echo "There's no more book to check out";
    }
    else{
        if($check['total_2']<$takeclass['total'])
        {
            $DateOut = date("Y-m-d", strtotime($DateOut));
            $DueDate = date("Y-m-d", strtotime($DueDate));
            echo $DateOut;
            $sql1 = "INSERT INTO ChecksOuts (DateOut,DueDate,StudentID,BookID) VALUES ('$DateOut','$DueDate',$SID,$BID);";
        $sql2 = "UPDATE TextBook SET CheckedOut = CheckedOut+1 WHERE BookID = $BID;";
        $sql3 = "UPDATE TextBook SET Available = Available-1 WHERE BookID = $BID;";
        
        if ($conn->query($sql1) === FALSE) {
        echo "Error:1 " . $sql1 . "<br>" . $conn->error;
        }

        if ($conn->query($sql2) === FALSE) {
        echo "Error:2 " . $sql2 . "<br>" . $conn->error;
        }   

        if ($conn->query($sql3) === FALSE) {
        echo "Error:3 " . $sql3 . "<br>" . $conn->error;
        }
    }
        else
    {
        echo " You checked more than you can";
    }
    }
}

?>
<!DOCTYPE html>
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
<title>Insert Data</title>
</head>
<body>
<h1>Student Checkout Form</h1>
    
<form method = 'post' action = 'checksout_insert.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
	
  <div class="container">
            
    <label><b>Date Out</b></label><br />
    <input type="date" placeholder="Enter Date" name='DateOut'>
	<br />

    <label><b>Due Date</b></label><br />
    <input type="date" placeholder="Enter Date" name='DueDate'>
	<br />
	
	<label><b>Student ID</b></label><br />
    <input type="number" placeholder="Enter ID" name = 'SID'>
	<br />
	
	<label><b>Book ID</b></label><br />
    <input type="number" placeholder="Enter ID" name = 'BID'>
	<br />

  </div>
</fieldset>
<button type="submit" value="Submit" >Submit</button>
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>	
			
</body>
</html>