<!DOCTYPE html>
<html>
<head>
<title>Astuff | Galery | Marketplace</title>
    <link rel="stylesheet" href="/aStuff/public/css/styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>

<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>
        <div class="form">
            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                <form style="width: 23rem;" method="post" action="/aStuff/controllers/userLoginController.php">
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Let's Continue Our Journey!</h3>

                    <div class="form-outline mb-4">
                    <input type="text" id="nickname" class="form-control form-control-lg" name="nickname"/>
                    <label class="form-label" for="nickname">Nickname</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="gradient-button" type="submit">Login</button>
                    </div>

                    <p>Don't have an account? <a href="/aStuff/view/auth/register.php" class="link-info">Register here</a></p>
                </form>
            </div>
        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://media0.giphy.com/media/0oYBxMzAFU3iHhsPk6/giphy.gif?cid=ecf05e47305c9ahpy73gj428qpql6ytqgq413p4kyzlg5wpy&ep=v1_gifs_search&rid=giphy.gif&ct=g"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>