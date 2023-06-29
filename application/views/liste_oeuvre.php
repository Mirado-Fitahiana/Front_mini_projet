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
        .pagination-outer
        {
        text-align: center;
        }
        .pagination{
            font-family: 'Bungee Inline', cursive;
            display: inline-flex;
            position: relative;
        }
        .pagination li a.page-link{
            color: #222;
            background: transparent;
            font-size: 25px;
            font-weight: 400;
            line-height: 25px;
            padding: 0;
            margin: 0 10px;
            border: none;
            display: block;
            transition: all 0.4s ease 0s;
        }
        .pagination li:first-child a.page-link,
        .pagination li:last-child a.page-link{
            color: #777;
            font-size: 25px;
            line-height: 25px;
            font-weight: 400;
        }
        .pagination li a.page-link:hover,
        .pagination li a.page-link:focus,
        .pagination li.active a.page-link:hover,
        .pagination li.active a.page-link{
            color: #1eaa9e;
            background: transparent;
            text-shadow: 3px 3px rgba(0,0,0,0.2);
            transform: rotate(10deg);
        }
        @media only screen and (max-width: 480px){
            .pagination{
                font-size: 0;
                display: inline-block;
            }
            .pagination li{
                display: inline-block;
                vertical-align: top;
            }
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
        <div class="row">
        <nav class="pagination-outer" aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
        </nav>
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
