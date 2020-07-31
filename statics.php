<?php 
	include "newcon.php";
		$query="SELECT totalcapacity FROM countdata";
		if($res=mysqli_query($ncon,$query)){
			$row=mysqli_fetch_row($res);
			
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		th{
			border-collapse:collapse;
			color:green;
			background-color:white;
			border:5px solid black;
			padding:20px;
		}
		td{
			border-collapse:collapse;
			color:blue;
			background-color:white;
			border:2px solid black;
			padding:20px;
		}

	</style>
</head>
<body>	
<h1 style="color:red;text-shadow: 5px 3px blue">THE STATICS OF REGISTRATIONS</h1>
<table style="border-collapse:collapse;">
	<tr>
		<th>YEAR</th>
		<th>NO OF REGISTRATION DONE</th>
		<th>NO 2 WHEELERS</th>
		<th>NO 4 WHEELERS</th>
		<th colspan="2">PLACE</th>

	</tr>
	<tr>
		<td>2018</td>
		<td>2000</td>
		
		<td>1000</td>	
		<td>1000</td>
		<td>chennai</td>
		<td>bengaluru</td>		
	</tr>
	<tr>
		<td>2019</td>	
		<td>10000</td>	
		<td>7300</td>
		<td>2700</td>	
		<td>bengaluru</td>
		<td>delhi</td>

	</tr>

</table>

<h2>THE NUMBER OF VEHICLE REGISTERED SUCCESSFULLY BY OUR WEB APP-----></h2>
<span><h3><?php printf("%d",$row[0]); ?></h3></span>
</body>
