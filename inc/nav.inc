<nav class="main-menu">

      <span id="name-logo">Alex Mai</span>

      <?php if($currentPage !== "Home") {
      	echo '
      		<ul>
          	<li><a href="index.php">Home</a></li>
        	<li><a href="index.php#second">Accomplishments</a></li>
          	<li><a href="portfolio.php">Portfolio</a></li>
          	<li><a href="contact.php">Contact</a></li>
      		</ul>';
      } else {
      		echo '
      		<ul>
          	<li><a href="#first">Home</a></li>
        	<li><a href="#second">Accomplishments</a></li>
          	<li><a href="portfolio.php">Portfolio</a></li>
          	<li><a href="contact.php">Contact</a></li>
      		</ul>';
      }
      ?>
      
    </nav>