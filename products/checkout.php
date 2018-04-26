<?php 
$current_page = 'checkout';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<?php require_once($abs_path.'/partials/navigation.php') ?>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<ul class="list-group mb-3">
				<li class="list-group-item active text-center">
					<h4>Checkout</h4>
				</li>
			</ul>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th width="5%">#</th>
						<th width="45%">Product</th>
						<th width="15%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Lorem ipsum.</td>
						<td>10</td>
						<td>RM 30.00</td>
						<td class="text-center"><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
					</tr>
					<tr>
						<td>1</td>
						<td>Lorem ipsum.</td>
						<td>10</td>
						<td>RM 30.00</td>
						<td class="text-center"><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td colspan="2"><strong>Subtotal: RM 100.00</strong></td>
					</tr>
				</tbody>
			</table>
			<div>
				<a class="btn btn-link float-left" href="/products" role="button">Shop more</a>
				<a class="btn btn-primary float-right" href="/products/payment.php" role="button">Pay Now</a>
			</div>
		</div>
		<!-- end col -->
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>