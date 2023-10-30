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
    <?php
        include('../../models/dataBaseConn.php');
        $id_form = $_GET['id_form'];
        $data = mysqli_query($koneksi,"SELECT * FROM form WHERE id_form='$id_form'");
        while($d = mysqli_fetch_array($data)){
	?>
        <div class="container">
            <form style="margin: 20px 20px; padding:20px 20px;" method="post" action="/aStuff/controllers/artsCommunityEditController.php" enctype="multipart/form-data">
            <input type="hidden" name="id_form" value="<?php echo $d['id_form'];?>">
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="name"  value="<?php echo $d['name'];?>"/> 
                <label class="form-label" >Author Name</label>
            </div>


            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="form_dsc"  value="<?php echo $d['form_dsc'];?>"/>
                <label class="form-label" >Form Description</label>
            </div>

            <!-- Submit button -->
            <input type="submit" class="btn btn-dark btn-block mb-4" value="Submit"></input>
            </form>
            <?php } ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>