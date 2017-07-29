<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no">
    
    <title>Клиника №1 ЛаЛин</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/fav.png" type="image/png">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions-my.js"></script>

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
            src: url("fonts/OpenSans-CondLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;  
        }
    </style>
</head>

<body>
<?php require_once 'modals.php'; ?>

<div class="header visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php"><img src="imgs/logo.png" alt=""></a>
            <div class="right-side">
                <div class="phone-digits-wrap">
                    <button class="btn-callback">Обратный звонок</button>
                    <div class="cons-phone">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                        <span class="phone-digits">(863) 301-06-06</span> 
                    </div>
                </div>
                <div class="menu-wrapper text-right">
                    <a href="index.php" target="_blank">Главная</a>
                    <a href="page-services.php" target="_blank">Услуги</a>
                    <a href="page-equipment.php" target="_blank">Оборудование</a>
                    <a href="page-contacts.php" target="_blank">Контакты</a>
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

