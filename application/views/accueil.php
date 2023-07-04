<?php
   if ($message!="") { ?>
    <script>alert('<?php echo $message ?>');</script> 
   
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yohan_Test_Session</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/yohan.css') ?>">
</head>
<body>
    <div class="container">
        <?php for ($i=0; $i <count($tab) ; $i++) { ?>
            <div class="img">
                <img class="tableau" src="<?php echo base_url('assets/img/test1.jpg') ?>" alt="Tsy misy">
                <p><?php echo $tab[$i]['description']; ?></p>
                <a href="<?php echo base_url('Yohan/add_Cart?idtab='.$tab[$i]['idpainting']) ?>">Ajouter au panier</a>
            </div>
        <?php } ?>
        <a href="<?php echo base_url('Yohan/monPanier') ?>">Mon panier</a>
    </div>
</body>
</html>