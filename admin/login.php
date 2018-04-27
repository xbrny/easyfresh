<?php
session_start();
if(isset($_SESSION['logged_in'])) {
  header('location: /admin/');
}

require_once($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/database-connection.php');

$msg = '';
$email = '';
$password = '';

if($_POST) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT email, password, username FROM users WHERE email='$email' AND password='$password'";

	$user = $conn->query($sql);
	if($user->num_rows > 0) {
		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['email'] = $email;
		header('Location: /admin/');
	} else {
		$msg = 'Invalid email and password';
	}
}
?>
<div class="container d-flex justify-content-center align-items-center flex-column full-height">
	<h2><a class="text-fresh font-weight-bold no-deco" href="/">EasyFresh</a></h2>
	<div class="card mt-3 mb-5" style="width: 400px;">
		<div class="card-header text-center">
			Admin Login
		</div>
		<div class="card-body">
			<?php if(!empty($msg)) : ?>
				<div>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php echo $msg; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<?php
				$msg = '';
			endif
			?>
			<form method="post">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php echo $email ?>" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password ?>" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>
		</div>
	</div>
</div>

<?php require_once($abs_path.'/partials/footer.php') ?>