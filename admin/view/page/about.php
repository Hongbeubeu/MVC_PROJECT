<?php 
	if (defined(PATH_SYSTEM)) {
		die('Bad requested!');
	}

require PATH_APPLICATION . '/view/widget/header.php' ?>
<div class="jumbotron jumbrotron-fluid">
<h1 class="display-3">PHP MVC PROJECT</h1>
<p class="lead">Make it possible</p>
<p class="lead">Version: <strong>1.0</strong>
<p class="lead">Date: <strong>18/8/2019</strong> </p>
<p class="lead">Author: <strong>Nguyễn Văn Hồng</strong></p>
</div>
<?php require PATH_APPLICATION . '/view/widget/footer.php' ?>