<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>ABOUTserverclient</title>
</head>
<body>
	<h1>SERVER &FILES INFO</h1>
	<?php if($server): ?>
		<ul>
			<?php foreach($server as $key=>$value): ?>
				<li>
				<strong><?php echo $key; ?></strong>
				<?php echo $value ?>
			</li>
			<?php endforeach; ?>

		</ul>

	<?php endif; ?>
	<h1>CLIENT INFO</h1>
	<?php if($client): ?>
		<ul>
			<?php foreach($client as $key=>$value): ?>
				<li>
				<strong><?php echo $key; ?></strong>
				<?php echo $value ?>
			</li>
			<?php endforeach; ?>

		</ul>

	<?php endif; ?>


</body>
</html>