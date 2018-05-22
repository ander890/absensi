<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	.header {
		background-color: #EEEEEE;
		padding: 10px;
		margin: auto;
		text-align: center;
	}

	#daftar {
		color: white;
	}
</style>
</head>
<body>
	<div class="header">
		<h1 class="display-3"> Masuk </h1>
	</div>
	<center>
		<div class="container">
			<div class="col-md-5 col-md-offset-5">

				<br><br>
				<div class="login-panel panel panel-default">
					<form method="POST" action="proses.php">
						<div class="form-group">
							<fieldset>

								<div class="panel-body">

									<label for="username">Username :</label>

									<input type="text" id="username" class="form-control" name="username" placeholder="Username">

									<label for="password">Password :</label>

									<input type="password" id="password" class="form-control" name="password" placeholder="Password">
									<br>

									<input type="submit" class="btn btn-success btn-block" name="masuk" value="Masuk">
									<a id = "daftar" class="btn btn-success btn-block"> Daftar </a>
								</div>

							</fieldset>
						</div>
					</form>
				</div>
			</div>
		</center>
	</body>
	</html>