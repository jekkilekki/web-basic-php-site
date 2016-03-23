<aside id="sidebar">
    <?php if( stripos( $_SERVER[ 'REQUEST_URI' ], 'store.php' ) ) : ?>
    <div class="widget cart">
        <!-- This is where the shopping cart goes. Dynamic updates with JS? -->
        <h2>Shopping Cart</h2>
        <form action="cart.php" method="POST">
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr id="cart-tesla-s">
                    <td id="item-s" class="item" name="item_Model_S">Model S</td>
                    <td><input type="number" name="qty_Model_S" id="qty-s" class="qty" value="1"></td>
                    <td><input type="text" name="price_Model_S" id="price-s" class="price" value="$85K" readonly></td>
                </tr>
                <tr id="cart-tesla-3">
                    <td id="item-3" class="item" name="item_Model_S">Model 3</td>
                    <td><input type="number" name="qty_Model_3" id="qty-3" class="qty" value="5"></td>
                    <td><input type="text" name="price_Model_3" id="price-s" class="price" value="$35K" readonly></td>
                </tr>
                <tr id="cart-tesla-x">
                    <td id="item-x" class="item" name="item_Model_X">Model X</td>
                    <td><input type="number" name="qty_Model_X" id="qty-x" class="qty" value="2"></td>
                    <td><input type="text" name="price_Model_X" id="price-x" class="price" value="$125K" readonly></td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="totals">
                    <td id="total-items"><strong>Total</strong></td>
                    <td>8</td>
                    <td>$245K</td>
                </tr>
            </tfoot>
        </table>
        <div class="sns">
            <input type="submit" name="cart" class="btn" id="go-to-cart" value="Go to Cart">
        </div>
        </form>
    </div>
    <?php endif; ?>
    
    <div class="widget facts">
        <!-- Enter an unordered list of 5 facts about this subject (with a header) -->
        <h2>Facts about Programming</h2>
        <ul>
            <li>Java was invented in 1995.</li>
            <li>Git is the best version control software available.</li>
            <li>Sass + Grunt + WordPress + Foundation = awesome.</li>
            <li>Every language has its own syntax and "grammar".</li>
            <li>Computer programming is a job that will grow greatly in the future.</li>
        </ul>
    </div>


    <div class="widget classes">
        <!-- Enter an ordered list of your GPA class schedule (with a header) -->
        <h2>GPA Classes</h2>
        <ol start="4">
            <li>Computer A: Computers + Office 101</li>
            <li>AP Computer: Java Programming</li>
            <li>Computer B: Intro to Website Programming</li>
        </ol>
    </div>


    <div class="widget calendar">
        <!-- Enter a table with a calendar for this month (with a header) -->
        <?= make_calendar( date( 'n' ), date( 'Y' ) ); ?>
    </div>
</aside>

<div class="clear"></div>