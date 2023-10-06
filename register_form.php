<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reedwizer Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="form-container">
		<form method="post">
			<h3>register</h3>
			<input type="text" name="name" required placeholder="enter your name">
			<input type="email" name="email" required placeholder="enter your email">
			<input type="password" name="password" required placeholder="enter password name">
			<input type="password" name="cpassword" required placeholder="confirm password name">
			<select name="user_type">
				<option class="user">user</option>
				<option class="admin">admin</option>
			</select>
			<button type="submit " style="padding: 10px;width: 100%;border-radius: 5px;" value="register now" name="submit" class="form-btn"><a href="index.php">Send Messages</a></button>
			<p>already have an account? <a href="login_form.php">login now</a></p>
		</form>
	</div>
</body>
</html>