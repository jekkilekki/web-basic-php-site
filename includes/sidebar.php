<aside id="sidebar">
    <?php if( stripos( $_SERVER[ 'REQUEST_URI' ], 'store.php' ) ) : ?>
    <div class="widget cart">
        <!-- This is where the shopping cart goes. Dynamic updates with JS? -->
        <h2>Shopping Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr id="cart-tesla-s">
                    <td class="item">Model S</td>
                    <td class="qty">1</td>
                    <td class="price">$85K</td>
                </tr>
                <tr id="cart-tesla-3">
                    <td class="item">Model 3</td>
                    <td class="qty">5</td>
                    <td class="price">$35K</td>
                </tr>
                <tr id="cart-tesla-x">
                    <td class="item">Model X</td>
                    <td class="qty">2</td>
                    <td class="price">$125K</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="totals">
                    <td class="total-items">Total</td>
                    <td class="total-qty">8</td>
                    <td class="total-price">$245K</td>
                </tr>
            </tfoot>
        </table>
        <ul class="sns">
            <li><a href="cart.php">Go to Cart</a></li>
        </ul>
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