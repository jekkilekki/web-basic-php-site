document.getElementById( 'shop-tesla-s' ).onclick( function() {
    alert( "Tesla S!" );
    if( document.getElementById( 'cart-tesla-s' ) ) {
        document.getElementById( 'cart-tesla-s' ).childNodes[2].innerHTML = 
            document.getElementById( 'cart-tesla-s' ).childNodes[2].innerHTML++;
    }
});
document.getElementById( 'shop-tesla-3' ).onclick( function() {
    
});
document.getElementById( 'shop-tesla-x' ).onclick( function() {
    
});