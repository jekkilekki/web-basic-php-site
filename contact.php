<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet" /> <!-- CSS Link goes here -->
		<title>GPA Computer Classes</title> <!-- Change the page title here -->
	</head>
	<body>

		<!-- HEADER ------------------------------------- -->
		<?php include './includes/header.php'; ?>

		<!-- BODY --------------------------------------- -->
		<div id="wrapper">

			<!-- CONTENT --- -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<!-- This is the only part of the page you need to rewrite in every file -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<section id="content" class="contact-page">
				<h1 id="page-title">Contact Us</h1> <!-- Enter a page title -->
				<p></p> <!-- Enter some paragraph text about contacting you -->
				<form>
					<fieldset>
						<legend>Shoot me a mail &darr; </legend>
					
						<label for="fname">First name: </label> <!-- First name field -->
						<input id="fname" type="text" placeholder="Aaron" />

						<label for="lname">Last name: </label> <!-- Last name field -->
						<input id="lname" type="text" placeholder="Snowberger" />

						<label for="email">Email: </label>	<!-- Email field -->
						<input id="email" type="email" placeholder="you@gmail.com" />
						<br>

						<label for="message">Message: </label> <!-- Message field -->
						<textarea id="message" placeholder="Type a short (or long) message here..."></textarea>
						<br><br>

						<input type="submit" value="Boom baby!" /> <!-- Submit button -->
					</fieldset>
				</form>
			</section>

			<!-- SIDEBAR --- -->
			<?php include './includes/sidebar.php'; ?>
            
		</div>

		<!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
        
	</body>
</html>