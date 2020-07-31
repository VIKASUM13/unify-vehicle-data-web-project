<?php 

include('newcon.php');
 		$inid=$intype=$amt=$start=$end=$err='';
 		if(isset($_POST['submit5'])){
				if(!empty($_POST["insid"])){
					$inid=$_POST["insid"];
				}
				if(!empty($_POST["instype"])){
					$intype=$_POST["instype"];
				}
				if(!empty($_POST["insamt"])){
					$amt=$_POST["insamt"];
				}
				if(!empty($_POST["instart"])){
					$start=$_POST["instart"];
				}
				if(!empty($_POST["insend"])){
					$end=$_POST["insend"];
				}
				session_start();
				$_SESSION['ins']=$inid;
				header('Location:vehicle.php');
				header('Location:table.php');
				
				$sql="INSERT INTO insurance values('$inid','$intype','$amt','$start','$end')";
			if(mysqli_query($ncon, $sql)){
			header('Location:vehicle.php');

		}
}
	else{

		$err="enter all the fields";
	}




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>insurance details</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="style1.css" rel="stylesheet">
	<style>
				form{
 			border:2px solid black;
 			padding-left:10px;
 			width:800px;
 			height:500px;

 		}

	</style>
		

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
			      <li class="nav-item">
			        <a class="nav-link" href="vehicle.php">skip this step</a>
			      </li>
			   
			    </ul>
		  
		  </div>
		</nav>
			<h1 style="font-family:verdana;">Enter the vehicle Insurance Details</h1>
	<form method="POST"  >
					 <label>Insurance id number</label><br>
                    <input type="text" name="insid" value="" size="50"><br><br>
                     <label>Insurance type</label><br>
                    <input type="text" name="instype" value="" size="50"><br><br>
                     <label>Insurance amount paid</label><br>
                    <input type="text" name="insamt" value="" size="50"><br><br>
                     <label>Insurance validation starts date</label><br>

                    <input type="date" name="instart" value="" size="50"><br><br>
                     <label><h2>Insurance Valid upto</h2></label><br>

                    <input type="date" name="insend" value="" size="50"><br><br>
                    <input type="submit" name="submit5" value="final submit"><br>
                    <span><?php echo "$err" ?></span>
	</form>
</div>
</body>
</html>