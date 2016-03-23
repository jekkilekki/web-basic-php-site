var buyS = document.getElementById( "shop-tesla-s" );
var buy3 = document.getElementById( "shop-tesla-3" );
var buyX = document.getElementById( "shop-tesla-x" );
var cart = document.getElementById( "cart-table" );

if( buyS ) {
    buyS.onclick = function() {
        alert( 'click' );
        if( document.getElementById( 'qty-s' ) ) {
            document.getElementById( 'qty-s' ).innerHTML = document.getElementById( 'qty-s' ).innerHTML++;
        } else {
            
        }
    }
}
if ( buy3 ) {
    buy3.onclick = function() {
        
    }
}
if ( buyX ) {
    buyX.onclick = function() {
        
    }
}

//    alert( "Tesla S!" );
//    if( document.getElementById( 'cart-tesla-s' ) ) {
//        document.getElementById( 'cart-tesla-s' ).childNodes[2].innerHTML = 
//            document.getElementById( 'cart-tesla-s' ).childNodes[2].innerHTML++;
//    }