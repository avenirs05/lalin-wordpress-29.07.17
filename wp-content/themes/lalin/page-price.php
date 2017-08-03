<?php require_once 'header.php'; ?>

<div class="container-fluid price-page">
    <h1 class="text-center">Прайс-лист</h1>
    <h3 class="text-center">на оказание услуг по косметологии</h3>  
    <?php 
        $requestUri = trim($_SERVER['REQUEST_URI'], '/'); 
        $contentOfPage = get_page_by_path($requestUri); 
        echo $contentOfPage->post_content; 
    ?> 
</div>

<?php require_once 'footer.php'; ?>

