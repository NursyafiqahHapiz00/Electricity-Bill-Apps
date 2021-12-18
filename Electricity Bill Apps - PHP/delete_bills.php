<?php
	if(isset($_GET['delete_bills'])){
	$delete_id = $_GET['delete_bills'];
	$delete_bills = "delete from bills where bills_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_bills);

		if($run_delete){
		echo "<script>alert('One bill has been deleted')</script>";
		echo "<script>window.open('index.php?manage_bills','_self')</script>";
		}
	}
?>
