<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hoosd</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/fandresena/bootstrap/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?php echo site_url('assets/fandresena/fonts/fontawesome-all.min.css'); ?> ">
    <link rel="stylesheet" href="<?php echo site_url('assets/fandresena/css/dh-card-image-left-dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fandresena/css/Fandresena.css'); ?>">
</head>

<body >
    <div class="container">
            <?php
            var_dump($_SESSION);
            ?>
        <div>
            <p class="small">La vente de ce tableau permettra d'offrir un kit scolaire à un enfant</p>
        </div>
        <div class="row">
            <div class="col-8 p-3 image_content">
                <div class="warning m-3">
                    <img src="<?php echo site_url('assets/image')."/".$artiste[0]['painting_image'] ?>" class="Cadreur" >
                </div>
                <div class="cadre p-3">
                    <div class="row m-auto">
                        <div class="col m-auto">
                            <div class="card"><button class="btn-custom-C" onclick="changeImageURL('<?php echo site_url('assets/fandresena/img/istockphoto-162714310-612x612 copie 2.png'); ?>')"><img class="card-img-top w-100 d-block" src="<?php echo site_url('assets/fandresena/img/Untitled.png');?>"></button></div>
                        </div>
                        <div class="col m-auto">
                            <div class="card"><button class="btn-custom-C" onclick="changeImageURL('<?php echo site_url('assets/fandresena/img/istockphoto-162714310-612x612 copie 3.png'); ?>')"><img class="card-img-top w-100 d-block" src="<?php echo site_url('assets/fandresena/img/z.png');?>"></button></div>
                        </div>
                        <div class="col m-auto">
                            <div class="card"><button class="btn-custom-C" onclick="changeImageURL('<?php echo site_url('assets/fandresena/img/istockphoto-162714310-612x612 copie 4.png'); ?>')"><img class="card-img-top w-100 d-block" src="<?php echo site_url('assets/fandresena/img/Untitled.png');?>"></button></div>
                        </div>
                        <div class="col m-auto">
                            <div class="card"><button class="btn-custom-C" onclick="changeImageURL('<?php echo site_url('assets/fandresena/img/istockphoto-162714310-612x612 copie.png'); ?>')"><img class="card-img-top w-100 d-block" src="<?php echo site_url('assets/fandresena/img/z.png');?>"></button></div>
                        </div>
                        <div class="col m-auto">
                            <div class="card"><button class="btn-custom-C" onclick="changeImageURL('<?php echo site_url('assets/fandresena/img/istockphoto-162714310-612x612.png'); ?>')"><img class="card-img-top w-100 d-block" src="<?php echo site_url('assets/fandresena/img/z.png');?>"></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-5 p-3">
                <div>
                    <p class="h6 title"><?php echo $artiste[0]['paintingname'] ?></p>
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="sary_kely"><img src="<?php echo site_url('assets/image')."/".$artiste[0]['artist_image'] ?>"></div>
                        <div class="col align-items-center m-auto p-1">
                            <div>
                                <p class="name"><strong><span style="color: rgb(82, 82, 82); background-color: rgb(242, 242, 242);"><?php echo $artiste[0]['artistname'] ?></span></strong></p>
                            </div>
                            <div><i class="fas fa-globe-americas"></i></div>
                        </div>
                    </div>
                </div>
                <div><p><?php echo $artiste[0]['description'] ?></p></div>
                <div class="mx-4">
                    <p style="font-family: Merriweather, serif;"><strong><span style="color: rgb(0, 0, 0); background-color: rgb(242, 242, 242);">90 x 120 cm</span></strong></p>
                </div>
                <div class="mx-3">
                    <p style="font-family: Merriweather, serif;"><strong><span style="color: rgb(0, 0, 0); background-color: rgb(242, 242, 242);">PRIX : <?php echo $artiste[0]['price'] ?> AR</span></strong></p>
                </div>
               
                <div>
                    <div class="row text-center">
                        <div class="col p-2"><button class="btn btn-primary btn-custom" type="button"><strong>RENDU&nbsp;SUR VOTRE MUR</strong></button></div>
                        <a href="<?php echo base_url('Yohan/add_Cart?idtab='.$artiste[0]['idpainting']) ?>">
                        <div class="col p-2"><button class="btn btn-primary btn-custom-2" type="button">
                           <strong>ACHETER&nbsp; LE TABLEAU</strong>
                        </button></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo site_url('assets/fandresena/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/fandresena/js/cadre.js'); ?>"></script>
</body>

</html>