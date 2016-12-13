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

			<form method="post" action="database-write.php" id="contactForm" name="contactForm" onsubmit="return(validate());">

				<div>
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname">
				</div>

				<div>
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname">
				</div>

				<div>
					<label for="email">Email:</label>
					<input type="email" name="email" id="email">
				</div>

				<div>
					<label for="telephone">Telephone:</label>
					<input type="tel" name="phone" id="phone">
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
	<!-- Form validation -->
	<script type="text/javascript">
		function validate() {
			if(document.contactForm.firstname.value == "") {
				alert("Please provide your first name!");
				document.contactForm.firstname.focus();
				return false;
			}
			if(document.contactForm.lastname.value == "") {
				alert("Please provide your last name!");
				document.contactForm.lastname.focus();
				return false;
			}
			var emailID = document.contactForm.email.value;
	        atpos = emailID.indexOf("@");
	        dotpos = emailID.lastIndexOf(".");
	         
	        if (atpos < 1 || ( dotpos - atpos < 2 )) {
	        	alert("Please enter a correct email address");
	            document.contactForm.email.focus();
	            return false;
	        }
	        if(document.contactForm.phone.value == "") {
				alert("Please provide your phone number!");
				document.contactForm.phone.focus();
				return false;
			}
			if(document.contactForm.message.value == "") {
				alert("Did you want to write a message to me?");
				document.contactForm.message.focus();
				return false;
			}

			return true;
		}
	</script>
</body>

</html>