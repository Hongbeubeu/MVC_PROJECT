<?php 
if(! defined('PATH_SYSTEM'))
	die('Bad Requested!');

?>

<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
	<?php 
	include(PATH_APPLICATION . '\view\widget\header.php');?>
	<div class="jumbotron jumbrotron-fluid">
		<div class="container">
			<h1 class="display-3">PHP MVC PROJECT</h1>
			<p class="lead">
				There are no problems, only solutions.
			</p>
		</div>
	</div>
	<?php
	include(PATH_APPLICATION . '\view\widget\footer.php');
	?>
</body>
</html>