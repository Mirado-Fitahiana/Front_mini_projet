<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo base_url('assets/header/index.css') ;?>" rel="stylesheet" type="text/css"  />
    <link href="<?php echo base_url('assets/header/fontawesome-5/css/all.css') ;?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/landin_page/index.css') ;?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/footer/index.css') ;?>">
</head>

<body>
    <div class="menu-btn">
        <i class="fa fa-list"></i>
    </div>
    
    <div class="container" id="container">
        <nav class="navbar">
            <div class="logo">
                <br><br>
            <img src="<?php echo base_url('assets/header/image/logo.png') ?>" alt="">
            </div>
            <ul class="main-menu">
            <li><a href="landing/tableau">Tableau</a></li>
            <li><a href="#">Artistes</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Accueil</a></li>
            </ul>
            <ul class="right-menu">
            <li><input type="text" name="" id="" class="search" placeholder="Rechercher"></li>
            <li><a href="#"><i class="fa fa-search"></i></a></li>
            <li><a href="#"><i class="fas fa-shopping-basket"></i></a></li>
            </ul>
        </nav>
    </div>