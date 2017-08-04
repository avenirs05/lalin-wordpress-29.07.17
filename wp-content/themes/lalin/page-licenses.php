<?php require_once 'header.php'; ?> 
 
<?php
	$requestUri = trim($_SERVER['REQUEST_URI'], '/');  
	$contentOfPage = get_page_by_path($requestUri);
	echo $contentOfPage->post_content; 
?>

<div class="licenses-wrap visible-md-block visible-lg-block">
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-01.jpg" alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-02.jpg" alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-03.jpg" alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-04.jpg" alt="">
	</div>
</div>

<div class="licenses-wrap visible-xs-block visible-sm-block">
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-01.jpg" width="300"alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-02.jpg" width="300"alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-03.jpg" width="300"alt="">
	</div>
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/imgs/licenses/license-04.jpg" width="300"alt="">
	</div>
</div>

<?php require_once 'footer.php'; ?> 