<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/header/header.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/header/fontawesome-5/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/footer/index.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/bootstrap-5.0.2/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/pagecss/style.css') ?>">
    <title>Document</title>
</head>
<body>
    
    <div class="container" style="padding-top: 21px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="gauche">
                    <div class="c1">
                        <div class="lg1">
                            <div class="lg2">
                                <div class="imgAut">
                                    <img class="id1" src="<?php echo base_url('assets/image')."/".$artiste[0]['artist_image'] ?>" alt="tsisy" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="nom">
                            <h2><?php echo $artiste[0]['artistname'] ?></h2>
                        </div>
                        <hr>
                        <div class="lieu">
                            <p><span style="color: rgba(145,139,134,1);"><?php echo $artiste[0]['artist_adress'] ?></span></p>
                        </div>
                        <div class="descri">
                            <span>
                            <?php echo $artiste[0]['biographie'] ?>
                            </span>
                        </div>
                        <div class="imbas"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="detail">
                    <div class="titre">
                        <div id="text1">
                            <span>
                                <h4>UNE SELECTION DE SES OEUVRES</h4>
                            </span>
                            <span>
                                <p>Notre équipe est allée dans toute le île pour vous séléctionner des oeuvres uniques</p>
                            </span>
                        </div>
                    </div>
                    <div class="del">
                        <div class="row">
                            <?php
                            $count = 0;       

                            for ($i = 0 ; $i < count($artiste) ; $i++) {
                               if ($count % 3 ==0) {?>
                                </div><br><div class="row">
                              <?php }
                               ?>
                            <div class="col-sm fade-in" style="height: 300px;">
                                <div class="art1">
                                    <img class="img1" src="<?php echo base_url('assets/image')."/".$artiste[$i]['painting_image'] ?>" alt="" srcset="">
                                    <a href="<?php echo base_url('details/detail_tableau?idpaint='.$artiste[$i]['idpainting']) ?>" class="voir">VOIR DETAIL</a>
                                </div>
                                <div class="artTitle">
                                
                                        <h5 style="text-align: center;"><?php echo $artiste[$i]['paintingname'] ?></h5>
                                        <h6 style="text-align: center;"><?php echo $artiste[$i]['artistname'] ?></h6>
                                    
                                </div>
                            </div> 
                            <?php 
                            $count = 1+$count;
                            }
                            ?>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <footer>
    <div class="footer" id="footer">
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


  </footer>
<script src="<?php echo base_url('assets/detail_artiste/bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/detail_artiste/pageJs/script.js') ?>"></script>
<script src="<?php echo base_url('assets/header/index.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js""></script>

</body>
</html>