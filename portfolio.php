<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alex Mai - Portfolio</title>
    <link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/jgallery.min.css" />
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/jgallery.min.js?v=1.6.0"></script>
	<link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="main-menu">

      <span id="name-logo">Alex Mai</span>
      <ul>
          <li><a href="#first">Home</a></li>
          <li><a href="#second">Accomplishments</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
    </nav>

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

<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>