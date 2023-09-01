<!DOCTYPE HTML>
<html>
<head>
<title>Login Sistem</title>
<link rel="stylesheet" type="text/css" href="images/style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">                             
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="animate.css">

<?php 	$level = 'admin'; ?>

<style type="text/css">
.kotak{
	margin-top: 150px;
}

.kotak .input-group{
	margin-bottom: 20px;
}
.judul {
	color: white;
}
body {
	background-size: cover;
}
</style>

</head>
<body>
	<br>

<div class="container">
	<div class="panel panel-default">
		<form action="cek-login.php" method="post">
			<div class="col-md-4 col-md-offset-4 kotak">
				<h3 class="judul animated fadeInUp">Silahkan Login ..</h3>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" class="form-control animated fadeInDown" placeholder="Username" name="username" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" class="form-control animated fadeInDown" placeholder="Password" name="password" required>
				</div>
				<div class="input-group">
					<input type="submit" name="log" class="btn btn-primary" value="Login">
				</div>
			</div>
		</form>

	</div>
	</div>

</body>
</html>
