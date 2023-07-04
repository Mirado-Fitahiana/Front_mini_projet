<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/header/fontawesome-5/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/footer/index.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/bootstrap-5.0.2/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/pagecss/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/pagecss/soa.css') ?>">
    <title>Document</title>
    <style>
        .centre {
        background-color:#ffffff;
        }
        .s1 {
            transition: 1s;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <div class="titre">
            <div id="text1">
                <h4>NOS ARTISTES</h4>
                <p>Pour soutenir les talentueux artistes de la grande île de Madagascar</p>
            </div>
        </div>
        <div class="centre">
            <div class="row">
                <?php
                $count = 0;       

                for ($i = 0 ; $i < count($artiste) ; $i++) {
                   if ($count % 3 ==0) {?>
                    </div><br><div class="row">
                  <?php }
                   ?>
                <div class="col-md-4">              
                    <div class="a1">
                        <div class="s1">
                            <a href="<?php echo base_url('details/index?idartist='.$artiste[$i]['idartist']) ?>"><img class="img1" src="<?php echo base_url('assets/image')."/".$artiste[$i]['image'] ?>" alt="tsisy"></a>
                        </div>
                        <div class="nom">
                            <h5><?php echo $artiste[$i]['artistname']; ?></h5>
                            <h6><?php echo $artiste[$i]['adress']; ?></h6>
                        </div>
                    </div>
                </div>
                <?php 
            $count = 1+$count;
            }
             ?>
            </div>
            <br>
            
        </div>
    </div>
    

    <footer>
    <div class="footer" id="foote">
        <div class="log">
            <!-- <img id="HooSooDook" src="../HooSooDook__final_b.png" srcset="../HooSooDook__final_b.png 1x, ../HooSooDook__final_b@2x.png 2x"> -->
        </div>
        <div class="container all">
          
            <div class="li imp web" id="Nous_Contacter_b">
              <span>Nous Contacter</span>
            </div>
            <div class="li imp web" id="A_Propos_de_Hoosdook">
                <span>A Propos de Hoosdook</span>
              </div>
              <div class="li imp web" id="Nos_Services">
                <span>Nos Services</span>
              </div>
              <div class="li" id="Accueil_Que_faisons_nous">
                <span>Accueil</span>
              </div>
            <div class="li" id="Tel__261344669569">
              <span>Tel: +261344669569</span>
            </div>
            <div class="li" id="Artistes_cf">
                <span>Artistes</span>
              </div>
              <div class="li" id="Accueil_Que_faisons_nous">
                <span>Que faisons nous?</span>
              </div>           
            <div class="li" id="Email_hoosdookprogmailcom">
              <span>Email: hoosdookpro@gmail.com</span>
            </div>
            <div class="li" id="Tableaux_cg">
              <span>Tableaux</span>
            </div>
          </div>
          <div class="name">
            <span>Hoosdook</span>
          </div>
          <div class="name">
          <a href="#container"><span>
            Revenir en haut
          </span></a>
          </div>
    </div>
    </footer>
</body>
</html>
<script src="<?php echo base_url('/assets/header/index.js'); ?>"></script>    



<script src="<?php echo base_url('assets/detail_artiste/bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/header/index.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js""></script>

</body>

</html>
