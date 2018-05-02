<?php 
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'orders';
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/orders-edit.php');
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
									<span class="badge <?php
										if($status == 'pending') {
											echo 'badge-danger';
										} elseif($status == 'processing') {
											echo 'badge-warning';
										} else {
											echo 'badge-success';
										}
										?>">
										<?php echo $status ?>
									</span>
								</td>
							</tr>
							<tr>
								<td width="25%">Invoice ID</td>
								<td><?php echo $id; ?></td>
							</tr>
							<tr>
								<td width="25%">First name</td>
								<td><?php echo $first_name; ?></td>
							</tr>
							<tr>
								<td width="25%">Last name</td>
								<td><?php echo $last_name; ?></td>
							</tr>
							<tr>
								<td width="25%">Email</td>
								<td><?php echo $email; ?></td>
							</tr>
							<tr>
								<td width="25%">Phone number</td>
								<td><?php echo $phone_number; ?></td>
							</tr>
							<tr>
								<td width="25%">Address</td>
								<td><?php echo $address; ?></td>
							</tr>
							<tr>
								<td width="25%">Payment date</td>
								<td><?php echo $created_date; ?></td>
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
							<?php if ($products->num_rows > 0) : 
								$total = 0; 
								$count = 1 ?>
								<?php while($row = $products->fetch_assoc()) :
									$total += ($row['price'] *  $row['quantity']) ?>
									<tr>
										<td><?php echo $count++ ?></td>
										<td><?php echo $row['product_name'] ?></td>
										<td><?php echo $row['quantity'] ?> <?php echo $row['measurement'] ?></td>
										<td>RM <?php echo ($row['price'] *  $row['quantity']); ?></td>
									</tr>
								<?php endwhile ?>
							<?php endif ?>
							<tr>
								<td colspan="3"></td>
								<td colspan="1"><strong>Subtotal: RM <?php echo $total ?></strong></td>
							</tr>
						</tbody>
					</table>
					<div class="text-right">
						<button type="button" class="btn btn-primary" onclick="window.print();">Print</button>
						<a class="btn btn-secondary" href="/admin/orders-edit.php?id=<?php echo $id ?>">Edit</a>
						<a class="btn btn-danger" href="/admin/functions/orders-delete.php?id=<?php echo $id ?>">Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>