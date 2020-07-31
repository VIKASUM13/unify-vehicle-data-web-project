<?php 
echo "your score is:".(($_POST['age']>10)?($_POST['score']>10?'averge':'worst'):($_POST['score']>20?"average":"hmm"));
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEW GETPOST WEBSITES.ORG</title>
</head>
<body>
<form method="POST"  action="get.php" >	
	<div>
	<label>AGE</label><br>
	<input type="text" name="age">
	</div>
	<div>
	<label>score</label><br>
	<input type="text" name="score">
	</div><br>
	<input type="submit" name="ok" value="done">
</form>
</body>
</html>