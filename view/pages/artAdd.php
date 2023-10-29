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
	<?php
	session_start();
	// Check if the 'alert' parameter exists in the URL
	if($_SESSION['status'] !="login"){
		header("location:../auth/login.php");
	}
	if (isset($_GET['alert']) && $_GET['alert'] == 'gagal_ukuran') {
		// Display JavaScript alert if the 'alert' parameter is present
		echo '<script>alert("Ukuran file melebihi batas maksimal (10 MB).");</script>';
	}
	?>

	 <div class="hero">
        <?php include('../layouts/navbar.php'); ?>
    </div>
	<div class="container">
		<form method="post" action="/aStuff/controllers/artsAddController.php" enctype="multipart/form-data">
			<div class="container mt-5 mb-5 d-flex justify-content-center">
				<div class="card px-1 py-4">
					<div class="card-body">
						<h6 class="card-title mb-3">This Art is Made By</h6>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group"> <input class="form-file" type="file" placeholder="art" name="img"> </div>
								</div>
							</div>
						</div>
						<h6 class="information mt-4">Please provide following information about your art</h6>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="What's your art name" name="art_name"> </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group"> <input class="form-control" type="date" placeholder="When did you made this ?" name="date_added"> </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group"> <input class="form-control" type="text" placeholder="Whats your creator name ? " name="name"> </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group"> <input class="form-control" type="number" step="0.0001" inputmode="decimal" placeholder="How much does it cost ? " name="price"> </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="input-group"> <input class="form-control" type="text" step="0.0001" placeholder="Describe your art " name="dsc"> </div>
								</div>
							</div>
						</div>
						<div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
							<small class="agree-text">By confirming this form you agree to the</small> 
							<a href="#" class="terms">Terms & Conditions</a> </div> 
							<button class="btn btn-dark btn-block confirm-button float-end" type="submit">Confirm</button>
							<a href="/aStuff/index.php" style="text-decoration: none; color:white; align-items: center; padding-top: 12px" class="btn btn-dark btn-block confirm-button float-start">Cancel</a>
						</div>
					</div>
				</div>
			</form>
	</div>
	<?php include('../layouts/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
</body>
</html>