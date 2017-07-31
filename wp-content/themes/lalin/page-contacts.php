<?php require_once 'header.php'; 

$contentOfPage = get_page_by_title('Контакты');
echo $contentOfPage->post_content; // контент страницы
?>



<?php require_once 'footer.php'; ?>