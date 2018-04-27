<?php 
$current_page = 'checkout';
session_start();
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
					<?php
						$total = 0;
						if(isset($_SESSION['basket'])) :
						$basket = $_SESSION['basket'];  
						$count = 1 ?>
						<?php foreach($basket as $item) : 
							$total += ($item['price'] *  $item['quantity']) ?>
						<tr>
							<td><?php echo $count++ ?></td>
							<td><?php echo $item['name'] ?></td>
							<td><?php echo $item['quantity'] ?></td>
							<td>RM <?php echo ($item['price'] *  $item['quantity']); ?></td>
							<td class="text-center">
								<a class="btn btn-danger btn-sm" href="/admin/functions/basket-create.php?id=<?php echo $item["id"] ?>">Delete</a>
							</td>
						</tr>
						<?php endforeach ?>
					<?php else : ?>
						<tr>
							<td colspan="5" class="text-center text-muted">No item in basket</td>
						</tr>
					<?php endif ?>
					<tr>
						<td colspan="3"></td>
						<td colspan="2"><strong>Subtotal: RM <?php echo $total ?></strong></td>
					</tr>
				</tbody>
			</table>
			<div>
					<a class="btn btn-link float-left" href="/products" role="button">Shop more</a>
				<?php if(isset($_SESSION['basket']) && !empty($_SESSION['basket'])) : ?>
					<a class="btn btn-primary float-right ml-2" href="/products/payment.php" role="button">Pay Now</a>
					<a class="btn btn-danger float-right" href="/admin/functions/basket-create.php?clear=true" role="button">Clear Basket</a>
				<?php endif ?>
			</div>
		</div>
		<!-- end col -->
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>