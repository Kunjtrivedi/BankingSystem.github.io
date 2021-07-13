<?php
$conn = mysqli_connect('localhost','root','','banking');
if (isset($_POST['save'])) {
//$rating = $_POST['slider'];
$name =  $_POST['customername'];
$rname = $_POST['recieverName'];
$amount = $_POST['amount'];
$day = $_POST['datetime'];
$currentbalance = $_POST['customerbalance'];
$newbalance=$currentbalance-$amount;

/*Inserting The Transactions In The Transfers Table*/
$sql ="INSERT INTO transfers (Sender,Reciever,Amount,Day) VALUES ('$name','$rname',$amount,'$day')";
$result = mysqli_query($conn, $sql);

/* Amount Debitted From Account */
$sqlup = "UPDATE customers SET current_balance='$newbalance' WHERE Name='$name'";
$resultupdate = mysqli_query($conn, $sqlup);


/*Amount Creditted To the Account*/
$sqlcredit = "UPDATE customers SET current_balance = current_balance + $amount WHERE Name='$rname' ";
$resultcredit = mysqli_query($conn, $sqlcredit);


if(!$result)
{
	
	echo "db not connected";
}
elseif (!$resultupdate) {
	echo "Update was unsuccesful for debit";
	echo $newbalance;// code...
}
//elseif (!$resultcr) {
//	echo "Update was unsuccesful for credit";
//	echo $sqlcr;// code...
//}
elseif (!$resultcredit) {
	echo "Update was unsuccesful for credit";
	// code...
}
else{
	header("Location: http://localhost/Banking%20system/customers.php");
	
}
}

?>
