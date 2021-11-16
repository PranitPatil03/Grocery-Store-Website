<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="main-container">
    <div class="container">
        <p class="login-text">Sign up  with social media</p>
        <div class="login-social">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i> Facebook </a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> GooglePlus</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>

        <form action="sign.php" method="post" class="login-email">
            <p class="login-text">Sign up with email</p>
            <div class="input-group">
                <input type="Text" name="name" placeholder="Your Name" required>
            </div>
            <div class="input-group">
                <input type="email"  name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="text"  name="number" placeholder="Contact Number" required>
            </div>
            <div class="input-group">
                <button class="btn">Sign In</button>
            </div>
        </form>

        
<!-- 
        <form class="sign.php" action="#" method="post">
				<h2>Sign up </h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="   name" id="full-name" class="input-text" placeholder="Your Name" required>
					</div>
					<div class="form-row">
						<input type="email" name="email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					</div>
					<div class="form-row">
						<input type="text" name="number" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="btn" value="Register">
				</div>
			</form>
    </div> -->
</div>    
</body>
</html>