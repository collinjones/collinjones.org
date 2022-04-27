<?php

require('components/header.php');
require('components/navigation.php');

$current_page_ = "photography.php";
$title_ = "Photography";

set_header_dependencies('Photography');
set_navigation_dependencies($current_page_, $title_);

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		generate_header_html();
		?>
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
		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>
</html>
