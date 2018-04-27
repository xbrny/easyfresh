<?php 
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'users';
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/users.php');
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
					<h4>Products</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center" width="5%">#</th>
								<th class="text-center" width="50%">Username</th>
								<th class="text-center" width="20%">Email</th>
								<th class="text-center" width="25%"></th>
							</tr>
						</thead>
						<tbody>
							<?php if ($users->num_rows > 0) : ?>
								<?php while($row = $users->fetch_assoc()) : ?>
								<tr>
									<td><?php echo $row["id"] ?></td>
									<td><?php echo $row["username"] ?></td>
									<td><?php echo $row["email"] ?></td>
									<td class="text-center">
										<!-- <a class="btn btn-secondary btn-sm" href="/admin/users-create.php?id=<?php echo $row["id"] ?>">Edit</a> -->
										<a class="btn btn-danger btn-sm" href="/admin/functions/users-delete.php?id=<?php echo $row["id"] ?>">Delete</a>
									</td>
								</tr>
								<?php endwhile ?>
							<?php else : ?>
							<tr>
								<td colspan="4" class="text-center">No items found</td>
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