<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel='stylesheet'>    
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet'>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/functions-my.js"></script>  

    <script>    
        $(function () {

            $('#carousel-main-screen').carousel();
            $('.btn-callback').click(function() { $('#modal-free-consult').modal('show'); });
            $('.burger-menu').click(function() { $('#modal-menu').modal('show'); });
            
            // Выделение цветом нужной страницы в меню
            changeColorMenuItem();

            // Выделение цветом нужной услуги в сайдбаре
            sidebarServicesChangeColor();

            // Выделение цветом нужной технологии (оборудования) в сайдбаре
            sidebarEquipmentChangeColor();
            
        });
    </script>

    <style>
        body {
            padding-right: 0 !important;
        }
        @font-face {
            font-family: "OpenSansCondensedLight";
            src: url("<?php echo get_template_directory_uri(); ?>/fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>
    <?php wp_head(); ?>
</head>

<body>
<?php require_once 'modals.php'; ?>
 
<div class="header visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt=""></a>
            <div class="right-side">
                <div class="phone-digits-wrap">
                    <button class="btn-callback">Обратный звонок</button>
                    <div class="cons-phone">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                        <span class="phone-digits">(863) 301-06-06</span> 
                    </div>
                </div>
                <div class="menu-wrapper text-right">
                    <a id="main-menu-item" href="/index.php" target="_blank">Главная</a>
                    <a id="services-menu-item" href="/services" target="_blank">Услуги</a>
                    <a id="equipment-menu-item" href="/equipment" target="_blank">Оборудование</a>
                    <a id="contacts-menu-item" href="/contacts" target="_blank">Контакты</a>
                </div> 
            </div> 
        </div>
    </div>
</div>

<nav class="navbar navbar-default navbar-fixed-top visible-xs-block visible-sm-block">
    <div class="container-fluid header">
        <div class="burger-menu hidden-md hidden-lg"></div>
        <a href="index.php" class="logo-wrapper"></a>
        <div class="phones-wrapper text-right">
            <div>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                <span class="phone-digits">(863) 296 02 60</span> 
            </div>
        </div>
    </div>
</nav>




