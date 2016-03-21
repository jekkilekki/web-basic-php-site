// PART 1
// Create variables for the welcome message
var greeting = "Good morning ";
var name = 'Aaron';
var message = ', are you ready to purchase?';

// Put the three variables together to make a message
var welcome = greeting + name + message;

// Get the greeting element
var el = document.getElementById( 'greeting' );
// Replace the original message with our custom message
el.textContent = welcome;

// PART 2
// Create new variables to hold purchase details
var sign = "Global Prodigy Academy";
var tiles = sign.length; 	// 22
var subtotal = tiles * 5;	// 110
var shipping = 7;
var grandTotal = subtotal + shipping;	// 117

// Update sign contents
var elSign = document.getElementById( 'userSign' );
elSign.textContent = sign;

// Update tiles contents
var elTiles = document.getElementById( 'tiles' );
elTiles.textContent = tiles;

// Update subtotal contents
var elSubtotal = document.getElementById( 'subtotal' );
elSubtotal.textContent = "$" + subtotal;

// Update shipping contents
var elShipping = document.getElementById( 'shipping' );
elShipping.textContent = "$" + shipping;

// Update grandTotal contents
var elGrandTotal = document.getElementById( 'grandTotal' );
elGrandTotal.textContent = "$" + grandTotal;











