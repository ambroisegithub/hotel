<?php 
session_start();
$page_title = "password Reset Form";
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                <div class="alert alert-sucess">
                    <h5><?= $_SESSION['status']; ?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Reset your password</h5>
                    </div>
                    <div class="card-body p-4"> 
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Email Adress</label>
                               <br>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email Adress">
                            </div>
                    <div class="form-group mb-3">
                    <button type="submit" name="password_reset_link" class="btn btn-primary">Send Password reset link</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>