<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/jgallery.min.js?v=1.6.0"></script>
	<link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/jgallery.min.css" />
	
	<?php
		$currentPage = "Portfolio";
		include "inc/head.inc";
	?>
	
</head>

<body>
    <!-- Navigation -->
    <?php
    	include "inc/nav.inc";
    ?>

    <div id="gallery">
    	<a href="#waldo"><img src="img/waldo.jpg" alt="Waldo Project" class="img-responsive"></a>
    	<a href="#crudlist"><img src="img/crudlist.jpg" alt="Crudlist Project" class="img-responsive"></a>
    	<a href="#mapping"><img src="img/mapping.png" alt="Street Mapping Project" class="img-responsive"></a>
    	<a href="#music"><img src="img/music.jpg" alt="Music Website" class="img-responsive"></a>
    </div>

    
	<section id="waldo">
		<div class="container">
			<div class="content">
	    		<h2>Waldo</h2>
	    		<img src="img/waldo.jpg" alt="Image of Waldo" class="img-responsive">
	    		<p>Waldo is a personal project that is also mobile-friendly. It is an app that takes information from the public and tells the number of open public study spots on the University of Rochester campus. This project was delivered in a week and is only a prototype. I am continually working on improving it. It is programmed using HTML, CSS, Bootstrap, AngularJS, Python, and SQLite.</p>
	    		<p>Try Waldo <a href="http://www.alexpmai.com/waldo" target="_blank">here</a></p>
		   	</div>
    		<!-- Close .content -->
		</div>
		<!-- Close .container -->
	</section>

	<section id="crudlist" class="alternate-section">
		<div class="container">
			<div class="content">
				<h2>CrudList</h2>
				<img src="img/crudlist.jpg" alt="Image of CrudList" class="img-responsive">
				<p>CRUDList is a mobile-friendly web app that connects students with services that other students can offer. I was the project manager of a group of three. The project was started in the end of October - early December '15. It is programmed using HTML, CSS, Bootstrap, JQuery, Python, and SQLite.</p>
				<p>Try CrudList <a href="http://www.alexpmai.com/crudlist" target="_blank">here</a></p>
			</div>
		</div>
	</section>

	<section id="mapping">
		<div class="container">
			<div class="content">
				<h2>Street Mapping Project - Java</h2>
				<img src="img/mapping.png" alt="Image of mapping project" class="img-responsive">
				<p>This Java project maps the University of Rochester, Monroe County, and New York State, provided route number and weights. It finds the shortest distance on campus using Dijkstra's algorithm.</p>
				<p>Take a look at the code <a href="https://github.com/Thealexmai/Street-Mapping-Project" target="_blank">here</a></p>
			</div>
		</div>
	</section>

	<section id="music" class="alternate-section">
		<div class="container">
			<div class="content">
				<h2>Music Project - Website Redesign</h2>
				<img src="img/music.jpg" alt="Image of Music project" class="img-responsive">
				<p>In a group of four, we gathered requirements from our client and upgraded their website's look and feel. We changed the color scheme, fonts, and improved the user interaction. In particular, I was responsible for the user being able to hover and interact with the images. For example when one hovers over an image, the image container becomes shaded and subtitles pop up to show the user the name of the artist hovered.</p>
				<p>Take a look at it <a href="http://www.urcsc170.org/skingsl2/Project2/" target="_blank">here</a></p>
			</div>
		</div>
	</section>



	<script src="js/menu-highlighter.js"></script>
    <!-- Plugin http://jgallery.jakubkowalczyk.pl/customize-slider -->
	<script type="text/javascript">
		// Initialize slider
		$( function(){
		    $( "#gallery" ).jGallery( {
		        "transition":"moveToRight_moveFromLeft",
		        "transitionBackward":"moveToLeft_moveFromRight",
		        "transitionCols":"1",
        		"transitionRows":"1",
		        "thumbnailsPosition":"bottom",
		        "thumbType":"image",
		        "backgroundColor":"FFFFFF",
		        "textColor":"000000",
		        "mode":"slider"
		    } );
		} );
	</script>


</body>

</html>