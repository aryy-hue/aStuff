<!DOCTYPE html>
<html>
<head>
    <title>aStuff | Admin Page</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>
</head>
<body>
    <?php include('layouts/navbar.php'); ?>
    <?php 
        session_start();
        if($_SESSION['status'] !="login"){
        header("location:../auth/login.php");
        }
    ?>
    <div class="container" style="padding:20px 20px;">
        <table id="myTable" lass="table table-striped" style="width:100%; ">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include('../../models/dataBaseConn.php');
            $data = mysqli_query($koneksi,"select * from form");
            while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                    <td><?php echo $d['name']; ?></td>
                    <td><?php echo $d['form_dsc']; ?></td>
                    <td><a class="btn btn-outline-dark " href="communityDetail.php?id_form=<?php echo $d['id_form']; ?>">Edit</a> <a class="btn btn-dark" href="/aStuff/controllers/communityDeleteController.php?id_form=<?php echo $d['id_form']; ?>">Delete</a></td>
                </tr>
            <?php }?>
            </tbody>
        </script>
        </table>
        <a class="btn btn-outline-dark " href="/aStuff/view/pages/community .php">Add Arts</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>