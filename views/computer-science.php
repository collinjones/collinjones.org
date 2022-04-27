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
		<div class="content-wrapper">
			<h2> Computer Science </h2>
		 	<div class='row'>
			 	<div class='column'>
					 <?php
					display_skills();
					?>
		      	</div>
		    	<div id="projects" class='column'>
		    		<br>
		    		<h3> Projects </h3>
		    		<h4 style="text-align: center;"> Recip-Ez </h4><h4 style="text-align: center;" id="live" ></h4>

		    		<p> A recipe filtering app I developed with a couple other students for my software development project.
							We designed a relational database and queries that enabled users to search (filter) for recipes based on 
							the contents of their fridge. The tech stack consists of PHP and MySQL server-side, and HTML, CSS, and JavaScript client-side.
							The application was deployed on Heroku in conjunction with a cloud databse called ClearDB.</p><br>
		    		<ul>
		    			<br>
							<h4> Tech Stack </h4>
		    			<li style="font-size: 16px; font-color: #666">PHP</li>
		    			<li style="font-size: 16px; font-color: #666">Heroku</li>
		    			<li style="font-size: 16px; font-color: #666">ClearDB</li>
		    			<li style="font-size: 16px; font-color: #666">MySQL</li>
		    			<li style="font-size: 16px; font-color: #666">HTML, CSS, JavaScript</li>
		    		</ul>
		    		<h4 style="text-align: center;">Click the photo to enter the application</h4>
		    		<a style="text-align: center;" target="_blank" href="../recip-ez/index.php">
					<img border="0" alt="Recip-Ez" src="../resources/imgs/icons/recip-ez.png"></a>
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
