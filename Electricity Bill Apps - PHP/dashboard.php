<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Electricity Bill Calculator Apps</title>
		<link rel="stylesheet" href="css/style.css">
		
		


<body>	
	<!-- To create home, bootstrap elements and heading home-->
	<div class="row"><!-- Row 1 starts -->
		<div class="col-lg-12"><!-- To make website responsive -->
				<ol class="breadcrumb"><!-- To make horizontal navigation -->
					<li class="active">
						<i class="fa fa-dashboard"></i> Home <!-- To create icon dashboard -->
					</li>
				</ol>
			</div>
		</div>

	<!-- To create home second heading -->
	<div id="header">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default"> <!-- To create the background light -->
					<div class="panel-body"> <!-- To make the body of the panel -->
						<table class="table table-bordered table-hover table-striped"> <!-- To create stripe table -->
							<table class="table table-striped"> <!-- To To make the table borderless -->

	<!-- To create table column -->
	<thead>
		<tr>
			<th scope="col">Block</th>
			<th scope="col">Tariff Block (kWh)</th>
			<th scope="col">Rate (RM)</th>
		</tr>
	</thead>
	
	<!-- To create table row -->
	<tbody>
		<tr>
			<th scope="row">1</th> <!-- Details for row 1 -->
			<td>200</td>
			<td>0.218</td>
		</tr>
		<tr>
			<th scope="row">2</th> <!-- Details for row 2 -->
			<td>100</td>
			<td>0.334</td>
		</tr>
		<tr>
			<th scope="row">3</th> <!-- Details for row 3 -->
			<td>Remaining kWh used</td>
			<td>0.516</td>
		</tr>
		
		</tbody>
	</table>
	
	<p style="text-align:center; margin-top: 50px; color:blue;">Note: <a style="text-decoration:none; color:black;">Kindly click the 2021 and 2022 legend to filter the year.</a></p>
	<br>
	
	<!-- To create stacked area line chart -->
	<?php
	include ("includes/db.php");

	$query_1 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='01' and year(bills_date)='2021'";
    $result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
	
	$query_2 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='02' and year(bills_date)='2021'";
    $result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
	
	$query_3 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='03' and year(bills_date)='2021'";
    $result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
	
	$query_4 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='04' and year(bills_date)='2021'";
    $result_4 = mysqli_query($con, $query_4);
	$row_4 = mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_4 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='04' and year(bills_date)='2021'";
    $result_4 = mysqli_query($con, $query_4);
	$row_4 = mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_5 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='05' and year(bills_date)='2021'";
    $result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
	
	$query_6 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='06' and year(bills_date)='2021'";
    $result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
	
	$query_7 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='07' and year(bills_date)='2021'";
    $result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
	
	$query_8 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='08' and year(bills_date)='2021'";
    $result_8 = mysqli_query($con, $query_8);
	$row_8 = mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
	
	$query_9 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='09' and year(bills_date)='2021'";
    $result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
	
	$query_10 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='10' and year(bills_date)='2021'";
    $result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
	
	$query_11 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='11' and year(bills_date)='2021'";
    $result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
	
	$query_12 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='12' and year(bills_date)='2021'";
    $result_12 = mysqli_query($con, $query_12);
	$row_12 = mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];
	
$dataPoints2021 = array(
	array("y" => $sum_1, "label" => "Jan"),
	array("y" => $sum_2, "label" => "Feb"),
	array("y" => $sum_3, "label" => "Mac"),
	array("y" => $sum_4, "label" => "Apr"),
	array("y" => $sum_5, "label" => "May"),
	array("y" => $sum_6, "label" => "June"),
	array("y" => $sum_7, "label" => "July"),
	array("y" => $sum_8, "label" => "Aug"),
	array("y" => $sum_9, "label" => "Sept"),
	array("y" => $sum_10, "label" => "Oct"),
	array("y" => $sum_11, "label" => "Nov"),
	array("y" => $sum_12, "label" => "Dec"),
);

	$query_1 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='01' and year(bills_date)='2022'";
    $result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
	
	$query_2 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='02' and year(bills_date)='2022'";
    $result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
	
	$query_3 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='03' and year(bills_date)='2022'";
    $result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
	
	$query_4 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='04' and year(bills_date)='2022'";
    $result_4 = mysqli_query($con, $query_4);
	$row_4 = mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_5 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='05' and year(bills_date)='2022'";
    $result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
	
	$query_6 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='06' and year(bills_date)='2022'";
    $result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
	
	$query_7 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='07' and year(bills_date)='2022'";
    $result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
	
	$query_8 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='08' and year(bills_date)='2022'";
    $result_8 = mysqli_query($con, $query_8);
	$row_8 = mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
	
	$query_9 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='09' and year(bills_date)='2022'";
    $result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
	
	$query_10 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='10' and year(bills_date)='2022'";
    $result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
	
	$query_11 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='11' and year(bills_date)='2022'";
    $result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
	
	$query_12 = "select SUM(bills_amount) as value_sum FROM bills where month(bills_date)='12' and year(bills_date)='2022'";
    $result_12 = mysqli_query($con, $query_12);
	$row_12 = mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];
	
$dataPoints2022 = array(
	array("y" => $sum_1, "label" => "Jan"),
	array("y" => $sum_2, "label" => "Feb"),
	array("y" => $sum_3, "label" => "Mac"),
	array("y" => $sum_4, "label" => "Apr"),
	array("y" => $sum_5, "label" => "May"),
	array("y" => $sum_6, "label" => "June"),
	array("y" => $sum_7, "label" => "July"),
	array("y" => $sum_8, "label" => "Aug"),
	array("y" => $sum_9, "label" => "Sept"),
	array("y" => $sum_10, "label" => "Oct"),
	array("y" => $sum_11, "label" => "Nov"),
	array("y" => $sum_12, "label" => "Dec"),
);

?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", { 
	theme: "light2",
	title: {
		text: "Monthly Electricity Bill"
	},
	axisY: {
		title: "Total Bills Amount (RM)"
	},
	
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	toolTip: {
		shared: true
	},
	data: [{
		type: "stackedArea",
		name: "2021",
		showInLegend: true,
		visible: false,
		dataPoints: <?php echo json_encode($dataPoints2021, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "stackedArea",
		name: "2022",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2022, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                                   