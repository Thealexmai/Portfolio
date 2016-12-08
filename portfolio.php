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
    	<a href="#waldo"><img src="img/waldo.jpg" alt="Image of Waldo" class="img-responsive"></a>
    	<a href="#crudlist"><img src="img/crudlist.jpg" alt="Image of Crudlist" class="img-responsive"></a>
    	<a href="#mapping"><img src="img/mapping.png" alt="Street Mapping Project" class="img-responsive"></a>
    </div>

    <div class="container">
    	<div class="content">
	    	<section id="waldo">
	    		<h2>Waldo</h2>
	    		<img src="img/waldo.jpg" alt="Image of Waldo" class="img-responsive">
	    		<p>Details about Waldo</p>
	    		<p>Try Waldo <a href="http://www.alexpmai.com/waldo" target="_blank">here</a></p>
	    	</section>

	    	<section id="crudlist">
	    		<h2>CrudList</h2>
	    		<img src="img/crudlist.jpg" alt="Image of CrudList" class="img-responsive">
	    		<p>Details about CrudList</p>
	    		<p>Try CrudList <a href="http://www.alexpmai.com/crudlist" target="_blank">here</a></p>
	    	</section>

	    	<section id="mapping">
	    		<h2>Street Mapping Project - Java</h2>
	    		<img src="img/mapping.png" alt="Image of mapping project" class="img-responsive">
	    		<p>Details about Street Mapping Project</p>
	    		<p>Take a look at the code <a href="https://github.com/Thealexmai/Street-Mapping-Project" target="_blank">here</a></p>
	    	</section>

	    </div>
	    <!-- Close .content -->
    </div>
    <!-- Close .container -->


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