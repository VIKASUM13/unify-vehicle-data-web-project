 <?php 
	include "newcon.php";
	session_start();
	$no=$_SESSION['vno'];
	$r=$_SESSION['rid'];

	$l=$_SESSION['lic'];
	$ins=$_SESSION['ins'];
	$oe=$_SESSION['email'];
	$query="SELECT * FROM register WHERE regid=$r";
	$query .="SELECT * FROM licence WHERE dlno=$l";
	#$query .="SELECT * FROM insurance WHERE insuranceno='$ins'";
	#$query .="SELECT * from vehicle WHERE vehicleno='$no'";
	#$query .="SELECT * FROM owner where emailid='$oe";
	if(mysqli_multi_query($ncon,$query)){
	  do {
        /* store first result set */
        if ($result = mysqli_store_result($ncon)) {
            while ($row = mysqli_fetch_row($result)) {
                printf("%s\t%s\t%s", $row[0],$row[1],$row[2]);
            }
            mysqli_free_result($result);
        }
        /* print divider */
        if (mysqli_more_results($ncon)) {
            printf("-----------------\n");
        }
    } while (mysqli_next_result($ncon));
}

	

	#var_dump($vehicle);

?>
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<table>
		<tr>
			<th>vehicleno</th>
			<th>e</th>
			<th>c</th>
			<th>ty</th>
			<th>comp</th>
			<th>regid</th>
			<th>regdate</th>
			<th>insno</th>
		</tr>
			<?php foreach($vehicle as $v): ?>
		<tr>
		
			<td><?php echo $v['vehicleno'] ?></td>
			<td><?php echo $v['engino'] ?></td>
			<td><?php echo $v['color'] ?></td>
			<td><?php echo $v['vehicletype'] ?></td>
			<td><?php echo $v['companyname'] ?></td>
			<td><?php echo $v['regid'] ?></td>
			<td><?php echo $v['regdate'] ?></td>
			<td><?php echo $v['insno'] ?></td>

		</tr>
			<?php endforeach ?>

	</table>

</body>
</html>
 -->

