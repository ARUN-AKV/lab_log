<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<style type="text/css">
		input
		{
			margin-bottom: 2em;
		}
	</style>
</head>
<body>
	<form method="post" action="../app/validate.php">
		<div class="container">
				<h1 class="page-header">
					Adminstrator
				</h1>
					<input class="form-control transparent-input" placeholder="Username" name="username" required autofocus />
					<input class="form-control transparent-input" type="password" name="password" placeholder="Password" required  />
				<button class="form-control btn btn-success">
					Login
				</button>
			</div>
		</div>
	</form>
</body>
</html>