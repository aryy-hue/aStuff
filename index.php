<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astuff | Galery | Marketplace</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<!doctype html>
    <?php 
    session_start();
    if($_SESSION['status'] !="login"){
      header("location:view/auth/login.php");
    }
    ?>
    <div class="hero">
        <?php include('view/layouts/navbar.php'); ?>
    </div>
    <div class="container-menu">
        <h2><strong>Collecting Art by using</strong><br> 
         Digital Cryptocurrency</h2>
         <div class="artwork-container">
            <img src="public/img/pc.gif" alt="highlight">
            <div class="artist-info">
                <p><img src="public/img/artist.jpg" alt="Artist" class='artist'>@unknown213</p>
                <p class="release"><strong>Release Date</strong><br> January 1, 2023</p>
            </div>
        </div>
    </div>
    <?php include('view/layouts/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>