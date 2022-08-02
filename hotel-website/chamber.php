<?php
session_start();
include 'conn.php';
if(isset($_POST['submit'])){
    $date =$_POST['date'];
    $room_price =$_POST['room_price']; 
    $room_type =$_POST['room_type'];
    $email =$_POST['email'];
         $insert = "INSERT INTO `room`(`date`, `room_price`, `room_type`, `email`) VALUES('$date','$room_price','$room_type','$email')";
         mysqli_query($con,$insert);
        
     }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chamber</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="chamber.php" method="post">
    <section class="hotels">
        <h5 class="section-head">
          <span class="heading">chamber</span>
          <span class="sub-heading"> book Our Beautiful  Chamber</span>
        </h5>  
        <div class="grid">
          <div class="grid-item featured-hotels">
              <img src="Doubleroom.jpg" alt="" class="hotel-image">
              <h5 class="hotel-name">Single Room</h5>
              <span class="hotel-price">From $200/Night</span>
              <div class="hotel-rating">
                  <i class="fa fa-star rating"></i>
                  <i class="fa fa-star rating"></i>
                  <i class="fa fa-star rating"></i>
                  <i class="fa fa-star rating"></i>
                  <i class="fa fa-star-half rating"></i>
                  <br>
                      <br>
  
              </div>
          </div>


              <div class="grid-item featured-hotels">
                  <img src="double-room2.jpg" alt="" class="hotel-image">
                  <h5 class="hotel-name">Double Room</h5>
                  <span class="hotel-price">From $300/Night</span>
                  <div class="hotel-rating">
                      <i class="fa fa-star rating"></i>
                      <i class="fa fa-star rating"></i>
                      <i class="fa fa-star rating"></i>
                      <i class="fa fa-star rating"></i>
                      <i class="fa fa-star rating"></i>
                      <br>
                      <br>
                 
                  </div> 
              </div>
                  <div class="grid-item featured-hotels">

                        <form action="" class="contact">
                            <div class="input-group-wrap">
                                <div class="input-group">
                                    <input type="date" name="date" class="input" placeholder="date" required>
                                    <span class="bar"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="room_price" class="input" placeholder="Room price" required>
                                    <span class="bar"></span>
                                </div>
                            </div>
                                <div class="input-group">
                                    <div class="input-group">
                                        <label for="rooms"  class="input-label" ></label>
                                        <select name="room_type" id="adults" class="options">
                                            <option value="0">Single room</option>
                                            <option value="1">Double</option>
                                        </select>
                                        </div>
                                
                                <div class="input-group">
                                    <textarea   name="email" class="input" cols="30" rows="8" placeholder="E-mail" required></textarea>
                                    <span class="bar"></span>
                                </div>
                                <input type="submit" name="submit" value="Book Now" class="btn form-btn btn-purple">
                
                    <span class="dots"><i class="fa fa-ellipsis-h"></i></span>
                             
                        </form>
                  </div>
        </div>
      </section>
</body>
</html>