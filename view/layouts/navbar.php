<nav>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <img src="/aStuff/public/img/aStuff.png" alt="kopi" class="logo">
    <ul>
        <li><a href="/aStuff/index.php">Features</a></li>
        
        <li><a href="/aStuff/view/pages/market.php">Market</a></li>
        <li><a href="/aStuff/view/pages/community.php">Community</a></li>
        <div class="dropdown">
            <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-symbols-outlined" >
                    person
                </span>
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/aStuff/view/pages/artAdd.php">Upload Artwork</a></li>
                <li><a class="dropdown-item" href="#"><?php echo $_SESSION['nickname']?></a></li>
                <li><a class="dropdown-item" href="/aStuff/controllers/userLogout.php">Logout</a></li>
            </ul>
        </div>
    </ul>

 
</nav>