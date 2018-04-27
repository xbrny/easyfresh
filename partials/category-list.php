<?php require($_SERVER['DOCUMENT_ROOT'].'/admin/functions/categories.php'); ?>
<ul class="list-group">
<a href="/products" class="list-group-item list-group-item-action <?php echo $current_category == 'all' ? 'active' : ''; ?>">All</a>
<?php if ($categories->num_rows > 0) : ?>
	<?php while($row = $categories->fetch_assoc()) : ?>
	<a href="/products?category=<?php echo $row["id"] ?>" class="list-group-item list-group-item-action <?php echo $current_category == $row["id"] ? 'active' : ''; ?>"><?php echo $row["name"] ?></a>
	<?php endwhile ?>
<?php else: ?>
	<a href="#" class="list-group-item list-group-item-action disabled">No category created</a>
<?php endif ?>
</ul>