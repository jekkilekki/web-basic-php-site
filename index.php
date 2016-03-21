<?php
$monthname = date( 'M' );
$monthname = strtolower( $monthname );
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Excellent site for later: http://ironsummitmedia.github.io/startbootstrap-landing-page -->
		<link href="style.css" rel="stylesheet" /> <!-- CSS Link goes here -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<title>GPA Computer Classes</title> <!-- Change the page title here -->
	</head>
	<body>

        <!-- HEADER ------------------------------------- -->
		<?php include './includes/header.php'; 
        // Put processing code for $monthname here if needed to 
        // set the timezone in header.php
        ?>

		<!-- BODY --------------------------------------- -->
		<div id="wrapper">

			<!-- CONTENT --- -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<!-- This is the only part of the page you need to rewrite in every file -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<section id="landing" style="background: url('<?= $siteroot; ?>/img/<?= $monthname; ?>-hero.jpg');">
				<hgroup>
					<h1 id="page-title">GPA Computer Classes</h1> <!-- Enter a page title -->
					<h2 id="page-subtitle">Learn Computer Basics in 3 classes</h2> <!-- Enter a page subtitle -->
				</hgroup>
				
				<div class="sns">
					<!-- Make an unordered list of THREE links to your social media here -->
					<ul>
						<li><a class="github" href="https://github.com/jekkilekki">GitHub</a></li>
						<li><a class="facebook" href="https://www.facebook.com/jekkilekki">Facebook</a></li>
						<li><a class="email" href="mailto:asnowberger@gpa.ac.kr">Email</a></li>
					</ul>
				</div>
			</section>

			<section id="other-pages">
				<div class="third">
					<div class="third-img">
						<img src="img/computers-101.jpg" /> <!-- Use an image from your About page -->
					</div>
					<h3>About</h3>
					<p>I'm a Computer Science teacher at GPA high school on the 
						Jeonju University campus in Jeonju, South Korea. Click this
						link to find out more about me and what I'm up to.
					</p> <!-- Write some text to introduce your About page -->
					<a href="about.html">Go</a> <!-- Add a link to your About page -->
				</div>

				<div class="third">
					<div class="third-img">
						<img src="img/web-code.jpg" /> <!-- Use an image from your Blog page -->
					</div>
					<h3>Blog</h3>
					<p>This is where I keep all of my teaching materials, lectures,
						PPTs, and so on. Click here if you want to see what my high 
						school students are learning, or if you want to learn too.
					</p> <!-- Write some text to introduce your About page -->
					<a href="blog.html">Go</a> <!-- Add a link to your Blog page -->
				</div>

				<div class="third">
					<div class="third-img">
						<img src="img/java-class.jpg" /> <!-- Use an image from your Contact page -->
					</div>
					<h3>Contact</h3>
					<p>Contact me if you want to learn more, or hire me for some outside
						consultation, design, or development work. I'm active in the 
						WordPress community and love to build websites!~
					</p> <!-- Write some text to introduce your About page -->
					<a href="contact.html">Go</a> <!-- Add a link to your Contact page -->
				</div>
			</section>
			
			<div class="clear"></div>
		</div>

        <!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
        
	</body>
</html>