<?php

require('components/header.php');
require('components/navigation.php');

$current_page_ = "contact.php";
$title_ = "Contact";

set_header_dependencies('Contact');
set_navigation_dependencies($current_page_, $title_);

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			generate_header_html();
		?>
		<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
	</head>

	<body>
		<?php
			generate_navigation_html();
		?>

		<div class="parallax_section parallax_image_flatirons">
			<div class="parallax_section_overlay">
				<h1 class="banner" style="text-align: center">Collin Jones</h1>
			</div>
		</div>

		<div class="content-wrapper">
			<h2> Contact & Social Media </h2>
		 	<div class='row'>
				<h3> LinkedIn </h3>
		    </div>
			<div class='row'>
				<h3> Youtube </h3>
		    </div>
			<div class='row'>
				<h3> Spotify </h3>
		    </div>
			<div class='row'>
				<h3> Soundcloud </h3>
		    </div>
		</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>

</html>
