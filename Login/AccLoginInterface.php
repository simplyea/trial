<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
 <nav>FKIS SYSTEM</nav>
	<center>
	USER LOGIN :
<?php 
	if(isset($_GET['login'])){
		if($_GET['login']=="fail"){
			echo "<div class='alert'>Username dan Password are not correct!</div>";
		}
	}
	?>
	
	
		<form action="LoginController.php" method="post">
			
			
			<br>
			<label>Username :</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<br><br>

			<label>Password :</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<br><br>

			<label for="Level">User Type :</label>
                <select id="Level" name="level" class="form_login">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="treasurer">Treasurer</option>
                    
			
                </select>
				<br><br>

				<button class="button">Login</button>
			
			
		</form>
		<p><a href="RecoveryInterface.php">Forgot Password</a></p>
</center>
 
</body>
</html>