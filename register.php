<?php 
		include "newcon.php";
		if(isset($_POST['submit'])){
			$r=$_POST['regid'];
			$rl=$_POST['loc'];
			$p=$_POST['phno'];
			session_start();
			$_SESSION['rid']=htmlentities($r);
			header('Location:vehicle.php');
			header('Location:table.php');
			if(isset($_POST['c'])){
			$query="INSERT INTO register VALUES('$r','$rl','$p')";
				if(mysqli_query($ncon,$query)){
						header('Location:lic.php');
					}
			}
			else{

				echo "click on checkbox";
			}


	}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style>
		.button {
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
		form{
 			border:2px solid black;
 			padding-left:10px;
 			width:800px;
 			height:400px;

 		}

		
		
		input[type=text] {
  						border: none;
 			 			border-bottom: 2px solid red;
 						background-color:white;	 
 						
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
			        <a class="nav-link" href="ins.php">skip this step</a>
			      </li>
			   
			    </ul>
		  
		  </div>
		</nav>

		<br><br>
		<h1 style="text-align:left;font-family:verdana;font-size:60px">Enter The Registration Office Details</h1>
			<form method="POST"  align="left">
			<label>Enter The office registration id</label><br>
			<input type='text' name="regid" size='40'><br><br>
			<label>Enter The Locality </label><br>
			<input type="text" name="loc" size="40"><br><br>
			<label>Enter the Phone No</label><br>
			<input type="text" name="phno" size="40"><br><br>
			<input type="checkbox" name="c">
				**I aggree to all the information given above
			<br>
			<input type="submit" class="button" name="submit">
		
		</form>
	</div>
	

</body>
</html>

