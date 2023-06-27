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
    <link rel="stylesheet" href="<?php echo base_url('assets/detail_artiste/pagecss/soa.css') ?>">
    <title>Document</title>
    <!-- <script>
        const images = document.querySelectorAll('.im');

        images.forEach(image => {
        image.addEventListener('mouseenter', () => {
            image.style.transform = 'scale(1.2)';
            image.style.cursor = 'grab';
            del.style.visibility = 'hidden';
        });

        image.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
            del.style.visibility = 'visible';
        });
        });
    </script> -->
    <style>
        .oeuvres {
            font-family: Microsoft JhengHei UI;
            font-style: normal;
            font-weight: bold;
            font-size: 33px;
            color: rgba(89,93,36,1);
        }
        #text1 h4 a{
            text-decoration: none;
            text-align: left;
            font-family: Microsoft JhengHei UI;
            display: inline-block;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            color: rgba(145,139,134,1);
        }
        .centre{
            padding: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="titre">
            <div id="text1">
                <h4 class="oeuvres">LES OEUVRES DE NOS ARTISTES</h4>
                <h4><a href="">FILTRER</a></h4>
                <h4><a href="">TRIER PAR PRIX</a></h4>
                <p><input type="search" name="" id=""><i style="color: rgba(169,99,74,1);" class="fas fa-search"></i></p>
            </div>
        </div>
        <div class="centre">
            <div class="row">
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#">VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#" >VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#" >VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#" >VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#" >VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="a1">
                        <div class="vue">
                            <a href="#" >VOIR DETAIL</a>
                            </div>
                        <div class="s1">
                            <img class="im" src="<?php echo base_url('assets/detail_artiste/image/baobab.png') ?>" alt="tsisy">
                            
                        </div>
                        <div class="nom">
                            <h5>BAOBAB DE MAHAJANGA</h5>
                            <h6 style="font-size: medium;">RAKOTO JEAN</h6>
                            <h6>Madagasikara</h6>
                        </div>
                    </div>
                </div>
            </div>
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
