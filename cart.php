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
			<section id="content" class="cart-page">			
				<h1 id="page-title">Shopping Cart</h1> <!-- Enter a page title -->
		
				<!-- COPY/PASTE "thirds" from index.html -->
				<section id="shopping-cart">
                    <h2 class="section-title">In Your Cart</h2>
					
                <?php
                session_start();
                    
                $price = array(
                    'Model_S' => 85000,
                    'Model_3' => 35000,
                    'Model_X' => 125000
                );
                $description = array(
                    'Model_S' => 'Premium performance sedan<br>AWD, 265 mi range.',
                    'Model_3' => 'Mid-size performance sedan<br>Production in 2017.',
                    'Model_X' => 'High-end SUV<br>Seats 7, AWD, 257 mi range.'
                );
                    
                if( isset( $_POST[ 'cart' ] ) ) {
                    foreach ( $_POST as $key => $value ) {
                        if ( strpos( $key, 'qty_' ) === 0 ) {
                            $_SESSION[ 'quantity' ][ substr( $key, 4 ) ] = $value;
                        }
                    }
                }
                
                // Work on UPDATING cart
                if( isset( $_POST[ 'update' ] ) ) {
                    foreach ( $_POST as $key => $value ) {
                        if ( strpos( $key, 'cart_' ) === 0 ) {
                            $_SESSION[ 'quantity' ][ substr( $key, 4 ) ] = $value;
                        }
                    }
                }
                    
                if( isset( $_POST[ 'cancel' ] ) ) {
                    $_SESSION = array();
                    session_destroy();
                }
                    
                $total = 0;

                if( !isset( $_SESSION[ 'quantity' ] ) || array_sum( $_SESSION[ 'quantity' ] ) === 0 ) :
                    echo '<p>Your shopping cart is empty.</p>';
                else :
                ?>
                    
                        <table class="cart">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                foreach( $_SESSION[ 'quantity' ] as $carname => $amount ) :
                                if ( $amount > 0 ) :
                                ?>
                                <tr>
                                    <td><img width="120" src="img/tesla-<?php
                                        echo substr( $carname, 6 );
                                    ?>.jpeg"></td>
                                    <td><?= str_replace( '_', ' ', $carname ); ?></td>
                                    <td><?= $description[ $carname ]; ?></td>
                                    <td>
                                        <input type="text" name="cart_<?= $carname; ?>" id="cart_<?= $carname; ?>" value="<?= $amount; ?>">
                                    </td>
                                    <td>$<?php
                                        echo $cost = $amount * $price[ $carname ]; 
                                        $total += $cost;
                                        ?>
                                    </td>
                                </tr>
                                <?php 
                                endif;
                                endforeach; 
                                ?>
                                
                            </tbody>
                            <tfoot>
                            <tr class="cart-totals">
                                <td colspan="4">Tax (5%)</td>
                                <td>$<?php
                                    $tax = $total * .05;
                                    echo $tax;
                                    $total += $tax;
                                    ?>
                                </td>
                            </tr>
                            <tr class="cart-totals">
                                <td colspan="4">Delivery</td>
                                <td><?php
                                    if ( $total < 500000 ) {
                                        echo '$1000';
                                        $total += 1000;
                                    } else {
                                        echo 'FREE';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr class="cart-totals">
                                <td colspan="4">Total</td>
                                <td>$<?= $total; ?></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="sns" id="order-buttons">
                            <form method="POST">
                                <span><input class="btn" value="Cancel Order" name="cancel" id="cancel" type="submit"></span>
                                <span><input class="btn" value="Update Cart" name="update" id="update" type="submit"></span>
                                <span><input class="btn" value="Confirm Order" name="checkout" id="checkout" type="submit"></span>
                            </form>
                        </div> 

                <?php
                endif; // If cart empty
                ?>
                    
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
		
		