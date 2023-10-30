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
        $id_art = $_GET['id_art'];
        $data = mysqli_query($koneksi,"SELECT * FROM arts WHERE id_art='$id_art'");
        while($d = mysqli_fetch_array($data)){
	?>
        <div class="container">
            <form style="margin: 20px 20px; padding:20px 20px;" method="post" action="/aStuff/controllers/artsEditController.php" enctype="multipart/form-data">
            <input type="hidden" name="id_art" value="<?php echo $d['id_art'];?>">
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="art_name"  value="<?php echo $d['art_name'];?>"/> 
                <label class="form-label" >Art Name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="date" class="form-control" name="date_added"  value="<?php echo $d['date_added'];?>"/>
                <label class="form-label" >Date Added</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="name"  value="<?php echo $d['name'];?>"/>
                <label class="form-label" >Name</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" class="form-control" name="price"  value="<?php echo $d['price'];?>"/>
                <label class="form-label" >Price</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="owner"  value="<?php echo $d['owner'];?>"/>
                <label class="form-label" >Owner</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="nickname"  value="<?php echo $d['nickname'];?>"/>
                <label class="form-label" >Nickname</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="dsc"  value="<?php echo $d['dsc'];?>"/>
                <label class="form-label" >Description</label>
            </div>

            <!-- Submit button -->
            <input type="submit" class="btn btn-dark btn-block mb-4" value="Submit"></input>
            </form>
            <?php } ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>