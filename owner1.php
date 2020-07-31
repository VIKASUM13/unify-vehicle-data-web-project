<?php 
	include "newcon.php";
		$name=$email = $vehicle= $gender=$address = $phno= $licence=$err='';
 		
 		if(isset($_POST['submit2'])){
				$name=$_POST['oname'];
				$address=$_POST['oaddress'];
				$email=$_POST['oemail'];
				$vehicle=$_POST['vid'];
				$gender=$_POST['ogender'];
				$phno=$_POST['ophno'];
				session_start();
				$licence=$_SESSION['lic'];
				$_SESSION['email']=$email;
				
				$sql3="INSERT INTO owner VALUES('$name','$vehicle','$email','$address','$gender','$phno','$licence')";
				
				 if(mysqli_query($ncon,$sql3))
            	{
                	$err="success";
            	}

				
		}
		else{

			$err="Enter The all fields";
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>owner details</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="style1.css" rel="stylesheet">
	<style>
		form{
			height:600px;
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
			<form method="POST">
	 				 <label>Owner Name</label><br>
                    <input type="text" name="oname" value="" size="50"><br><br>
                    <label>Email id of Owner</label><br>
                    <input type="text" name="oemail" value="" size="50"><br><br>
					 <label>Gender</label> <br>                   
                    <input type="text" name="ogender" size="50"><br><br>
                    <label>Adress of Owner</label><br>
                   	<input type="text" name="oaddress" size=50><br><br>
                    <label>enter the owners vehicle id </label><br>                    
					<input type="text" name="vid" value="" size="50"><br><br>

                    <label>owner phone no</label><br>
                    <input type="text" name="ophno" size="50"><br><br>
                    
                    <input type="submit" name="submit2" value="next">
                    <span><?php echo "$err" ?></span>                    
			</form>
		
</div>

</body>
</html>




