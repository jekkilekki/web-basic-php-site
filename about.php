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
			<section id="content" class="about-page">
				<h1 id="page-title">GPA Computer Class Offerings</h1> <!-- Enter a page title -->
				
				<!-- Write ABOUT your website subject below -->
				<article>
				<h3>Computer A: Computers & Office 101</h3>
				<img class="right" src="img/computers-101.jpg" /> <!-- Float this image right -->
				<p>In this class, we study the basics of hardware, software, 
					the Internet, and office productivity software. We learn about 
					Google, viruses, safety online, searching smart, and getting 
					things done with computers. 
				</p>
				<div class="clear"></div>
				</article>
				
				<article>
				<h3>Computer B: Intro to Web Programming</h3>
				<img class="left" src="img/web-code.jpg" /> <!-- Float this image left -->
				<p>In this class, we study the basics of website creation coding 
					including HTML, CSS, Javascript, and jQuery. It's difficult, but
					fun, and you'll have a number of your own websites built by 
					the end of the course.
				</p>
				<div class="clear"></div>
				</article>
				
				<article>
				<h3>AP Computer Science: Java Programming</h3>
				<img class="right" src="img/java-class.jpg" /> <!-- Float this image right -->
				<p>In this class, we study all the basics of Java Programming. 
					This class is also preparatory for college and if students take
					and pass the AP test, they can receive college credit. Good luck, 
					I hope you do great on the test!~
				</p>
				<div class="clear"></div>
				</article>

				<a href="contact.php" class="read-more full">Contact me for details &rarr;</a> <!-- Link to either Blog or Contact here -->
			
			</section>

			<!-- SIDEBAR --- -->
			<?php include './includes/sidebar.php'; ?>
            
		</div>

		<!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
        
	</body>
</html>