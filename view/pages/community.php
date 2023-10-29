<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/aStuff/public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
    <?php
        session_start();
        // Check if the 'alert' parameter exists in the URL
        if($_SESSION['status'] !="login"){
            header("location:../auth/login.php");
        }
    ?>
     <div class="hero">
        <?php include('../layouts/navbar.php'); ?>
    </div>
    <div class="container">
        <form action="/aStuff/controllers/artsCommunityController.php" method="post">
        <div class="card" style="width: 1400px; margin:20px 20px">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['nickname']?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Welcome to Community forum , what's been up to lately?</h6>
                <div class="row">
						<div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="form_dsc" name="form_dsc"></textarea>
                            <label for="floatingTextarea" style="padding: 20px 20px;" class="text-secondary">Whats up?</label>
                            </div>
						</div>
                <button type="submit" class="btn btn-dark card-link" style="margin-top: 20px;">Post</button>
            </div>
        </div>
        </form>
        <?php
            include('../../models/dataBaseConn.php');
            $data = mysqli_query($koneksi,"select * from form");
            while($d = mysqli_fetch_array($data)){
        ?>
       <div class="card" style="width: 1400px; margin:20px 20px">
            <div class="card-body">
                <h5 class="card-title" style="padding:20px;"><?php echo $d['name']; ?> <a type="button" class="btn-close float-end btn-sm" aria-label="Close" href="/aStuff/controllers/artsCommunityDeleteController.php?id_form=<?php echo $d['id_form']; ?>"></a></h5>
                
                <div class="row">
						<div class="form-floating">
                            <p class="text" placeholder="Leave a comment here" id="form_dsc" name="form_dsc" style="padding: 20px 20px;"><?php echo $d['form_dsc']; ?></p>
                        </div>
				</div>
            </div>
        </div>
        <?php }?>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
</body>
</html>