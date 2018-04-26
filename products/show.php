<?php 
$current_page = 'products';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<?php require_once($abs_path.'/partials/navigation.php') ?>
		</div>
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
							<img src="http://via.placeholder.com/400/eee" alt="">
						</div>
						<div class="col-6 pl-5">
							<h4 class="mb-3">Product one</h4>
							<h5>RM 130.00</h5>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus quos ea dolore rem, molestias laudantium et explicabo assumenda fugiat deserunt in, facilis laborum excepturi aliquid nobis ipsam deleniti aut? Aliquid sit hic id velit qui fuga nemo suscipit obcaecati. Officia nisi quaerat minus nulla saepe aperiam sint possimus magni veniam provident.</p>
							<hr>
							<form class="form row">
								<div class="col-12">
									<label for="inputPassword6">Quantity</label>
								</div>
								<div class="col-6">
									<input type="number" class="form-control" id="quantity">
								</div>
								<div class="col-6">
									<button type="submit" class="btn btn-primary">Add to Cart</button>
								</div>
							</form>
						</div>
					</div>
					<!-- end row -->
				</div>
				<!-- end card-body -->
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>