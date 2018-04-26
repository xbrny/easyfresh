<?php 
$current_page = 'orders';
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
					<h4>Orders</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th colspan="2" class="text-center table">Customer information</th>
							</tr>
							<tr>
								<td width="25%">Status</td>
								<td>
									<form action="">
										<select name="category" class="form-control">
											<option value="">Pending</option>
											<option value="">Processing</option>
											<option value="">Processed</option>
										</select>
									</form>
								</td>
							</tr>
							<tr>
								<td width="25%">Order ID</td>
								<td>1223</td>
							</tr>
							<tr>
								<td width="25%">First name</td>
								<td>Lorem ipsum.</td>
							</tr>
							<tr>
								<td width="25%">Last name</td>
								<td>Lorem ipsum.</td>
							</tr>
							<tr>
								<td width="25%">Email</td>
								<td>Lorem ipsum.</td>
							</tr>
							<tr>
								<td width="25%">Phone number</td>
								<td>Lorem ipsum.</td>
							</tr>
							<tr>
								<td width="25%">Address</td>
								<td>Lorem ipsum.</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="45%">Product</th>
								<th width="15%">Quantity</th>
								<th width="20%">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Lorem ipsum.</td>
								<td>10</td>
								<td>RM 30.00</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Lorem ipsum.</td>
								<td>10</td>
								<td>RM 30.00</td>
							</tr>
							<tr>
								<td colspan="3"></td>
								<td colspan="1"><strong>Subtotal: RM 100.00</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>