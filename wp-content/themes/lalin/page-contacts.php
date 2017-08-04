<?php require_once 'header.php'; ?>

<?php
	$requestUri = trim($_SERVER['REQUEST_URI'], '/');  
	$contentOfPage = get_page_by_path($requestUri);
	echo $contentOfPage->post_content; 
?>

<?php require_once 'footer.php'; ?>