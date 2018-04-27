<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'categories.create';

if(isset($_GET['id'])) {
	require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/categories-edit.php');
}
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
					<?php if(isset($id)) : ?>
					<h4>Edit Category</h4>
					<?php else : ?>
					<h4>Add Category</h4>
					<?php endif ?>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form class="needs-validation" method="POST" 
								action="<?php echo isset($id) ? "/admin/functions/categories-update.php?id=$id" : '/admin/functions/categories-store.php' ?>">
								<div class="form-group row">
									<div class="col-sm-12 form-group">
										<label for="name" class="form-label">Category name</label>
										<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
										<input type="text" class="form-control" id="name" name="name" required
											value="<?php echo isset($name) ? $name : '' ?>">
									</div>
									<div class="col-sm-12 form-group text-right">
										<?php if(isset($id)) : ?>
										<button type="submit" class="btn btn-primary" name="submit" value="true">Update</button>
										<?php else : ?>
										<button type="submit" class="btn btn-primary" name="submit" value="true">Submit</button>
										<?php endif ?>
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