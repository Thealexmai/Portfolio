<!doctype html>
<html>

<head>
	<?php
      $currentPage = "Contact";
      include "inc/head.inc";
    ?>
</head>

<body>

	<!-- Navigation -->
    <?php
      include "inc/nav.inc";
    ?>

    <div class="container">
    	<div id="form">

		    <h1>Contact Me!</h1>

			<form method="post" action="database-write.php" id="contactForm">

				<div>
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname" required>
				</div>

				<div>
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname" required>
				</div>

				<div>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" required>
				</div>

				<div>
					<label for="telephone">Telephone:</label>
					<input type="tel" name="phone" id="phone" required>
				</div>

				<div>
					<label for="message">Message:</label>
					<textarea name="message" id="message" form="contactForm"></textarea>
				</div>

				<input type="submit" value="Send">
			</form>

			<p>Or Go <a href="index.php">Back to the Home</a></p>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="js/menu-highlighter.js"></script>
</body>

</html>