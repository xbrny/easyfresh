<?php 
$current_page = 'products';
if(isset($_GET['category'])) {
	$category_id = $_GET['category'];
	require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/products.php');
	$current_category = $category_id;
} else {
	$current_category = 'all';
	require_once($_SERVER['DOCUMENT_ROOT'].'/admin/functions/products.php');
}
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container">
	<div class="row mb-3">
		<?php require_once($abs_path.'/partials/navigation.php') ?>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<?php require_once($abs_path.'/partials/category-list.php') ?>
		</div>

		<div class="col-sm-9">
			<div class="row">
			<?php if ($products->num_rows > 0) : ?>
				<?php while($row = $products->fetch_assoc()) : ?>
					<div class="col-4">
						<div class="card mb-5 text-center" style="width: 100%;">
							<a href="/products/show.php?id=<?php echo $row["id"] ?>">
								<img class="card-img-top p-3 rounded" src="<?php echo $row["photo"] ?>" alt="<?php echo $row["name"] ?>" width="200" height="200">
							</a>
							<div class="card-body text-center">
								<a href="/products/show.php?id=<?php echo $row["id"] ?>">
									<h5 class="card-title"><?php echo $row["name"] ?></h5>
								</a>
								<p class="card-text">RM <?php echo $row["price"] ?></p>
								<a href="/products/show.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">View</a>
							</div>
						</div>
					</div>
				<?php endwhile ?>
			<?php else: ?>
				<div class="col-12">
					<div class="card mb-5" style="width: 100%;">
						<div class="card-body text-center">
							<p class="card-text text-muted">No product in this category</p>
						</div>
					</div>
				</div>				
			<?php endif ?>
			</div>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>