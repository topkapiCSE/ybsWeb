<?php
    define("SYSTEM",1);

?>

<html>
    <head>
        <title>Anasayfa</title>
        <!-- CSS only -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

<div class="container">

    <?php
        $activePage = "anasayfa";
        include "comps/header.php";
    ?>

    <div class="row mt-4">
        <h3><?php
                $baslik = "Haberler";
                echo $baslik;
            ?>
        </h3>
        <hr>
    </div>
    <div class="d-flex justify-content-end">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row mt-4">
    <?php
        for($i=0;$i<10;$i++){
    ?>
                <div class="col-md-4 p-5">
                    <div class="card">
                        <img src="img/news.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo  $i;?> - Haber Başlığı</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                            <div class="row text-md-end">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <a href="#" class="btn btn-primary">Devamını Oku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
    </div>


    <div class="container-fluid">
        <div class="row bg-opacity-75 rounded-2 bg-dark h-25 mb-4">
            <div class="col-md-4">
                <div class="d-flex h-100 justify-content-end">
                    <div class="vr h-100 bg-light"></div>
                </div>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>

</div>


</html>