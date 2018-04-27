<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'users.create';

?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<?php require_once($abs_path.'/admin/partials/navigation.php') ?>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php require_once($abs_path.'/admin/partials/sidebar-menu.php') ?>
		</div>

		<div class="col-sm-9">
			<ul class="list-group mb-3">
				<li class="list-group-item active text-center">
					<h4>Add Users</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form class="needs-validation" method="POST" action='/admin/functions/users-store.php'>
								<div class="form-group row">
									<div class="col-sm-12 form-group">
										<label for="username" class="form-label">Username</label>
										<input type="text" class="form-control" id="username" name="username" required>
									</div>
									<div class="col-sm-12 form-group">
										<label for="email" class="form-label">Email</label>
										<input type="email" class="form-control" id="email" name="email" required>
									</div>
									<div class="col-sm-12 form-group">
										<label for="password" class="form-label">Password</label>
										<input type="password" class="form-control" id="password" name="password" required>
									</div>
									<div class="col-sm-12 form-group text-right">
										<button type="submit" class="btn btn-primary" name="submit" value="true">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end card-body -->
					</div>
					<!-- end card -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>