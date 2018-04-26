<?php 
$current_page = 'products';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<?php require_once($abs_path.'/admin/partials/navigation.php') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php require_once($abs_path.'/admin/partials/sidebar-menu.php') ?>
		</div>

		<div class="col-sm-9">
			<ul class="list-group mb-3">
				<li class="list-group-item active text-center">
					<h4>Products</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center" width="5%">#</th>
								<th class="text-center" width="50%">Product</th>
								<th class="text-center" width="20%">Stock</th>
								<th class="text-center" width="25%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Lorem ipsum</td>
								<td class="text-center">10</td>
								<td class="text-center">
									<button type="button" class="btn btn-secondary btn-sm">Edit</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Lorem ipsum</td>
								<td class="text-center">10</td>
								<td class="text-center">
									<button type="button" class="btn btn-secondary btn-sm">Edit</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Lorem ipsum</td>
								<td class="text-center">10</td>
								<td class="text-center">
									<button type="button" class="btn btn-secondary btn-sm">Edit</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Lorem ipsum</td>
								<td class="text-center">10</td>
								<td class="text-center">
									<button type="button" class="btn btn-secondary btn-sm">Edit</button>
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>