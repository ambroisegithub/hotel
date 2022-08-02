<?php
require("hotel.php");
$greetings = "welcome from webserver";
if(isset($_POST['sub'])){
$names = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["psw"];
$reaptpass = $_POST["psw-repeat"];
$query ="INSERT INTO  user2(name,email,password,reaptpass) VALUES("$names","$email","$password","$reaptpass")";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form1.css">
</head>
<body>
<h1>Registeration Form Example</h1>
<form method="post">
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter your names" name="name" required>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<hr>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
<input type="submit" value="register" name="register">
</div>
<div class="signin">
<p>Already have an account? <a href="#">Sign in</a>.</p>
</div>
</form>
</body>
</html>