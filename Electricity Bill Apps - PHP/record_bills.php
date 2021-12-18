
<html>
	<head>
		<title> Record Bills </title>
			<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	</head>

<body>
	<!-- To create heading and bootstrap elements -->
	<div class="row"><!-- Row 1 starts -->
		<div class="col-lg-12"><!-- To make website responsive -->
			<ol class="breadcrumb"><!-- To make horizontal navigation -->
				<li class="active">
					<i class="fa fa-dashboard"> </i> Home / Record Bills
				</li>
			</ol>
		</div>
	</div>

	<!-- To create second heading -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-balance-scale fa-fw"></i> Record Bills <!-- To create icon scale -->
					</h3>
				</div><!-- panel-heading Ends -->

	<!-- To create form -->
	<div class="panel-body"><!-- panel-body Starts -->
		<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
		
			<!-- To create option month -->
			<div class="form-group" ><!-- form-group Starts -->
				<label class="col-md-3 control-label" > Date of bills: </label>
					<div class="col-md-6" >
						<input type="date" name="bills_date" class="form-control" required >
				</div>
			</div>
			
			<div class="form-group" >
				<label class="col-md-3 control-label" > Current (kWh) month meter reading: </label>
					<div class="col-md-6" >
						<input type="number" name="unitkWh_current" placeholder="Consumption (kWh)" step="0.01" min="0" class="form-control" required >
					</div>
			</div>
			
			<div class="form-group" ><!-- form-group Starts -->
				<label class="col-md-3 control-label" > Previous (kWh) month meter reading: </label>
					<div class="col-md-6" >
						<input type="number" name="unitkWh_previous" placeholder="Consumption (kWh)" step="0.01" min="0" class="form-control" required >
					
					<p style="text-align:center; margin-top: 50px; color:blue;">Note: <a style="text-decoration:none; color:black;">The kilowatt-hours (kWh) used for the current month is obtain by deducting the previous (kWh) month meter reading with the current (kWh) month meter reading.</a></p>
					
					</div>
			</div>
			
			<br><br>
			
			<div class="form-group" >
				<label class="col-md-3 control-label" ></label>
					<div class="col-md-6" >
						<input type="submit" name="calculate" value="Calculate" class="btn btn-primary" >
						<input type="submit" name="save" value="Save" class="btn btn-primary" >
					</div>
				</div>	
				
			<br><br>

	<!-- To create the function of electricity bill calculator -->	
	<?php		
		if (isset($_POST['calculate'])) {
			session_destroy();
			$bills_current = $_POST['unitkWh_current'];
			$bills_previous = $_POST['unitkWh_previous'];

			$unitkWh_used = $bills_current - $bills_previous;	

			$unit_cost_first = 0.218;
			$unit_cost_second = 0.334;
			$unit_cost_remaining = 0.516;
					
		//To calculate consumption unitkWh that is less and equal than 200 
		if ($unitkWh_used <= 200) {
			$bill = $unitkWh_used * $unit_cost_first;
			$bills_amount = number_format ($bill, 2);
			echo "Your total consumption used is " . $unitkWh_used . " kWh";
			echo "<br><br>";
			echo "First 200kWh (1-200 kWh) per month: RM " . $bills_amount;
			echo "<br><br>";
			echo "Your current bill excluded ICPT and service tax per month: RM " . $bills_amount;
		//number format is used to set that the output are in the 2 decimal point
		}
		
		//To calculate consumption unitkWh that is greater than 200 but less than 300 because of the next 100kWh
		else if($unitkWh_used > 200 && $unitkWh_used <= 300) {
			$temp = 200 * $unit_cost_first;
			$tempformat = number_format ($temp, 2);
			$remaining_units = $unitkWh_used - 200;
			$b = ($remaining_units * $unit_cost_second);
			$bformat = number_format ($b, 2);
			$bill = $temp + ($remaining_units * $unit_cost_second);
			$bills_amount = number_format ($bill, 2);
			echo "Your total consumption used is " . $unitkWh_used . " kWh";
			echo "<br><br>";
			echo "First 200kWh (1-200 kWh) per month: RM " . $tempformat;
			echo "<br> <br>";
			echo "Next 100 kWh (201 - 300 kWh) per month: RM " . $bformat;
			echo "<br><br>";
			echo "Your current bill excluded ICPT and service tax per month: RM " . $bills_amount;
		}
		
		//To calculate consumption unitkWh that is greater than 300 because of the balance remaining unitkWh used
		else if ($unitkWh_used > 300){
			$a = (200 * $unit_cost_first);
			$aformat = number_format ($a, 2);
			$b = (100 * $unit_cost_second);
			$bformat = number_format ($b, 2);
			$temp = (200 * $unit_cost_first) + (100 * $unit_cost_second);
			$remaining_units = $unitkWh_used - 300;
			$c = ($remaining_units * $unit_cost_remaining);
			$cformat = number_format ($c, 2);
			$bill = $temp + ($remaining_units * $unit_cost_remaining);
			$bills_amount = number_format ($bill, 2);
			echo "Your total consumption used is " . $unitkWh_used . " kWh";
			echo "<br><br>";
			echo "First 200kWh (1-200 kWh) per month: RM " . $aformat;
			echo "<br> <br>";
			echo "Next 100 kWh (201 - 300 kWh) per month: RM " . $bformat;
			echo "<br> <br>";
			echo "Next remaining kWh onwards per month: RM " . $cformat;
			echo "<br> <br>";
			echo "Your current bill excluded ICPT and service tax per month: RM " . $bills_amount;
			}
		}
	?>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>

<!-- To create save bills data in phpmyadmin -->
<?php
	if(isset($_POST['save'])){

	$bills_date = date('Y-m-d', strtotime ($_POST['bills_date']));
	$bills_current = $_POST['unitkWh_current'];
	$bills_previous = $_POST['unitkWh_previous'];

	$unitkWh_used = $bills_current - $bills_previous;	

	$unit_cost_first = 0.218;
	$unit_cost_second = 0.334;
	$unit_cost_remaining = 0.516;
					
	if ($unitkWh_used <= 200) {
		$bill = $unitkWh_used * $unit_cost_first;
		$bills_amount = number_format ($bill, 2);
	}
		
	else if($unitkWh_used > 200 && $unitkWh_used <= 300) {
		$temp = 200 * $unit_cost_first;
		$tempformat = number_format ($temp, 2);
			$remaining_units = $unitkWh_used - 200;
			$b = ($remaining_units * $unit_cost_second);
			$bformat = number_format ($b, 2);
			$bill = $temp + ($remaining_units * $unit_cost_second);
			$bills_amount = number_format ($bill, 2);
		}
		
		//To calculate consumption unitkWh that is greater than 300 because of the balance remaining unitkWh used
		else if ($unitkWh_used > 300){
			$a = (200 * $unit_cost_first);
			$aformat = number_format ($a, 2);
			$b = (100 * $unit_cost_second);
			$bformat = number_format ($b, 2);
			$temp = (200 * $unit_cost_first) + (100 * $unit_cost_second);
			$remaining_units = $unitkWh_used - 300;
			$c = ($remaining_units * $unit_cost_remaining);
			$cformat = number_format ($c, 2);
			$bill = $temp + ($remaining_units * $unit_cost_remaining);
			$bills_amount = number_format ($bill, 2);
			}

	$insert_bills = "insert into bills (bills_date,bills_current,bills_previous,bills_amount) values ('$bills_date','$bills_current','$bills_previous',$bills_amount)";
	$run_bills = mysqli_query($con,$insert_bills);

		if($run_bills){
			echo "<script>alert('Bills had been recorded and saved successfully')</script>";
			echo "<script>window.open('index.php?manage_bills','_self')</script>";
		}
		
			else {
				echo "<script>alert('Bills failed to be recorded and saved')</script>";	
			}
	}
?>


