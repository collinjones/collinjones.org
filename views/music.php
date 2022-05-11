<?php

require('components/header.php');
require('components/navigation.php');

$current_page_ = "music.php";
$title_ = "Music";

set_header_dependencies('Music');
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
		<div class="parallax_section parallax_image_drums">
			<div class="parallax_section_overlay">
				<h1 class="banner" style="text-align: center">Collin Jones</h1>
			</div>
		</div>

		<!-- CONTENT -->
		<div class="content-wrapper">
			
			<h2> Music </h2>
			<p style="height: 10%; padding-left: 0;"> </br> I have released an EP and a few singles on Spotify, and a couple of hours of material on SoundCloud as a solo artist. I have also mixed 
															and mastered roughly 50 sessions of my band Eeloo's practices, streams, and shows, available on our YouTube channel. My also band performs several 
															songs that I have composed.
				</p></br>

			<hr class="dotted">
			<h3> Eeloo </h3>
			<iframe style="margin: auto; display: table; min-width: 50%; max-width: 100%; margin-bottom:10px;" width="560" height="315" src="https://www.youtube.com/embed/TwsLkrZyBpM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<iframe style="margin: auto; display: table; min-width: 50%; max-width: 100%; margin-bottom:10px;" width="560" height="315" src="https://www.youtube.com/embed/Gfo4LMMBWIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<hr class="dotted">
			<h3> Solo Project </h3>
			<iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/10cANzulvHoAuSXtHEJzNB?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
		</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>
</html>
