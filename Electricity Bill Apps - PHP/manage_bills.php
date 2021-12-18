
	<div class="row">
		<div class="col-lg-12" >
			<ol class="breadcrumb" >
				<li class="active" >
					<i class="fa fa-dashboard"></i> Home / Manage Bills
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default" >
				<div class="panel-heading" >
					<h3 class="panel-title" >
						<i class="fa fa-money" ></i> Manage Bills
					</h3>
				</div>

	<!-- To create table -->
	<div class="panel-body" >
		<div class="table-responsive" >
		<table class="table table-bordered table-hover table-striped" >

	<thead>
		<tr>
			<th>No</th>
			<th>Bills Id</th>
			<th>Date of Bills</th>
			<th>Current UnikWh Reading</th>
			<th>Previous Unitkwh Reading</th>
			<th>Electricity Bills Amount (RM)</th>
			<th>Action</th>
		</tr>
	</thead>

<tbody>

<?php
	$i = 0;
	$get_bills = "select * from bills";
	$run_bills = mysqli_query($con,$get_bills);
	while($row_bills = mysqli_fetch_array($run_bills)){
	$bills_id = $row_bills['bills_id'];
	$bills_date = $row_bills['bills_date'];
	$bills_current = $row_bills['bills_current'];
	$bills_previous = $row_bills['bills_previous'];
	$bills_amount = $row_bills['bills_amount'];
	$i++;
?>

	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $bills_id; ?></td>
		<td><?php echo $bills_date; ?></td>
		<td><?php echo $bills_current; ?></td>
		<td><?php echo $bills_previous; ?></td>
		<td><?php echo $bills_amount; ?></td>

		<td>
		<a href="index.php?delete_bills=<?php echo $bills_id; ?>">
		<i class="fa fa-trash-o"> </i> Delete
		</a>
		</td>
	</tr>

<?php 
	}
 ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>




