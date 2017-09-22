<?php

if (isset($_POST['submitted'])) {
    include('connect.php');
   
    $DateReturn = $_POST['DateReturn'];
    $DateReturn_fixed = date("Y-m-d", strtotime($DateReturn));

    $CheckID = $_POST['CheckID'];
    $BID = $_POST['BID'];

    $sql = "UPDATE TextBook T
            INNER JOIN ChecksOuts C 
            ON T.BookID= C.BookID
            SET Available = Available + 1  
            WHERE C.BookID = $BID 
                AND CheckoutID = $CheckID 
                AND DateReturned IS NULL ";
    $sql3 = "UPDATE TextBook T
            INNER JOIN ChecksOuts C 
            ON T.BookID= C.BookID
            SET CheckedOut = CheckedOut - 1  
            WHERE C.BookID = $BID 
                AND CheckoutID = $CheckID 
                AND DateReturned IS NULL ";
    $sql5= "UPDATE ChecksOuts 
        SET DateReturned = '$DateReturn_fixed' 
        WHERE BookID=$BID 
        AND CheckoutID = $CheckID 
        ";
        
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($conn->query($sql3) === FALSE) {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }

    if ($conn->query($sql5) === FALSE) {
        echo "Error: " . $sql5 . "<br>" . $conn->error;
    }

}

?>

<html>
<head>
<title>Return</title>
</head>
<body>
<h1>Book Return Form</h1>
    
<form method = 'post' action = 'return_book.php'>
<input type = 'hidden' name = 'submitted' value = 'true' />
<fieldset>
    <legend>Return Information</legend>
    <lable>Date Return:<input type="date" placeholder="yyyy-mm-dd" name='DateReturn' /></lable>
    <lable>Checkout ID:<input type="number" name = 'CheckID' /></lable>
    <lable>Book ID:<input type="number" name = 'BID' /></lable>
</fieldset>
<br />
<input type="submit" value="Submit" />
<button type="submit" formaction="./AdminPage.php">Back</button>
</form>
</body>
</html>
