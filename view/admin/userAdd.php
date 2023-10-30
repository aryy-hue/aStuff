<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<?php include('layouts/navbar.php'); ?>
    <?php 
        session_start();
        if($_SESSION['status'] !="login"){
            header("location:../auth/login.php");
        }
        ?>
        <div class="container">
            <form style="margin: 20px 20px; padding:20px 20px;" method="post" action="/aStuff/controllers/userAddController.php" enctype="multipart/form-data">
                
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="full_name"  value=""/>
                <label class="form-label" >Full Name</label>
            </div>
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="name"  value=""/> 
                <label class="form-label" >Name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="nickname"  value=""/>
                <label class="form-label" >Nickname</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="password" class="form-control" name="password"  value=""/>
                <label class="form-label" >Password</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" class="form-control" name="confirm_password"  value=""/>
                <label class="form-label" >Confirm Password</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" class="form-control" name="phone_number"  value=""/>
                <label class="form-label" >Phone Number</label>
            </div>

            <!-- Submit button -->
            <input type="submit" class="btn btn-dark btn-block mb-4" value="Submit"></input>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>