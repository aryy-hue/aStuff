<!DOCTYPE html>
<html>
<head>
<title>Astuff | Galery | Marketplace</title>
    <link rel="stylesheet" href="/aStuff/public/css/styleRegister.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
<?php
	// Check if the 'alert' parameter exists in the URL
	if (isset($_GET['alert']) && $_GET['alert'] == 'gagal_ukuran') {
		// Display JavaScript alert if the 'alert' parameter is present
		echo '<script>alert("Konfirmasi password tidak sesuai.");</script>';
	}
	?>
    <section class="h-100 h-custom gradient-custom-2">
    <form method="post" action="/aStuff/controllers/userAddController.php" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                    <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="p-1 ">
                        <img src="/aStuff/public/img/giphy.gif" style="width:640px;height:940px; border-radius:10px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 bg-indigo text-white">
                        <div class="p-5">
                        <h3 class="fw-normal mb-5">Register Account</h3>
                        <div class="mb-4 pb-2">
                            <div class="form-outline form-white">
                            <input type="text" id="full_name" class="form-control form-control-lg" name="full_name" required/>
                            <label class="form-label" for="full_name">Full Name</label>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="form-outline form-white">
                            <input type="text" id="name" class="form-control form-control-lg" name="name" required/>
                            <label class="form-label" for="name">Name</label>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="form-outline form-white">
                            <input type="text" id="nickname" class="form-control form-control-lg" name="nickname" required/>
                            <label class="form-label" for="nickname">Nickname</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-outline form-white">
                            <input type="text" id="phone_number" class="form-control form-control-lg" name="phone_number" required/>
                            <label class="form-label" for="phone_number">Phone Number</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-outline form-white">
                            <input type="password" id="password" class="form-control form-control-lg" name="password" required/>
                            <label class="form-label" for="password">Passwod</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-outline form-white">
                            <input type="password" id="confirm_password" class="form-control form-control-lg" name="confirm_password" required/>
                            <label class="form-label" for="confirm_password">Confirm Passwod</label>
                            </div>
                        </div>

                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required/>
                            <label class="form-check-label text-black" for="form2Example3">
                            I do accept the <a href="/aStuff/terms.php" class="text-white" target="_blank"><strong>Terms and Conditions</strong></a> of your
                            site.
                            </label>
                        </div>

                        <a href="/aStuff/view/auth/login.php"  class="btn btn-light btn-lg"
                            data-mdb-ripple-color="dark">Cancel</a>
                        <button type="submit" class="btn btn-dark btn-lg float-end" data-mdb-ripple-color="dark">Register</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>