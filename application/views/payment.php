<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/payment/css/payement.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/payment/css/Fandresena.css') ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/payment/css/bootstrap.css') ?>"> -->
    <!-- <link href="<?php echo base_url('assets/payement/fontawesome-5/css/all.css') ?>" rel="stylesheet"> -->
    <title>Mon Panier</title>
</head>

<body>
    <div>
        <h1>Merci de nous avoir choisi.</h1>
        <div id="multi-step-form-container">
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                        <div class="label">Panier</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                        <div class="label text-muted">Mode d'expedition</div>
                    </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                        <div class="label text-muted">Mode de paiment</div>
                    </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>4</span>
                        </span>
                        <div class="label text-muted">Terminee</div>
                    </a>
                </li>
            </ul>
            <form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
                <section id="step-1" class="form-step">
                    <div class="mt-3">
                        <?php if(count($cart)>0) { ?>
                        <h1>Votre panier:</h1>
                            <?php for ($i=0; $i < count($cart); $i++) { ?>
                            <div class="panier-container">
                                <div class="panier-image">
                                    <img src="<?php echo base_url('assets/image')."/".$cart[$i]['painting_image'] ?>" alt="">   
                                </div>
                                <div class="panier-detail">
                                    <div class="panier-detail-tableau">
                                        <div class="panier-detail-tableau-titre">
                                            <h2><?php echo $cart[$i]['paintingname'] ?></h2>
                                        </div>
                                        <div class="panier-detail-tableau-auteur">
                                            <div class="image-auteur">
                                                <img src="<?php echo base_url('assets/image')."/".$cart[$i]['artist_image'] ?>" alt="" class="image_img">
                                            </div>
                                            <div class="auteur-nom">
                                                <p>RAKOTOZAFY BERTHINE</p> 
                                                <i class="far fa-user-circle icon"></i>  
                                                <fieldset>
                                                    marbre
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panier-prix">
                                    <h2>PRIX:</h2>
                                    <p> <?php echo number_format($cart[$i]['price'],0,',',' ') ?> Ariary <i class="fas fa-check" style="color:green"></i></p>
                                </div>
                                <div class="delete">
                                    <a href="<?php echo base_url('Yohan/deleteInCart?idpainting='.$cart[$i]["idpainting"]) ?>"><i class="far fa-trash-alt" style="color: red;font-size: 18pt;"></i></a>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } else { ?>
                                <h1>Vous n'avez encore rien dans votre panier.</h1>
                        <?php } ?>
                            <div class="total">
                                <div class="total-titre">
                                    <div class="total-titre-G">
                                        <h2>TOTAL:</h2>
                                    </div>
                                    <div class="total-total">
                                        <p> <?php echo number_format($sum,0,',',' '); ?>Ariary</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="total-sous-titre">
                                    <p>Je confirme tous mes achats sur le site HOOSDOOK</p>
                                </div>
                                <div class="annuler"><a href="<?php echo base_url('Yohan/deleteAllCart') ?>">Annuler mon panier.</a></div>
                            </div>
                            
                    </div>
                    <div class="mt-3">
                        <button class="button btn-navigate-form-step" type="button" step_number="2"><i class="fas fa-shopping-cart"></i> Suivant</button>
                    </div>
                </section>
           
                <section id="step-2" class="form-step d-none">
                    <h2 class="font-normal"></h2>
                    <div class="mt-3">
                    <div class="expediteur">
                    <?php for ($i = 0; $i < count($expedition); $i++) { ?>
                        <div class="exp1 expedition-item">
                            <div class="exp_img">
                                <p id="exp_id" style = "display:none"> <?php  echo $expedition[$i]['idexpedition'];?></p>
                                <label for="expedition<?php echo $i ?>"><img src="<?php echo base_url('assets/image/'."/".$expedition[$i]['image']) ?>" alt="Indrisy"></label>
                            </div>
                            <input type="radio" name="id_exp" value="<?php  echo $expedition[$i]['idexpedition'];?>">
                            <div class="exp_coop">
                                <p><?php echo $expedition[$i]['expeditionname'] ?></p>
                                

                            </div>
                        </div>
                    <?php } ?>
                    <input type="hidden" id ="idexpediteur">
                    </div>
                    
                    </div>
                    <div class="mt-3">
                        <button class="button btn-navigate-form-step" type="button" step_number="1"><i class="fas fa-arrow-left"></i>&nbsp; Retour</button>
                        <button class="button btn-navigate-form-step" type="button" step_number="3">Suivant &nbsp;<i class="fas fa-arrow-right"></i></button>
                    </div>
                </section>
                <section id="step-3" class="form-step d-none">
                    <div class="mt-3">
                        <div class="payement">
                            <?php for ($i=0; $i < count($payment); $i++) { ?>
                                <!-- <div class="paye1"/ onclick="show_hidden('<?php //echo $payment[$i]['paymentname'] ?>')"> -->
                                <div class="paye1">
                                    <div class="row">
                                        <div class=" col paye_img">
                                            <img src="<?php echo base_url('assets/image/'."/".$payment[$i]['image']) ?>" alt="">
                                        </div>
                                        <div class="col paye_coop">
                                            <p><?php echo $payment[$i]['paymentname'] ?></p>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="m-3 custom_2" id="<?php// echo $payment[$i]['paymentname'] ?>" >
                                        <input class="form-control custom" type="email" name="email" placeholder="Numero" />
                                      </div> -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="button btn-navigate-form-step" type="button" step_number="2"><i class="fas fa-arrow-left"></i>&nbsp; Retour</button>
                        <button class="button btn-navigate-form-step" type="button" step_number="4">Suivant &nbsp;<i class="fas fa-arrow-right"></i></button>
                    </div>
                </section>
                <section id="step-4" class="form-step d-none">
                    <div class="merci">
                        <div class="titre_merci">
                            <h2 class="font-normal">MERCI!</h2>
                            <div class="mt-3">
                               <p> Vous avez rempli correctement les informations <br>
                                Votre colis arrivera chez vous dans</p>
                                <br>
                                <h1>15 jours</h1>
                                <div class="titre_merci_image">
                                    <img src="<?php echo base_url('assets/header/image/logo.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="mt-3">
                        <button class="button btn-navigate-form-step" type="button" step_number="3"><i class="fas fa-arrow-left"></i>&nbsp; Retour</button>
                        <button class="button submit-btn" type="submit"><i class="fas fa-shopping-cart"></i> &nbsp; Save</button>
                    </div>
                    
                </section>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url('assets/payment/js/payment.js'); ?>"></script>
    <script src="<?php echo base_url('assets/payment/js/input.js'); ?>"></script>

</body>

</html>