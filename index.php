<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SI Booking Hotel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card border-primary w-50">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form action="login-proses.php" method="POST">
					<div class="form-group">
						<label for="InputEmail1">Username</label>
						<input class="form-control" name="username" type="username" placeholder="Username" required>
					</div>
					<div class="form-group">
            			<label for="InputPassword1">Password</label>
            			<input class="form-control" name="password" id="pswd" type="password"  placeholder="Password" required>
          			</div>
          			<div class="form-group">
          				<div class="form-checkbox">
          					<label class="form-check-label"></label>
          					<input type="checkbox" id="show" onclick="showpw()">
          					<label id="showhide" class="label"> Tampilkan Password</label>
          				</div>
          			</div>
                <input type="submit" class="btn btn-primary btn-block" value="LOGIN"></a>
          		</form>
          		<div class="text-center">
          			<a class="d-block small mt-3" href="registrasi.php">Daftar Akun</a>
          		</div>
          	</div>
        </div>
    </div>

<!-- JS show pw -->
<script>
function showpw() {
  var x = document.getElementById("pswd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>