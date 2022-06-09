

<!DOCTYPE html>
<html>
<head>
	<title>Admin- Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

	<div class="container">
		
	<h1 style="text-align:center;">Admin - Login</h1>
	
	<div>
		<a href="home.php"><h3>Back Into Home page</h3></a><br><br>
	</div>
   <form action="verify.php" method="post">
   	<div class="col-md-6">
   	<label>Username:</label>
   	<input type="text" name="username" class="form-control">
   	<label>Password:</label>
   	<input type="password" name="password" class="form-control"><br>
   	<input type="submit" value="submit" class="btn btn-primary"><br>
   	</div>
   	
   </form>
   </div>
  
   
   

</body>
</html>