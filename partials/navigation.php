<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="/">EasyFresh</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php echo $current_page == 'home' ? 'active' : ''; ?>">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $current_page == 'products' ? 'active' : ''; ?>">
        <a class="nav-link" href="/products/">Products </a>
      </li>
      <li class="nav-item <?php echo $current_page == 'checkout' ? 'active' : ''; ?>">
        <a class="nav-link btn btn-primary text-white" href="/products/checkout.php">Checkout</a>
      </li>
    </ul>
  </div>
</nav>