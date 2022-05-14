<?php

require('components/header.php');
require('components/navigation.php');
require('components/skills.php');

$current_page_ = "about.php";
$title_ = "About Me";

set_header_dependencies('Landing Page');
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

		<div class="parallax_section parallax_image_birds">
			<div class="parallax_section_overlay">
				<h1 class="banner" style="text-align: center">Collin Jones</h1>
			</div>
		</div>

		<!-- CONTENT -->
		<div class="content-wrapper">
			<h2> About Me </h2>
			<p style="height: 10%; padding-left: 0;"> Thanks for visiting my website! My name is Collin Jones. I'm studying to get my Bachelor's in Computer Science at the University of Colorado, Boulder.
														I enjoy coding, which is why I designed this website to show some of the things I've made.</p></br><p style="height: 10%; padding-left: 0; min-padding-right: 65%;">

														I play many different kinds of keyboards, including Piano, Synthesizers, and Rhodes, to name some of my favorites. 
														I am the keyboardist, audio engineer, and composer for my band Eeloo, based in the Denver area. I also do some 
														astrophotography in my backyard, which you can check out on my Photography page. 
														
														Please feel free to click around my website and explore. 
														</p><hr class="dotted">
		 	<div class='row'>
		    	<div class='column'>
					<?php
					display_skills();
					?>
		      	</div>
		    </div>
			<hr class="dotted">
		    <div class="row">
		    	<div class="column">
		    		<br>
		    		<h3> Collin Jones - Friday </h3>
		    		<p style="text-align: center;"> One of my singles. Released November 2019 </p>
		    		<div style="margin: auto; display: table;"><iframe style="box-shadow: 1px 1px 10px black; border: 0; width: 300px; height: 400px;"src="https://open.spotify.com/embed/track/29MKK9Ud7aqCJ54obver5W" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></div>
		    	</div>
		    </div>
			<hr class="dotted">
			<div class="row">
				<div class="column">
					<br>
		    		<h3> Eeloo - Basement Sessions </h3>
		    		<p style="text-align: center;"> Clip from my band Eeloo's regularly streamed band practices </p>
					<iframe style="margin: auto; display: table; min-width: 50%; max-width: 100%;" width="560" height="315" src="https://www.youtube.com/embed/a5d9QV4ngeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>

	</body>

</html>
