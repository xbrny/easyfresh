<?php 
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'orders';
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/orders.php');
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
						<thead>
							<tr>
								<th class="text-center" width="5%">Id</th>
								<th class="text-center" width="30%">Customer</th>
								<th class="text-center" width="20%">Status</th>
								<th class="text-center" width="20%">Order Date</th>
								<th class="text-center" width="300px"></th>
							</tr>
						</thead>
						<tbody>
							<?php if ($orders->num_rows > 0) : ?>
								<?php while($row = $orders->fetch_assoc()) : ?>
								<tr>
									<td><?php echo $row["id"] ?></td>
									<td>
										<a href="/admin/orders-show.php?id=<?php echo $row["id"] ?>"><?php echo $row["first_name"] . ' ' . $row["last_name"] ?></a>
									</td>
									<td class="text-center">
										<span class="w-75 badge <?php
											if($row["status"] == 'pending') {
												echo 'badge-danger';
											} elseif($row["status"] == 'processing') {
												echo 'badge-warning';
											} else {
												echo 'badge-success';
											}
											?>">
											<?php echo $row["status"] ?>
										</span>
									</td>
									<td class="text-center">
										<?php echo date("d F Y", strtotime($row['created_date'])); ?>
									</td>
									<td class="text-center">
										<a class="btn btn-secondary btn-sm" href="/admin/orders-edit.php?id=<?php echo $row["id"] ?>">Edit</a>
										<a class="btn btn-danger btn-sm" href="/admin/functions/orders-delete.php?id=<?php echo $row["id"] ?>">Delete</a>
									</td>
								</tr>
								<?php endwhile ?>
							<?php else : ?>
							<tr>
								<td colspan="5" class="text-center">No items found</td>
							</tr>
							<?php endif ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>