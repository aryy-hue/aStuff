<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astuff | Galery | Marketplace</title>
    <link rel="stylesheet" href="/aStuff/public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php 
    session_start();
    if($_SESSION['status'] !="login"){
      header("location:../auth/login.php");
    }
    ?>
    <div class="hero">
        <?php include('../layouts/navbar.php'); ?>
    </div>
   
    <div class="container">
        <?php include('../../models/dataBaseConn.php');?>
        <?php
            $data = mysqli_query($koneksi,"select * from arts");
            while($d = mysqli_fetch_array($data)){
        ?>
            <div class="container-market" >
                <div class="marketplace">
                    <div class="market-img">
                        <a href="artDetail.php?id_art=<?php echo $d['id_art']; ?>"><img src="../../public/uploads/<?php echo $d['img'] ?>" alt="highlight"></a>
                    </div>
                    <div class="market-info">
                        <p>
                            <img src="/aStuff/public/img/artist.jpg" alt="Artist" class="artist">@ <?php echo $d['name']; ?></p>
                        <p class="price"><strong>Price</strong><br>  <?php echo $d['price']; ?> Ξ</p>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <?php include('../layouts/footer.php'); ?>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>