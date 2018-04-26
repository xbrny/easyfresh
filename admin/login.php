<?php 
$current_page = 'home';
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php') ?>

<div class="container d-flex justify-content-center align-items-center flex-column full-height">
	<h2><a class="text-fresh font-weight-bold no-deco" href="/">EasyFresh</a></h2>
	<div class="card mt-3 mb-5" style="width: 400px">
		<div class="card-header text-center">
			Admin Login
		</div>
		<div class="card-body">
			<form action="/admin">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>