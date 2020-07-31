<?php 

include "newcon.php";
	$success='';
	if(isset($_POST['sub'])){
	
		$name=$_POST['name'];

		$email=$_POST['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo "give valid email address";
		}
		$password=$_POST['pass'];
		$query="INSERT INTO log VALUES('$name','$email','$password')";
		$result=mysqli_query($ncon,$query);
		if($result){
			$success="YOUR ACOUNT HAS BEEN CREATED SUCCESSFULLY!!!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<header><marquee behaviour="scroll" direction="left" scrollamount="15" style="font-size:50px; font-family:verdana;color:blue;">GET YOUR VEHICLE INFO INSTANTLY ANYTIME ANYWHERE </marquee></header>
	
	<title>vehicle.info</title>

	<style>
		body{
				background-image:url("car.jpg");
				background-size: cover;
			}
		h2{
			color:black;
		}
		p{
			
			background-position:left;
			background-size:100px 200px;
			color:white;
			opacity:1.5;
			font-size:20px;
		}
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
			background-color:white;
			border:2px solid black;
			padding:0px;
			opacity:0.7;
			width:400px;
		}
		
		
		input[type=text] {
  						border: none;
 			 			border-bottom: 4px solid black;
 						background-color:white;
		}
		label{
			font-size:20px;
			opacity:1.5;
		}

		
	</style>
</head>
<body>	
		<ul>
		
		<li><a href="renew.php">FRESH/RENEW</a>
			
		</li>
		<li><a href="">ABOUT</a>
			<ul>
			
				<li><a href="statics.php">STATICS</a></li>
			</ul>

		</li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="">SEARCH</a>
			<ul>
				<li><a href="search.php">QUICK INFO</a></li>
				<li><a href="get.php">FULL DETAILS</a></li>
			</ul>

		</li>
			
	</ul>
	<br>
	<br>

	<h1 style="text-align:left;opacity:1.5;color:white">CREATE ACCOUNT</h1>	
	<h2 style="text-align:right;color:white">VEHICLE REGISTRATION GUIDELINES::</h2>
	<div class="row">
	<div class="col-md-6">

			
				<form method="POST" name="create_acc">
			 	
			 		<label>Enter the name of the owner</label><br>
			 		<input type="text" name="name" size=40><br>
			 		<label>Enter the emailid of owner</label><br>
			 		<input type="text" name="email" size=40><br>
			 		<label>Create the password</label><br>
			 		<input type="text" name="pass" size=40><br>

			 		<input type="submit" class="button" name="sub" value="create account"><br>
			 		<span><?php echo "$success" ?></span> 
				</form>
	</div>
	<div class="col-md-6">
	<p>
		National Register: Vehicles Data from the centralized Vahan 4.0 and different
		State Registers of non Vahan offices situated at respective State Registers
		flow to the National Register. Selected information has been envisaged to be 
		captured at the national level. The National Register will act as a central
		repository of all crucial data / information. This will also enable users
		to avail the service on "Anywhere Service" basis. National Register will
		provide information to MoRTH, RTO/ DTO/ MLO/ SDM, inter-state check 
		post, police department and other G2C services.
	</p>
    </div>


</div>
<p>
The Ministry has decided to offer the services to different stake holders like Banks, Insurance Companies etc on payment basis. The following procedure needs to be completed to enroll and use this service.
Applicant may fill the User ID creation form. Click here to download the prescribed form.
The duly filled application form needs to be submitted by the Head Office on official letter head to the Joint Secretary (T), Transport Bhawan, 1 Parliament Street, New Delhi -110003.
After verification and approval of the submitted application, user-id will be created and information will be communicated to the applicant.
The user id and password need to be changed immediately by the user organization.
Only one user id/ password will be issued to an organization. The organization may, in turn, create sub-user ids and passwords, if required, for its constituents/branches etc.
The records on NR may be accessed by the user organization after making advance payment of user charges as per the NR access policy. Click here to download the NR access policy.
  VAHAN - Integrated Solution  
Vahan - The Integrated Solution for Vehicle Registration
VAHAN is a highly flexible and comprehensive system that takes care of all the burdensome activities of Vehicle Registration, leaving the Transport Department to deal with more important business issues. The software enables the processes at RTO/DTO/MLO/SDM involving Vehicle Registration, Fitness, Taxes, Permits & Enforcement to get computerized.
The State Transport Department is governed by both Central Motor Vehicle Regulation (CMVR) and state specific Motor Vehicle Regulation (State MVR). Consequently, Vahan was conceptualized as a product that would capture the functionalities </p>
</body>