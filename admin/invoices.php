<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
  header('location: /admin/login.php');
}

$current_page = 'invoices';
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
					<h4>Invoices</h4>
				</li>
			</ul>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center" width="5%">Id</th>
								<th class="text-center" width="50%">Customer</th>
								<th class="text-center" width="25%">Date</th>
								<th class="text-center" width="300px"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>21</td>
								<td>
									<a href="/admin/invoices-show.php">Lorem ipsum</a>
								</td>
								<td class="text-center">12 April 2018</td>
								<td class="text-center">
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>132</td>
								<td>
									<a href="/admin/invoices-show.php">Lorem ipsum</a>
								</td>
								<td class="text-center">12 April 2018</td>
								<td class="text-center">
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>112</td>
								<td>
									<a href="/admin/invoices-show.php">Lorem ipsum</a>
								</td>
								<td class="text-center">12 April 2018</td>
								<td class="text-center">
									<button type="button" class="btn btn-danger btn-sm">Delete</button>
								</td>
							</tr>
							<tr>
								<td>331</td>
								<td>
									<a href="/admin/invoices-show.php">Lorem ipsum</a>
								</td>
								<td class="text-center">12 April 2018</td>
								<td class="text-center">
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