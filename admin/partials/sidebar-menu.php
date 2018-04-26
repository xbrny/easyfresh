<ul class="list-group">
  <a href="/admin" class="list-group-item list-group-item-action <?php echo $current_page == 'products' ? 'active' : ''; ?>">Product</a>
  <a href="/admin/products-create.php" class="list-group-item list-group-item-action <?php echo $current_page == 'products.create' ? 'active' : ''; ?>">Add new product</a>
  <a href="/admin/categories.php" class="list-group-item list-group-item-action <?php echo $current_page == 'categories' ? 'active' : ''; ?>">Category</a>
  <a href="/admin/categories-create.php" class="list-group-item list-group-item-action <?php echo $current_page == 'categories.create' ? 'active' : ''; ?>">Add new category</a>
  <a href="/admin/orders.php" class="list-group-item list-group-item-action <?php echo $current_page == 'orders' ? 'active' : ''; ?>">Order</a>
  <a href="/admin/invoices.php" class="list-group-item list-group-item-action <?php echo $current_page == 'invoices' ? 'active' : ''; ?>">Invoice</a>
</ul>