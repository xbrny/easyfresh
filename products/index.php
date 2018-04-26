<?php 
$current_page = 'products';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<?php require_once($abs_path.'/partials/navigation.php') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php require_once($abs_path.'/partials/category-list.php') ?>
		</div>

		<div class="col-sm-9">
			<ul class="list-group mb-3">
				<li class="list-group-item active text-center">
					<h4>All item</h4>
				</li>
			</ul>
			<div class="row">
				<?php for($i=0; $i < 9; $i++) : ?>
					<div class="col-4">
						<div class="card mb-5" style="width: 100%;">
							<img class="card-img-top" src="http://via.placeholder.com/200/eee" alt="Card image cap">
							<div class="card-body text-center">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">RM 10.00</p>
								<a href="/products/show.php" class="btn btn-primary">Add to basket</a>
							</div>
						</div>
					</div>
				<?php endfor ?>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>