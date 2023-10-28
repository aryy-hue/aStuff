<!DOCTYPE html>
<html>
<head>
<title>Astuff | Galery | Marketplace</title>
    <link rel="stylesheet" href="/aStuff/public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
	 <div class="hero">
        <?php include('../layouts/navbar.php'); ?>
    </div>
	<div class="container">
        
        <?php
        include('../../models/dataBaseConn.php');
           // Periksa apakah parameter id_art ada di URL
            if(isset($_GET['id_art'])){
                // Ambil nilai id_art dari parameter URL
                $id_art = $_GET['id_art'];

                // Gunakan $id_art dalam kueri SQL
                $data = mysqli_query($koneksi, "SELECT * FROM arts WHERE id_art='$id_art'");
                while($d = mysqli_fetch_array($data)){
                ?>
            <div class="container-detail">
                <img src="../../public/uploads/<?php echo $d['img'] ?>" alt="img-detail">
                <div class="container-detail-sub">
                    <span class="material-symbols-outlined">visibility</span>
                    <img src="artDetail.php?id_art=<?php echo $d['id_art']; ?>" height="1" width="1">
                    <h1><strong><?php echo $d['art_name'] ?></strong></h1>
                    <p class="image-container">
                                    <img src="/aStuff/public/img/artist.jpg" alt="Artist" class="artist">Artist : <br>
                                    <strong>@<?php echo $d['name']; ?></strong>
                                    <img style="margin-left:100px ;float:right;"src="/aStuff/public/img/artist.jpg" alt="Artist" class="artist">Owner : <br>
                                    <strong>@<?php echo $d['owner']; ?></strong>
                    </p>
                    <h3>Description</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam harum tenetur provident eveniet aspernatur nihil placeat nulla? Similique ea debitis delectus laudantium ex. Voluptatem itaque in facere optio, voluptatum modi magni error assumenda consequuntur sapiente similique, exercitationem quas voluptate cumque aperiam, molestiae animi eius? Error magnam similique reiciendis facilis beatae.</p>
                    <p style="color: #C4C4C4;">Reserve Price <br>
                        <strong><?php echo $d['price']; ?> Ξ</strong>
                    </p>
                    <button type="button" class="btn btn-dark">Place Bid</button>
                </div>
            </div>
        <?php }
            } else {
                // Jika parameter id_art tidak ada, beri tanggapan atau redirect pengguna ke halaman lain
                echo "Parameter id_art tidak valid";
            }
        ?>
	</div>
	<?php include('../layouts/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script>
        const minusButton = document.getElementById('minus');
        const plusButton = document.getElementById('plus');
        const inputField = document.getElementById('input');

        minusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue - 1;
        });

        plusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue + 1;
        });
    </script>
</body>
</html>