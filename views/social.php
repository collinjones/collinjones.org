<?php

require('components/header.php');
require('components/navigation.php');

$current_page_ = "social.php";
$title_ = "Social";

set_header_dependencies('Social');
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

		<!-- CONTENT -->
		<div class="content-wrapper">
			<h2> Social </h2>
			<hr class="dotted">
		 	<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/linkedin.png"><h3> <a href="https://www.linkedin.com/in/collinjones1/" target="_blank">LinkedIn </a></h3>
		    </div>
			<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/youtube.png"><h3> <a href="https://www.youtube.com/channel/UCIfdD-wwi8bqN7oqg9i1gqA" target="_blank">Collin Jones</a></h3>
		    </div>
			<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/youtube.png"><h3> <a href="https://www.youtube.com/c/Eeloo" target="_blank">Eeloo</a></h3>
		    </div>
			<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/spotify.png"><h3> <a href="https://open.spotify.com/artist/10cANzulvHoAuSXtHEJzNB?si=SViaFJ6VRuWSDvyos6swKw" target="_blank">Spotify </a></h3>
		    </div>
			<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/soundcloud.png"><h3> <a href="https://soundcloud.com/collinjonesofficial" target="_blank">Soundcloud </a></h3>
		    </div>
			<div class='row' style="display: block ruby; text-align: left;">
				<img src="../resources/imgs/icons/twitch.png"><h3> <a href="https://www.twitch.tv/collinjonesofficial" target="_blank">Twitch </a></h3>
		    </div>
		</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>

</html>
