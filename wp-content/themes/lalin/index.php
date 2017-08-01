<?php get_header(); ?>

<div id="carousel-main-screen" class="carousel slide visible-md-block visible-lg-block" data-ride="carousel">    
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-main-screen" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-main-screen" data-slide-to="1"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/slide-02.png" alt="">
            <div class="carousel-caption">
                <h2>Забота о красоте</h2>
                <span class="bold">Полный комплекс услуг по косметологии</span><br>
                <span>
                      • инъекционная косметология<br>
                      • коррекция фигуры<br>
                      • лазерная косметология<br>
                      • удаление новообразований кожи<br>
                      • эпиляция<br>
                      • эстетическая косметология
                </span>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/slide-01.png" alt="">
            <div class="carousel-caption">
                <h2>Забота о главном</h2>
                <span>Клиника №1 ЛаЛин специализируется на эстетической (терапевтической) медицине. Приоритетным направлением клиники является <span class="bold">лазерная косметология</span>.</span>
            </div>
        </div>              
    </div>
  <!-- Controls -->
    <a class="left carousel-control" href="#carousel-main-screen" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-main-screen" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<h1 class="main-header visible-xs-block visible-sm-block">Полный комплекс услуг по косметологии</h1>
<div class="main-screen-mob visible-xs-block visible-sm-block">
    <div class="main-screen-wrap text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/main-screen-mob.jpg" height="120" alt="">
    </div>
    <div class="services-list-mob">
        <div class="services-text-wrap">                    
            • инъекционная косметология<br>
            • коррекция фигуры<br>
            • лазерная косметология<br>
            • удаление новообразований кожи<br>
            • эпиляция<br>
            • эстетическая косметология
        </div>
    </div>
</div>

<div class="container-fluid btn-callback-wrap text-center visible-xs-block visible-sm-block ">
    <button class="btn-callback" id="btn-get-consult-mob">Получить консультацию</button>
</div>

<div class="container-fluid we-moved">
    <h3 class="text-center"><span class="attention-text">Внимание!</span> Мы <a href="#" target="_blank">переехали</a> на новый адрес: г. Ростов-на-Дону, ул. 1-я Круговая, 91.</h3>
</div>

<div class="container-fluid action-top">
    <h3 class="text-center hidden-xs hidden-sm"><span class="action-text">АКЦИЯ!</span> Спешите успеть!</h3>     
</div>

<div class="container-fluid action-main-wrap">
    <div class="action-items-wrap">
        <h4 class="text-center hidden-md hidden-lg"><span class="action-text">АКЦИЯ!</span><br> Спешите успеть!</h4>
        <div class="arrow-wrap text-center">
            <img class="action-mob-img hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/imgs/arrow.png" alt="">
        </div>

        <span class="item-action-header hidden-xs hidden-sm">Биоревитализация лица, шеи, декольте</span><br>
        <span class="hidden-xs hidden-sm">• 3 процедуры — 12 000 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Разовая процедура — 3500 руб.</span><br><br>
        
        <span class="item-action-header hidden-xs hidden-sm">Худеем с легкостью. Забудем об отеках, целлюлите, тяжести в ногах.</span><br>
        <span class="item-action-header hidden-xs hidden-sm">Прессотерапия</span><br>
        <span class="hidden-xs hidden-sm">• Разовая процедура — 300 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Абонемент 10 процедур — 270 руб./процедура</span><br>
        <span class="hidden-xs hidden-sm">• Абонемент 15 процедур — 250 руб./процедура</span><br><br>
        
        <span class="item-action-header hidden-xs hidden-sm">Контурная пластика лица</span><br>
        <span class="hidden-xs hidden-sm">• Увеличение объема губ — 7 500 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Коррекция носогубных складок — 7 500 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Увеличение объема скул — 7 500 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Коррекция глубоких мимических морщин — 7 500 руб.</span><br><br>
        
        <span class="item-action-header hidden-xs hidden-sm">Неодимовое омоложение лица, шеи, декольте</span><br>
        <span class="hidden-xs hidden-sm">• Разовая процедура — 5 500 руб.</span><br>
        <span class="hidden-xs hidden-sm">• Абонемент 6 процедур (1 зона) — 4 900 руб./процедура</span>          
    </div>
    <img class="action-bg-img" src="<?php echo get_template_directory_uri(); ?>/imgs/action-bg.jpg" alt="" width="100%">
    <div class="actions-text-mob-wrap hidden-md hidden-lg">
        <span class="item-action-header hidden-md hidden-lg">Биоревитализация лица, шеи, декольте</span><br>
        <span class="hidden-md hidden-lg">• 3 процедуры — 12 000 руб.</span><br>
        <span class="hidden-md hidden-lg">• Разовая процедура — 3500 руб.</span><br><br>
        
        <span class="item-action-header hidden-md hidden-lg">Худеем с легкостью. Забудем об отеках, целлюлите, тяжести в ногах. Прессотерапия:</span><br>                
        <span class="hidden-md hidden-lg">• Разовая процедура — 300 руб.</span><br>
        <span class="hidden-md hidden-lg">• Абонемент 10 процедур — 270 руб./процедура</span><br>
        <span class="hidden-md hidden-lg">• Абонемент 15 процедур — 250 руб./процедура</span><br><br>
        
        <span class="item-action-header hidden-md hidden-lg">Контурная пластика лица</span><br>
        <span class="hidden-md hidden-lg">• Увеличение объема губ — 7 500 руб.</span><br>
        <span class="hidden-md hidden-lg">• Коррекция носогубных складок — 7 500 руб.</span><br>
        <span class="hidden-md hidden-lg">• Увеличение объема скул — 7 500 руб.</span><br>
        <span class="hidden-md hidden-lg">• Коррекция глубоких мимических морщин — 7 500 руб.</span><br><br>
        
        <span class="item-action-header hidden-md hidden-lg">Неодимовое омоложение лица, шеи, декольте</span><br>
        <span class="hidden-md hidden-lg">• Разовая процедура — 5 500 руб.</span><br>
        <span class="hidden-md hidden-lg">• Абонемент 6 процедур (1 зона) — 4 900 руб./процедура</span>
        <h3 class="text-center hidden-md hidden-lg">АКЦИЯ ОГРАНИЧЕНА</h3>
    </div>
</div>

<div class="container-fluid action-bottom hidden-xs">
    <h3 class="text-center">АКЦИЯ ОГРАНИЧЕНА</h3>
</div>

<div class="container-fluid visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <table class="actions-limf-str">
                <tr class="text-center">
                    <td id="limf-cell"><span class="bold">ЛИМФОСТАЗ ПОСЛЕ МАСТЭКТОМИИ</span><br>
                    — эффективное лечение и реабилитация.<br> 
                    Рекомендуется курс <a href="#" target="_blank">прессотерапии</a> 10-15 процедур.
                    </td>
                    <td id="empty-cell">
                    </td>
                    <td id="str-cell"><span class="bold">«СТРОЙНОСТЬ В ПОДАРОК»!</span><br> 
                         УЗ-липосакция + RF-лифтинг<br> 
                         с 15 июня по 1 июля 2017 г. - <span class="bold">скидка 50%</span>
                    </td>
                </tr>
            </table>  
        </div>
    </div>
</div>   

<div class="container-fluid visible-xs-block visible-sm-block">
    <div class="text-center limf-wrap-mob">
        <span class="bold">ЛИМФОСТАЗ ПОСЛЕ МАСТЭКТОМИИ</span><br>
                           — эффективное лечение и реабилитация.<br> 
                           Рекомендуется курс <a href="#" target="_blank">прессотерапии</a> 10-15 процедур.
    </div>
    <div class="text-center str-wrap-mob"><span class="bold">«СТРОЙНОСТЬ В ПОДАРОК»!</span><br> 
                 УЗ-липосакция + RF-лифтинг<br> 
                 с 15 июня по 1 июля 2017 г. - <span class="bold">скидка 50%</span>
    </div>
</div>  

<div class="container-fluid depart-cosmetology">
    <?php 
        $contentOfPage = get_page_by_title('Главная');
        echo $contentOfPage->post_content; // контент страницы
    ?> 
    <p class="visible-md-block visible-lg-block">&nbsp;</p>       
</div>

<?php get_footer(); ?> 