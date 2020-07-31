
<?php
	include "newcon.php";
	$d=$d2='';
	if(isset($_POST['sub'])){

		$s=$_POST['sch'];
		$q="SELECT * FROM vehicle WHERE vehicleno='$s'";
		$result=mysqli_query($ncon,$q);
		$d=mysqli_fetch_all($result,MYSQLI_ASSOC);
		mysqli_free_result($result);
		$q2="SELECT * FROM owner WHERE vehicleno='$s'";
		$result2=mysqli_query($ncon,$q2);
		$d2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
		mysqli_free_result($result2);
		
	}
	else{
		echo "ENTER THE FIELD FIRST!!";
	}
	



?>



<!DOCTYPE html>
<html>
<head>
	<style >
		body{
			background-color:black;
		}
		
		th{
			font-style:bold;
			border-collapse:collapse;
			color:black;
			background-color:white;
			border:5px solid black;
			padding:20px;

		}
		td{
			border-collapse:collapse;
			color:blue;
			background-color:white;
			border:2px solid black;
			padding:40px;
		}
		 .button{
                background-color: blue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius:15px;
                
            }
        .button:hover{
            background-color:red; 
        }
        ul li a{
        	background-color:black;
        	color:black;
        }
        input[type=text]{
        	line-height:40px;
        	border-bottom:6px solid blue;
        }

	</style>
	
	<title>search vehicle</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			      </li> 
			    </ul>
		  
		  </div>
		</nav>
	<h1 style="text-align:center;color:black;font-family:verdana;font-size:40px">Enter the vehicle no</h1>
	<form method="POST" align="center">
	<input type="text" name='sch' size="60" autofocus required><br>	
	<input type="submit" class="button" name='sub' ></button>
	</form>
	
	<table style="border-color:black">
		<tr>
			<th>vehicleno</th>
			<th>engineno</th>
			<th>color</th>
			<th>type</th>
			<th>company</th>
			<th>regid</th>
			<th>regdate</th>
			<th>insno</th>
		</tr>
		<tr>
			<?php foreach($d as $a): ?>
			<td><?php echo $a["vehicleno"] ?></td><
			<td><?php echo $a["engino"] ?></td>
			<td><?php echo $a["color"] ?></td>
			<td><?php echo $a["vehicletype"] ?></td>
			<td><?php echo $a["companyname"] ?></td>
			<td><?php echo $a["regid"] ?></td>
			<td><?php echo $a["regdate"] ?></td>
			<td><?php echo $a["insno"] ?></td>

		
			<?php endforeach ?>
		</tr>
	</table>
	<table style="border-color:black">
		<tr>
			<th>NAME</th>
			<th>VEHICLENO</th>
			<th>EMAILID</th>
			<th>GENDER</th>
			<th>PHONENO</th>
			<th>DL NUMBER</th>
			<th>ADDRESS</th>
			
		</tr>
		<tr>
			<?php foreach($d2 as $a2): ?>
			<td><?php echo $a2["name"]; ?></td><
			<td><?php echo $a2["vehicleno"]; ?></td>
			<td><?php echo $a2["emailid"]; ?></td>
			<td><?php echo $a2["gender"]; ?></td>
			<td><?php echo $a2["phno"]; ?></td>
			<td><?php echo $a2["dlno"]; ?></td>
			<td><?php echo $a2["address"]; ?></td>
			

		
			<?php endforeach ?>
		</tr>
	</table>


</body>
</html>