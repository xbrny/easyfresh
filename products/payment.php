<?php 
$current_page = 'checkout';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<?php require_once($abs_path.'/partials/navigation.php') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<ul class="list-group mb-3">
				<li class="list-group-item active text-center">
					<h4>Pay</h4>
				</li>
			</ul>

			<div class="card">
				<div class="card-body">
					<form>
						<div class="form-group row">
							<div class="col-sm-6 form-group">
								<label for="first_name" class="form-label">First name</label>
								<input type="text" class="form-control" id="first_name">
							</div>
							<div class="col-sm-6 form-group">
								<label for="last_name" class="form-label">Last name</label>
								<input type="text" class="form-control" id="last_name">
							</div>
							<div class="col-sm-6 form-group">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="col-sm-6 form-group">
								<label for="phone_number" class="form-label">Phone number</label>
								<input type="text" class="form-control" id="phone_number">
							</div>
							<div class="col-sm-12 form-group">
								<label for="address" class="form-label">Address</label>
								<textarea name="address" id="address" class="form-control" rows="5"></textarea>
							</div>
							<div class="col-sm-6 form-group">
								<label for="card_number" class="form-label">Card Number</label>
								<input type="number" class="form-control" id="card_number">
							</div>
							<div class="col-sm-3 form-group">
								<label for="expiry_date" class="form-label">Expiry date</label>
								<input type="text" class="form-control" id="expiry_date" placeholder="MM/YY">
							</div>
							<div class="col-sm-3 form-group">
								<label for="ccv" class="form-label">CCV</label>
								<input type="number" class="form-control" id="ccv">
							</div>
							<div class="col-sm-12 form-group text-right">
								<a class="btn btn-link" href="/products/checkout.php" role="button">Back</a>
								<a class="btn btn-primary" href="/products/invoice.php" role="button">Submit</a>
								<!-- <button type="button" class="btn btn-primary">Submit</button> -->
							</div>
						</div>
					</form>
				</div>
				<!-- end card-body -->
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>