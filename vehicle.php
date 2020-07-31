<?php 
 		include "newcon.php";
 		$no=$enum=$cn=$type=$insnum=$regid=$regdate=$color='';
 		if(isset($_POST['submit4'])){
				if(!empty($_POST["vno"])){
					$no=$_POST["vno"];
				}
				if(!empty($_POST["eno"])){
					$enum=$_POST["eno"];
				}
				if(!empty($_POST["cname"])){
					$cn=$_POST["cname"];
				}
				if(!empty($_POST["vtype"])){
					$type=$_POST["vtype"];
				}
			
				if(!empty($_POST["rd"])){
					$regdate=$_POST["rd"];
				}
				if(!empty($_POST["vcolor"])){
					$color=$_POST["vcolor"];
				}
				session_start();
				$insnum=$_SESSION['ins'];
				
				$regid=$_SESSION['rid'];
				$_SESSION['vno']=$no;
				
				$sql="INSERT INTO vehicle values('$no','$enum','$color','$type','$cn','$regid','$regdate','$insnum')";
			if(mysqli_query($ncon,$sql)){

				header('Location:owner1.php');
			}
		}

 ?>



 <!DOCTYPE html>
<html>
<head>
	<title>vehicle details</title>
	
	<link href="bootstrap.min.css" rel="stylesheet">


	<link href="style1.css" rel="stylesheet">
	<style>
				form{
 			border:2px solid black;
 			padding-left:10px;
 			width:800px;
 			height:900px;

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
			        <a class="nav-link" href="owner1.php">skip this step</a>
			      </li>
			   
			    </ul>
		  
		  </div>
		</nav>
	<form method="POST">
		<label>Enter the number</label><br>
		<input type="text" name="vno" size="50"><br><br>
		<label>Enter the Engine chassi no</label><br>
		<input type="text" name="eno" size="50"><br><br>
		<label>Enter The vehicle model</label><br>
		<input type="text" name="cname" size="50"><br><br>
		<label>Enter the vehicle type</label><br>
		<input type="text" name="vtype" size="50"><br><br>
		<label>Enter The registered date</label><br>
		<input type="text" name="rd" size="50"><br><br>
		<label>Enter the vehicle major color</label><br>
		<input type="text" name="vcolor" size="50"><br><br>
		<input type="submit" name="submit4" value="go next">

	</form>
</div>
</body>
</html>