<?php 
$current_page = 'products.create';

if(isset($_GET['id'])) {
	require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/products-edit.php');
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
					<h4>Edit Product</h4>
					<?php else : ?>
					<h4>Add Product</h4>
					<?php endif ?>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<form class="needs-validation" enctype="multipart/form-data" method="POST"
								action="<?php echo isset($id) ? "/admin/functions/products-update.php?id=$id" : '/admin/functions/products-store.php' ?>">
								<div class="form-group row">
									<div class="col-sm-12 form-group">
										<label for="name" class="form-label">Product name</label>
										<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
										<input type="text" class="form-control" name="name" id="name" required
											value="<?php echo isset($name) ? $name : '' ?>">
									</div>
									<div class="col-sm-4 form-group">
										<label for="price" class="form-label">Price</label>
										<input type="number" class="form-control" name="price" id="price" step="0.01" required
											value="<?php echo isset($price) ? $price : '' ?>">
									</div>
									<div class="col-sm-4 form-group">
										<label for="measurement" class="form-label">Measurement</label>
										<input type="text" class="form-control" name="measurement" id="measurement" placeholder="Kg or Pack or Bottle etc."
											required
											value="<?php echo isset($measurement) ? $measurement : '' ?>">
									</div>
									<div class="col-sm-4 form-group">
										<label for="stock" class="form-label">Stock</label>
										<input type="number" class="form-control" name="stock" id="stock" required
											value="<?php echo isset($stock) ? $stock : '' ?>">
									</div>
									<div class="col-sm-12 form-group">
										<label for="summary" class="form-label">Summary</label>
										<textarea name="summary" name="summary" id="summary" class="form-control" rows="3"><?php echo isset($summary) ? $summary : '' ?></textarea>
									</div>
									<div class="col-sm-12 form-group">
										<label for="description" class="form-label">Description</label>
										<textarea name="description" name="description" id="description" class="form-control" rows="5"><?php echo isset($description) ? $description : '' ?></textarea>
									</div>
									<div class="col-sm-6 form-group">
										<label for="category_id" class="form-label">Category</label>
										<select name="category_id" name="category_id" id="category_id" class="form-control" required>
											<option value="">Select one</option>
											<option value="1" <?php echo (isset($category_id) && $category_id == 1) ? 'selected' : '' ?>>One</option>
											<option value="2" <?php echo (isset($category_id) && $category_id == 2) ? 'selected' : '' ?>>Two</option>
											<option value="3" <?php echo (isset($category_id) && $category_id == 3) ? 'selected' : '' ?>>Three</option>
										</select>
									</div>
									<div class="col-sm-6 form-group">
										<div class="form-group">
												<label for="photo">Photo</label>
												<input type="file" class="form-control" name="photo" id="photo" >
												<input type="hidden" name="existing_photo" value="<?php echo isset($photo) ? $photo : '' ?>">
											</div>
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