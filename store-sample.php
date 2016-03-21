<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet" /> <!-- CSS Link goes here -->
		<title>GPA Computer Classes</title> <!-- Change the page title here -->
		<style>
		
		</style>
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
			<section id="content" class="store-page">
				
				<button id="clickme" class="read-more">Click Me!</button>
				<div id="alert">Alert box</div>
				
				<h1 id="page-title">Web Store</h1> <!-- Enter a page title -->
		
				<!-- COPY/PASTE "thirds" from index.html -->
				<section id="products">
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
				
				<!-- COPY/PASTE <article>s from about.html -->
				<section id="testimonials">
					<h2 class="section-title">Customer Testimonials</h2>
					
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

					<a href="contact.html" class="read-more full">Contact me for details &rarr;</a> <!-- Link to either Blog or Contact here -->
					
				</section>
				
				<div class="clear"></div>
				
				<!-- COPY/PASTE <article>s from blog.html -->
				<section id="faqs">
					<h2 class="section-title">FAQs Section</h2>
				
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
							industry. Lorem Ipsum has been the industry's standard dummy 
							text ever since the 1500s, when an unknown printer took a galley 
							of type and scrambled it to make a type specimen book...
						</p>
						<a href="" class="read-more">Read more</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
							industry. Lorem Ipsum has been the industry's standard dummy 
							text ever since the 1500s, when an unknown printer took a galley 
							of type and scrambled it to make a type specimen book...
						</p>
						<a href="" class="read-more">Read more</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
							industry. Lorem Ipsum has been the industry's standard dummy 
							text ever since the 1500s, when an unknown printer took a galley 
							of type and scrambled it to make a type specimen book...
						</p>
						<a href="" class="read-more">Read more</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
							industry. Lorem Ipsum has been the industry's standard dummy 
							text ever since the 1500s, when an unknown printer took a galley 
							of type and scrambled it to make a type specimen book...
						</p>
						<a href="" class="read-more">Read more</a>
					</article>
					<article>
						<!-- Every article needs an img, header, paragraph, and "Read more" link -->
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
							industry. Lorem Ipsum has been the industry's standard dummy 
							text ever since the 1500s, when an unknown printer took a galley 
							of type and scrambled it to make a type specimen book...
						</p>
						<a href="" class="read-more">Read more</a>
					</article>
				</section>
		
			</section>	
			
			<!-- SIDEBAR --- -->
			<?php include './includes/sidebar.php'; ?>
            
		</div>

		<!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
	
	<script type="text/javascript">
		document.getElementById( "clickme" ).onclick = function() {
			var alert = document.getElementById( "alert" );
			
			alert.innerHTML = 
					document.getElementById( "alert" ).innerHTML + "<h1>You clicked me!</h1>";
			alert.style.color = "pink";
			alert.style.background = "yellow";
			
			this.style.display = "none";
			
			var today = new Date();
			var hourNow = today.getHours();
			var greeting;
		
			// single line comment
			/* 
			 * Multi line comment 
			 * This script returns a greeting based on the current time
			 * It only works when we click the button
			 */
			if ( hourNow > 18 ) {
				greeting = "Good evening";
			} else if ( hourNow > 12 ) {
				greeting = "Good afternoon";
			} else if ( hourNow > 0 ) {
				greeting = "Good morning";
			} else {
				greeting = "Welcome";
			}
			alert.innerHTML = alert.innerHTML + greeting;
		}
		
		var food = new Array();
		food[0] = "pizza";
		food[1] = "chicken";
		food[2] = "jambong";
		food[3] = "hodduk";
		// [ "pizza", "chicken", "jambong", "hodduk" ]
		
		console.log( food );
		
		var drinks = [ "milkis", "cider", "cola", "root beer", "real beer" ]; 
		console.log( drinks );
		
	</script>
	
	</body>
</html>
		
		