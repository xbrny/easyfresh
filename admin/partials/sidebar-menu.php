<ul class="list-group">
  <a href="/admin" class="list-group-item list-group-item-action <?php echo $current_page == 'products' ? 'active' : ''; ?>">Product</a>
  <a href="/admin/products-create.php" class="list-group-item list-group-item-action <?php echo $current_page == 'products.create' ? 'active' : ''; ?>">Add product</a>
  <a href="/admin/categories.php" class="list-group-item list-group-item-action <?php echo $current_page == 'categories' ? 'active' : ''; ?>">Category</a>
  <a href="/admin/categories-create.php" class="list-group-item list-group-item-action <?php echo $current_page == 'categories.create' ? 'active' : ''; ?>">Add category</a>
  <a href="/admin/orders.php" class="list-group-item list-group-item-action <?php echo $current_page == 'orders' ? 'active' : ''; ?>">Order</a>
  <a href="/admin/users.php" class="list-group-item list-group-item-action <?php echo $current_page == 'users' ? 'active' : ''; ?>">User</a>
  <a href="/admin/users-create.php" class="list-group-item list-group-item-action <?php echo $current_page == 'users.create' ? 'active' : ''; ?>">Add User</a>
</ul>