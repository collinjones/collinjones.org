<?php

require('components/header.php');
require('components/navigation.php');
require('components/skills.php');

$current_page_ = "computer-science.php";
$title_ = "Computer Science";

set_header_dependencies('Computer Science');
set_navigation_dependencies($current_page_, $title_);

?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			generate_header_html();
		?>	
	</head>

	<body onload="updateRecip()">
		<?php
			generate_navigation_html();
		?>
		<div class="parallax_section parallax_image_computer">
			<div class="parallax_section_overlay">
				<h1 class="banner" style="text-align: center">Collin Jones</h1>
			</div>
		</div>

		<!-- CONTENT -->
		<div class="content-wrapper">
			<h2> Computer Science </h2>
			<p style="text-align:left;"> This page showcases some of my skills and some of the projects I've made throughout the years.
										 </p>
			<!-- <hr class="dotted"> -->
			<hr class="dotted">
			<div class='row'>
			 	<div class='column'>
					 <?php
					display_skills();
					?>
		      	</div>
		    	<div id="projects" class='column'>
		    		<br>
		    		<h3> Projects </h3>
					<hr class="dotted">
		    		<h4 style="text-align: left;"> Recip-Ez </h4>

		    		<p style="text-align:left;"> A recipe filtering app I developed with a couple other students for my software development project.
							We designed a relational database and queries that enabled users to search (filter) for recipes based on 
							the contents of their fridge. The tech stack consists of PHP and MySQL server-side, and HTML, CSS, and JavaScript client-side.
							The application was deployed on Heroku in conjunction with a cloud databse called ClearDB.</p>
						<h5> Tech Stack </h5>
						<ul style="text-align:left; padding-left:15px;">
		    			<li style="font-size: 16px; font-color: #666">PHP</li>
		    			<li style="font-size: 16px; font-color: #666">Heroku</li>
		    			<li style="font-size: 16px; font-color: #666">ClearDB</li>
		    			<li style="font-size: 16px; font-color: #666">MySQL</li>
		    			<li style="font-size: 16px; font-color: #666">HTML, CSS, JavaScript</li>
		    		</ul>
					<h5 style="text-align: center;">Click to Enter</h5>
		    		<a style="text-align: center; display: block; padding-bottom: 25px;" target="_blank" href="../recip-ez/index.php">
					<img style="display:block; margin:auto;"alt="Recip-Ez" src="../resources/imgs/icons/recip-ez.png"></a>
					<hr class="dotted">
					<h4 style="text-align: left;"> This Website </h4>
					<p style="text-align:left;"> I built this website as a way to just further develope my HTML, CSS, and PHP skills. Although 
												 this website could be built without PHP, I decided to use it to reduce redundancy. I've created
												 several functions which dynamically build certain aspects of the website as well as reduce 
												 the amount of reused code. </p>
					<h5> Tech Stack </h5>
					<ul style="text-align:left; padding-left:15px;">
					<li style="font-size: 16px; font-color: #666">PHP</li>
					<li style="font-size: 16px; font-color: #666">Heroku</li>
					<li style="font-size: 16px; font-color: #666">HTML, CSS, JavaScript</li>
		    		</ul>
					<hr class="dotted">
					<h4 style="text-align: left;"> <a href="https://github.com/collinjones/Checkers/releases/tag/v1.0" target="_blank">Checkers</a> </h4>
					<p style="text-align:left;"> I built a slightly simpler version of Checkers. The source code and release 
												 are available to download from my GitHub. Currently only available on Windows. </p>
					<h5> Tech Stack </h5>
					<ul style="text-align:left; padding-left:15px;">
					<li style="font-size: 16px; font-color: #666">C++</li>
					<li style="font-size: 16px; font-color: #666">Qt Framework</li>
		    		</ul>
		      	</div>
		    </div>
		    <div class="row">
		    	<div class="column">
		    	</div>
		    </div>
		</div>
		<div class="footer">
			<span> &copy; Collin Jones </span>
		</div>
	</body>

</html>
