<?php 
$current_page = 'categories';
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/categories.php');
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
					<h4>Categories</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center" width="5%">#</th>
								<th class="text-center" width="70%">Category</th>
								<th class="text-center" width="25%"></th>
							</tr>
						</thead>
						<tbody>
							<?php if ($result->num_rows > 0) : ?>
								<?php while($row = $result->fetch_assoc()) : ?>
								<tr>
									<td><?php echo $row["id"] ?></td>
									<td><?php echo $row["name"] ?></td>
									<td class="text-center">
										<a class="btn btn-secondary btn-sm" href="/admin/categories-create.php?id=<?php echo $row["id"] ?>" role="button">Edit</a>
										<a class="btn btn-danger btn-sm" href="/admin/functions/categories-delete.php?id=<?php echo $row["id"] ?>" role="button">Delete</a>
									</td>
								</tr>
								<?php endwhile ?>
							<?php else : ?>
							<tr>
								<td colspan="3" class="text-center">No categories found</td>
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