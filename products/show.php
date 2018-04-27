<?php 
$current_page = 'products';
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/products-edit.php');
$current_category = $category_id;
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<?php require_once($abs_path.'/partials/navigation.php') ?>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php require_once($abs_path.'/partials/category-list.php') ?>
		</div>

		<div class="col-sm-9">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<img src="<?php echo $photo; ?>" alt="<?php echo $name; ?>" width="400" height="400">
						</div>
						<div class="col-6 pl-5">
							<h4 class="mb-3"><?php echo $name; ?></h4>
							<h5>RM <?php echo $price; ?></h5>
							<hr>
							<p><?php echo $summary; ?></p>
							<hr>
							<?php if($stock <= 0) : ?>
							<div class="text-danger mb-2">
								Out of stock
							</div>
							<?php else : ?>
							<form class="form row" method="POST" action="/admin/functions/basket-create.php">
								<div class="col-12">
									<label for="inputPassword6">Quantity</label>
								</div>
								<div class="col-4">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
									<input type="hidden" name="price" value="<?php echo $price; ?>">
									<input type="hidden" name="name" value="<?php echo $name; ?>">
									<input type="number" name="quantity" class="form-control" id="quantity" value="1" min="0" step="0.1">
								</div>
								<div class="col-2">
									<label class="col-form-label">Kg</label>
								</div>
								<div class="col-6">
									<button type="submit" class="btn btn-primary">Add to Cart</button>
								</div>
							</form>
							<?php endif ?>
						</div>
					</div>
					<!-- end row -->
				</div>
				<!-- end card-body -->
			</div>
			<!-- end card -->
			<div class="card mt-4 mb-5" style="max-width: 100%;">
				<div class="card-header">Product description</div>
				<div class="card-body">
					<p class="card-text"><?php echo $description; ?></p>
				</div>
			</div>
		</div>
		<!-- end col -->
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>