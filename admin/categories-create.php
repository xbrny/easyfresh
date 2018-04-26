<?php 
$current_page = 'categories.create';
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
					<h4>Add Category</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form>
								<div class="form-group row">
									<div class="col-sm-12 form-group">
										<label for="name" class="form-label">Category name</label>
										<input type="text" class="form-control" id="name">
									</div>
									<div class="col-sm-12 form-group text-right">
										<button type="button" class="btn btn-primary">Submit</button>
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