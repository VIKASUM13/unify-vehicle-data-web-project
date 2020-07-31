<?php 
	include "newcon.php";
	$err='';
	if(isset($_POST['fsub'])){
		$fname=$_POST['fname'];
		$femail=$_POST['femail'];
		$fpassword=$_POST['fpass'];
		$fquery="SELECT name from log where email='$femail' and password='$fpassword'";
		$res=mysqli_query($ncon,$fquery);
		$fres=mysqli_fetch_assoc($res)['name'];
		if($fres==$fname){
			header('Location:register.php');
		}
		else {
			$err="Enter valid details";
			# code...
		}

	}
	if(isset($_POST['rsub'])){
		$rname=$_POST['rname'];
		$remail=$_POST['remail'];
		$rpassword=$_POST['rpass'];
		$fquery="SELECT name from log where email='$remail' and password='$rpassword'";
		$res2=mysqli_query($ncon,$fquery);
		$rres2=mysqli_fetch_assoc($res2)['name'];
		if($rres2==$rname){
			header('Location:ren.php');
		}
		else
		{
			$err="enter all the fields correcctly";
		}

	}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<title>renew</title>
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
		
		
		input[type=text] {
  						border: none;
 			 			border-bottom: 2px solid red;
 						background-color:;	 
 						border-left: 0px; 
 						border-right: 0px;			
 						border-top: 0px;
		
 		}
 		form{
 			border:2px solid black;
 			padding-left:10px;
 			width:500px;
 			height:600px;

 		}





 	</style>
 	
 		
 		
 </head>
 <body>
 	<div class="container-fluid">
	 	<div class="row">

	 		<div class="col-md-6">
	 			<form method="POST" value="renew.php" >
			 		<h1>APPLY FRESH </h1>
			 		<label>enter the name of the owner</label><br>
			 		<input type="text" name="fname" size=40><br>
			 		<label>enter the emailid of owner</label><br>
			 		<input type="email" name="femail" size=40 ><br>
			 		<label>create the password</label><br>
			 		<input type="password" name="fpass" size=40><br>
			 		<span><?php echo $err; ?></span><br>
			 		<input type="submit" class="button" name="fsub" value="apply no"><br> 
				</form>
	 		</div>
	 		<div class="col-md-6 ">
	 			<form method="POST" value="renew.php">
			 		<h1>APPLY FOR RENEWAL</h1>
			 		<label>enter the name of the owner</label><br>
			 		<input type="text" name="rname" size=40><br>
			 		<label>enter the emailid of owner</label><br>
			 		<input type="email" name="remail" size=40><br>
			 		<label>create the password</label><br>
			 		<input type="password" name="rpass" size=40><br>
			 		<span><?php echo $err; ?></span><br>
			 		<input type="submit" class="button" name="rsub" value="renew application"><br> 
				</form>
	 		</div>
	 	</div>
	</div>
 </body>
 </html>