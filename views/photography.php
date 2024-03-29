<?php

require('components/header.php');
require('components/navigation.php');
require('components/photography_viewer.php');

$current_page_ = "photography.php";
$title_ = "Photography";

set_header_dependencies('Photography');
set_navigation_dependencies($current_page_, $title_);

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../photoswipe/dist/photoswipe.css">
		<?php
		generate_header_html();
		?>
		<script type="module">
			import PhotoSwipeLightbox from '../photoswipe/dist/photoswipe-lightbox.esm.js';
			const lightbox = new PhotoSwipeLightbox({
			gallery: '#my-gallery',
			children: 'a',
			pswpModule: () => import('../photoswipe/dist/photoswipe.esm.js')
			});
			lightbox.init();
		</script>
	</head>

	<body>
		<?php
		generate_navigation_html();
		?>
		<div class="parallax_section parallax_image_chip">
			<div class="parallax_section_overlay">
				<h1 class="banner" style="text-align: center">Collin Jones</h1>
			</div>
		</div>

		<!-- CONTENT -->
		<div class="content-wrapper">
			<h2> Photography </h2>
			<p style="height: 10%; padding-left: 0;"> All of the photos on this website are my own. I would consider myself an amateur at photography, though 
															I have always had a passion for it and astronomy, which led to my interest in astrophotography. Below you
															can view some of my astrophotos as well as some others that I enjoy. 
															</p></br>
			<hr class="dotted">
			<div style="display: block; text-align: center;" class="pswp-gallery pswp-gallery--single-column" id="my-gallery">
				<?php loadImgs(); ?>
			</div>
    	</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>
</html>
