<!DOCTYPE html>
<html>
	<head>
		<!-- Excellent site for later: http://ironsummitmedia.github.io/startbootstrap-landing-page -->
		<link href="style.css" rel="stylesheet" /> <!-- CSS Link goes here -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<title>GPA Computer Classes</title> <!-- Change the page title here -->
        <script src="js/cart.js"></script>
	</head>
	<body>

		<!-- HEADER ------------------------------------- -->
		<?php include './includes/header.php'; ?>

		<!-- BODY --------------------------------------- -->
		<div id="wrapper">
		
			<section id="content" class="store">
				<h1 id="page-title">Web Store</h1> <!-- Enter a page title -->
			
				<div id="products">
					<div class="third">
						<div class="third-img">
							<img src="img/computers-101.jpg" /> <!-- Use an image from your About page -->
						</div>
						<h3>Tesla Model S</h3>
						<p>I'm a Computer Science teacher at GPA high school on the 
							Jeonju University campus in Jeonju, South Korea. Click this
							link to find out more about me and what I'm up to.
						</p> <!-- Write some text to introduce your About page -->
						<a href="about.html" id="shop-tesla-s">$</a> <!-- Add a link to your About page -->
					</div>

					<div class="third">
						<div class="third-img">
							<img src="img/web-code.jpg" /> <!-- Use an image from your Blog page -->
						</div>
						<h3>Tesla Model 3</h3>
						<p>This is where I keep all of my teaching materials, lectures,
							PPTs, and so on. Click here if you want to see what my high 
							school students are learning, or if you want to learn too.
						</p> <!-- Write some text to introduce your About page -->
						<a href="blog.html" id="shop-tesla-3">$</a> <!-- Add a link to your Blog page -->
					</div>

					<div class="third">
						<div class="third-img">
							<img src="img/java-class.jpg" /> <!-- Use an image from your Contact page -->
						</div>
						<h3>Tesla Model X</h3>
						<p>Contact me if you want to learn more, or hire me for some outside
							consultation, design, or development work. I'm active in the 
							WordPress community and love to build websites!~
						</p> <!-- Write some text to introduce your About page -->
						<a href="contact.html" id="shop-tesla-x">$</a> <!-- Add a link to your Contact page -->
					</div>
					
					<div class="clear"></div>
					
					<div class="third">
						<div class="third-img">
							<img src="img/computers-101.jpg" /> <!-- Use an image from your About page -->
						</div>
						<h3>About</h3>
						<p>I'm a Computer Science teacher at GPA high school on the 
							Jeonju University campus in Jeonju, South Korea. Click this
							link to find out more about me and what I'm up to.
						</p> <!-- Write some text to introduce your About page -->
						<a href="about.html">$</a> <!-- Add a link to your About page -->
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
						<a href="blog.html">$</a> <!-- Add a link to your Blog page -->
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
						<a href="contact.html">$</a> <!-- Add a link to your Contact page -->
					</div>
				</div>
				
				<div id="testimonials">

					<h2 class="section-title">Customer Testimonials</h2>

					<article>
					<img class="right" src="img/computers-101.jpg" /> <!-- Float this image right -->
					<blockquote>Aaron's classes are very challenging but I enjoyed them a lot! 
						They really help me to think outside the box and I appreciate his unconventional
						teaching style!~
					</blockquote>
					<div class="clear"></div>
					</article>
					
					<article>
					<img class="left" src="img/young-asian-man.jpg" /> <!-- Float this image left -->
					<blockquote>The Java class was a lot of fun. We started with the basics of the basics 
						and ended the course by programming our very own Android app!
					</blockquote>
					<div class="clear"></div>
					</article>
					
					<article>
					<img class="right" src="img/java-class.jpg" /> <!-- Float this image right -->
					<blockquote>If I could take another of Mr. Snowberger's classes, I definitely would! 
						He knows a lot of code and is passionate about helping students to learn it clearly too!
					</blockquote>
					<div class="clear"></div>
					</article>

					<a href="contact.html" class="read-more full">Contact me for details &rarr;</a> <!-- Link to either Blog or Contact here -->
				</div>
				
				<div id="faqs">

					<h2 class="section-title">FAQs Section</h2>
					
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>1. Where is your store located?</p>
						<a href="" class="read-more">View answer</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>2. Why can't I find XYZ product on your website?</p>
						<a href="" class="read-more">View answer</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>3. What if I want to return something?</p>
						<a href="" class="read-more">View answer</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>4. What if my product is damaged during shipping?</p>
						<a href="" class="read-more">View answer</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>5. Which countries do you ship to?</p>
						<a href="" class="read-more">View answer</a>
					</article>
				</div>
			</section>
	
		     <!-- SIDEBAR --- -->
			 <?php include './includes/sidebar.php'; ?>
            
		</div>

		<!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
    
	</body>
</html>