<?php
	include "newcon.php";
	       $lince=$litype=$lidue='';
		if(isset($_POST['submit'])){	
				
			$licence=$_POST['lno'];
 			$litype=$_POST['ltype'];
            $lidue=$_POST['ldue'];
            session_start();
            $_SESSION['lic']=$licence;
            header('Location:owner1.php');
            header('Location:table.php');
             $sql2="INSERT INTO licence VALUES('$licence','$litype','$lidue')";
            if(mysqli_query($ncon,$sql2))
            {
                header('Location:ins.php');
            }
            
            
        }
        else
        {
        	$err="enter all the fields";
        }
 	?>

 <!DOCTYPE html>
<html>
<head>
	<title>licence</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
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
                        border-bottom: 3px solid black;
                        background-color:white;    
                        border-left: 0px; 
                        border-right: 0px;          
                        border-top: 0px;
        }
        label{
            font-size:20px;
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
        <h1>Enter the Owner License details</h1>
	       <form method="POST" action="lic.php">

							<label>Enter the licence number</label><br>
                            <input type="text" name="lno" value='' size="50"><br><br>
                            <label>Enter the licence type</label><br>
                            <input type="text" name="ltype" value='' size="50"><br><br>
                             <label>Enter the valid till date(in yyyy-mm-dd)</label><br>
                            <input type="date" name="ldue" value='' size="50"><br><br>
                            <input type="submit" name="submit" value="go next"><br>
		
	       </form>
</div>
</body>
</html>