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
		    	<div class='column'>
					<br>
					<h3> Linkedin </h3>
					
					<div style="margin:auto;"class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="collinjones1" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://www.linkedin.com/in/collinjones1?trk=profile-badge">Collin Jones</a></div>
		      	</div>
		    </div>
		    <div class="row">
		    	<div class="column">
		    		<br>
		    		<h3> Spotify </h3>
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/10cANzulvHoAuSXtHEJzNB?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
		    	</div>
		    	<div class="column">
		    		<br>
		    		<h3> Soundcloud </h3>
		    		<iframe style="box-shadow: 1px 1px 10px black; margin: auto; min-width: 200px; max-width: 400px;" height="300px;" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/367138943&color=%231af4f4&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="column">
		    		<br>
		    		<h3> Youtube </h3>
		    		<iframe style="box-shadow: 1px 1px 10px black; margin: auto; min-width: 200px; max-width: 400px;" height="315" src="https://www.youtube.com/embed/dTBaJ_Q3mdQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		    	</div>
		    </div>
		</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>

</html>
