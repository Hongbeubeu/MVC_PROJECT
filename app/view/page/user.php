<?php 
if(! defined('PATH_SYSTEM') || !is_logged_in())
	die('Bad Requested!');

?>
<?php require PATH_APPLICATION . '/view/widget/header.php' ?>
<div class="row mb-3">
	<div class="col-md-6">
		<h3>Users</h3>
	</div>
	<div class="card card-body mb-3">	
			<div class="table">
				<table class="table table-sm table-condensed">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $_SESSION['user_name']; ?></td>
							<td><?php echo $_SESSION['user_email']; ?></td>
						</td>
					</tr>
			</tbody>
		</table>
	</div>

</div>
<?php require PATH_APPLICATION . '/view/widget/footer.php' ?>