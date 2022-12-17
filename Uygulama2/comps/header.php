<?php
if(!defined("SYSTEM"))
    die("Access Denied");
?>

<nav class="navbar navbar-expand-lg  bg-light">
    <div class="container-fluid">
        <a class="navbar-brand col-md-1" href="#">
            <img src="img/logo.png" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php if($activePage == "anasayfa")echo "active";?>" aria-current="page" href="index.php">Anasayfa</a>
                <a class="nav-link" href="#">Ürünler</a>
                <a class="nav-link" href="#">Referanslar</a>
                <a class="nav-link <?php if($activePage == "iletisim")echo "active";?>" href="iletisim.php">İletişim</a>
            </div>
        </div>
    </div>
</nav>