﻿<?php require_once 'header.php'; ?>

<div class="container-fluid visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-4 sidebar">
            <?php 
                $requestUri = trim($_SERVER['REQUEST_URI'], '/');         
                if ( preg_match('#services#', $requestUri) ) {
                     require_once 'sidebar-services.php';
                } 
                if ( preg_match('#equipment#', $requestUri) ) {
                    require_once 'sidebar-equipment.php';
                } 
            ?>
        </div>
        <div class="col-md-8 page-content">            
            <?php $contentOfPage = get_page_by_path($requestUri); ?>
            <h1 class="head-article">
                <?php echo $contentOfPage->post_title; ?>
            </h1>
            <?php echo $contentOfPage->post_content; ?>         
            <p><a id="price" href="price" target="_blank">Стоимость услуг</a></p>
        </div>
    </div>
</div> 

<div class="container-fluid visible-xs-block visible-sm-block">
    <h1 class="head-article text-center">
        <?php echo $contentOfPage->post_title; ?>
    </h1>
    <?php echo $contentOfPage->post_content; ?>
    <p id="price"><a href="price" target="_blank">Стоимость услуг</a></p>
</div>

<?php require_once 'footer.php'; ?>