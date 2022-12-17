<?php
    define("SYSTEM",0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <!-- CSS only -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<div class="container">

   <?php
    $activePage = "iletisim";
    include "comps/header.php";
   ?>

    <!-- head title -->
    <div class="row mt-4">
        <h3>İletişim</h3>
        <hr>
    </div>


    <!-- body -->
    <div class="row mt-4">


        <div class="col-md-4">
            <div class="mb-3">
                <label for="name" class="form-label">İsim</label>
                <input type="email" class="form-control" id="name" placeholder="isim">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="surname" class="form-label">Soyisim</label>
                <input type="email" class="form-control" id="surname" placeholder="Soyisim">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="file" class="form-label">Dosya:</label>
                    <input class="form-control form-control-sm" id="file" type="file">
                </div>
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sözleşmeyi okudum</label>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mesajınız:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <button id="gonder" class="btn btn-primary" onclick="tiklandi()">Gönder</button>
    </div>


</div>

<script>

    function tiklandi(){
        var btn = document.getElementById("gonder");
        btn.setAttribute("class","btn btn-warning disabled");
    }

</script>
</html>