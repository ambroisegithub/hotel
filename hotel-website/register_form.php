<?php
session_start();
include 'config.php';

 if(isset($_POST['submit'])){
   $name =$_POST['name'];
   $email =$_POST['email']; 
   $pass =$_POST['password'];
   $cpass =$_POST['cpassword'];
   $user_type = $_POST['user_type'];
   $password = $_POST['password'];
   
$select = "SELECT * FROM users WHERE email = '$email' && password ='$pass'";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0) {
  
    $error[] = 'user are Already exist';  
   
 }else {
    if ($pass != $cpass) {
        $error[] = 'Password Not Matched!';
    }else {
        $insert = "INSERT INTO `users`(`names`, `email`, `user_type`, `password`) VALUES('$name','$email','$user_type','$password')";
        mysqli_query($conn,$insert);
        header('location:login_form.php');
    }
 }
 };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="register_form.php" method="post">
            <h3>register now</h3>
            <?php
            
            if(isset($error)) {
             foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
             };
            ?>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="text" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
    <input type="submit" name="submit" value="register now" class="form-btn">
     <p>already have an account? <a href="login_form.php">login now</a></p>   
</form>
</div>
</body>
</html>