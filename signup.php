<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="http://atdplogs.berkeley.edu/yzhong/aic/_test/stylesheet.css">
</head>
<body>
	<div class="navbar">
		<img src="logo.jpg" alt="logo" id="logo">
		<nav>
			<a href="home.php" class="link">home</a>
			<a href="essays.php" class="link">essays</a>
			<a href="contact.php" class="link">contact</a>
			<a href="signup.php" class="link">sign up</a>
		</nav>
	</div>
	<div>
				<form action="newAccount.php" method="post">
		<h1>Create a penflower account</h1>
			<h3>Basic User Information:</h3>
			<div>
				<p>First Name: <input type="text" name="firstName" required="" maxlength="15"></p>
				<p>Last Name: <input type="text" name="lastName" required="" maxlength="30"></p>
				<p>Date of Birth: <input type="date" name="dob" required=""></p>
				<p>Email: <input type="email" name="email" required=""></p>
			</div>
			<h3>Player Profile:</h3>
			<div>
				<p>Username: <input type="text" name="username" required="" maxlength="15"></p>
				<p>Password: <input type="password" name="password" required=""></p>
				<p>Confirm Password: <input type="password" name="password2" required=""></p>
			</div>
			<br>
			<input type="submit" value="Create Account">
		</form>
		<br>
		<p><span>Already have an account?</span> <a href="login.php">Sign In!</a></p>
	</div>
  </body>
  </html>
