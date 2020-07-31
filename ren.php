
<?php 
include('newcon.php');
 		$inid=$intype=$amt=$start=$end=$suc='';
 		if(isset($_POST['submit7'])){
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

				$query="UPDATE insurance SET instype='$intype',amount='$amt',startdate='$start',enddate='$end' 
				WHERE insuranceno='$inid'";
				$res=mysqli_query($ncon,$query);
				if($res){

					$suc="your insurance has been renewed successfully!";
				}
			}





 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>RENEWAL</title>
</head>
<body>
	<h1>RENEWAL OF YOUR OLD INSURANCE</h1>
	<form method="POST" >
					 <label>Insurance id number</label>
                    <input type="text" name="insid" value="" size="50"><br><br>
                     <label> new Insurance type</label>
                    <input type="text" name="instype" value="" size="50"><br><br>
                     <label>Insurance amount paid </label>
                    <input type="text" name="insamt" value="" size="50"><br><br>
                     <label>Insurance validation starts date</label>

                    <input type="date" name="instart" value="" size="50"><br><br>
                     <label><h2>Insurance Valid upto</h2></label>

                    <input type="date" name="insend" value="" size="50"><br><br>
                    <input type="submit" name="submit7" value="RENEW">
                    <span><?php echo "$suc" ?></span>
	</form>

</body>
</html>