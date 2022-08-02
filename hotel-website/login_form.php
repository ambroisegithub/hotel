<?php
session_start();
include 'config.php';

 if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $cpass = $_POST['cpassword'];
  //  $cpass = md5( $_POST['cpassword']);

   $select = "SELECT * FROM users WHERE email = '$email'  && password ='$cpass'";
   $result = mysqli_query($conn, $select);
 
  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($row['user_type'] == 'admin') {

      $_SESSION['admin_name'] = $row['names'];
      header('location:admin_page.php');

    }elseif($row['user_type'] == 'user') {

      $_SESSION['user_name'] = $row['names'];
      header('location:user_page.php');
    }
 }else {
  $error[] = 'Incorrect Email or Password!';
 }
 };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form method="post">
            <h3>login now</h3>
            
            <?php
            
            if(isset($error)) {
             foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
             };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="cpassword" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <a href=""><i>Forget Password.</i></a>
     <p>Don't have an account? <a href="register_form.php">Register now</a></p>   
</form>
</div>
</body>
</html>