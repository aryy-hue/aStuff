<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="/aStuff/public/img/aStuff.png" class="navbar-brand" width="10%"style="padding-left: 20px;" ></img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/aStuff/view/admin/index.php">Users</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/aStuff/view/admin/arts.php">Arts</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/aStuff/view/admin/community.php">Community</a>
            </li>
        </ul>
        <div class="dropdown" style="padding-right: 150px;">
        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-symbols-outlined" style="color:black">
                    person
                </span>
            </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/aStuff/controllers/userLogout.php">Logout</a></li>
        </ul>
        </div>
        </div>
        </nav>