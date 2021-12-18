<?php
	session_start(); 
	include("includes/db.php"); //Import from database file in includes folder
?>

<?php
	
	//To set the bills variable 	
	$get_bills = "select * from bills"; //Use $get to collect the values from bills. Select the records from bills table admin_email in phpmyadmin (admins table)
	$run_bills = mysqli_query($con,$get_bills); //To run the admin database. To execute the sql query from admin_email in phpmyadmin 
	$row_bills = mysqli_fetch_array($run_bills); //To fetch the row array from the query result in admins phpmyadmin
	
	//To set the variable $row_admin
	$bills_id = $row_bills['bills_id']; //Row is used to get the bills_id rows record from table bills in phpmyadmin
	$bills_date = $row_bills['bills_date'];
	$bills_current = $row_bills['bills_current'];
	$bills_previous = $row_bills['bills_previous'];
	$bills_amount = $row_bills['bills_amount'];
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Electricity Bill Calculator Apps</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
			<link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="image/png">
	</head>

	<body>
		<div id="wrapper"> <!-- To set the content border within the center of the page and not stick to the eadge of the webpage-->

	<?php 
		include("includes/sidebar.php");  
	?>

		<div id="page-wrapper"><!-- To center the wrapper -->
		<div class="container-fluid"><!-- Expand or shrink the webpage each time the vieport is resized -->

	<?php
		//To get dashboard record
			if(isset($_GET['dashboard'])){
			include("dashboard.php"); //Get the dashboard record from dashboard.php file
		}

		//To get record bills record
			if(isset($_GET['record_bills'])){
			include("record_bills.php"); //Get the record_bills record from record_bills.php file
		}

			if(isset($_GET['manage_bills'])){
			include("manage_bills.php"); //Get the manage_bills record from manage_bills.php file
		}

			if(isset($_GET['delete_bills'])){
			include("delete_bills.php");
		}
?>

			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>

