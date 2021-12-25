<?php include('RecoverController.php'); ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main2.css">
</head>
<body>
	<form class="login-form" action="RecoveryInterface.php" method="post">
		<h2 class="form-title">Reset password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>Your email address</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>
	</form>
	<p><center><p><a href="AccLoginInterface.php">BACK TO LOGIN PAGE</a></</center></p>
</body>
</html>