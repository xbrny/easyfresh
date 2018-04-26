<?php 
$current_page = 'products.create';
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
					<h4>Add Product</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form>
								<div class="form-group row">
									<div class="col-sm-12 form-group">
										<label for="first_name" class="form-label">Product name</label>
										<input type="text" class="form-control" id="first_name">
									</div>
									<div class="col-sm-6 form-group">
										<label for="last_name" class="form-label">Price</label>
										<input type="text" class="form-control" id="last_name">
									</div>
									<div class="col-sm-6 form-group">
										<label for="email" class="form-label">Stock</label>
										<input type="email" class="form-control" id="email">
									</div>
									<div class="col-sm-12 form-group">
										<label for="address" class="form-label">Summary</label>
										<textarea name="address" id="address" class="form-control" rows="3"></textarea>
									</div>
									<div class="col-sm-12 form-group">
										<label for="address" class="form-label">Description</label>
										<textarea name="address" id="address" class="form-control" rows="5"></textarea>
									</div>
									<div class="col-sm-6 form-group">
										<label for="category" class="form-label">Category</label>
										<select name="category" class="form-control">
											<option value="">One</option>
											<option value="">Two</option>
											<option value="">Three</option>
										</select>
									</div>
									<div class="col-sm-6 form-group">
										<form>
											<div class="form-group">
												<label for="exampleFormControlFile1">Photo</label>
												<input type="file" class="form-control" id="exampleFormControlFile1">
											</div>
										</form>
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