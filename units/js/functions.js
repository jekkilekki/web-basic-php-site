// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions( sel, removeGrp ) {
    var len, groups, par;
    if( removeGrp ) {
        groups = sel.getElementsByTagName( 'optgroup' );
        len = groups.length;
        for( var i=len; i; i-- ) {
            sel.removeChild( groups[ i-1 ] );
        }
    }
    len = sel.options.length;
    for( var i=len; i; i-- ) {
        par = sel.options[ i-1 ].parentNode;
        par.removeChild( sel.options[ i-1 ] );
    }
}

function appendDataToSelect( sel, obj ) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions( obj ) {
        var f = document.createDocumentFragment();
        var o;
        
        for( var i=0, len=obj.text.length; i<len; i++ ) {
            o = document.createElement( 'option' );
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if( obj.value ) {
                o.value = obj.value[ i ];
            }
            
            f.appendChild( o );
        }
        return f;
    }
    
    if( obj.text ) {
        opts = addOptions( obj );
        f.appendChild( opts );
    } else {
        for( var prop in obj ) {
            if( obj.hasOwnProperty( prop ) ) {
                labels.push( prop );
            }
        }
        for( var i=0, len=labels.length; i<len; i++ ) {
            group = document.createElement( 'optgroup' );
            group.label = labels[ i ];
            f.appendChild( group );
            opts = addOptions( obj[ labels[ i ] ] );
            group.appendChild( opts );
        }
    }
    sel.appendChild( f );
}

// anonymous function assigned to onchange event of controlling select box
document.forms[ 'conversion-form' ].elements[ 'conversion_type' ].onchange = function( e ) {
    // name of associated select box
    var fromName = 'from_unit';
    var toName = 'to_unit';
    
    // reference to associated select box
    var fromList = this.form.elements[ fromName ];
    var toList = this.form.elements[ toName ];
    
    // remove current option elements
    removeAllOptions( fromList, true );
    removeAllOptions( toList, true );
    
    // call function to add optgroup/option elements
    // pass reference to assc select box and data for new options
    appendDataToSelect( fromList, obj );
    appendDataToSelect( toList, obj );
};

// populate associated select box as page loads
( function() { // immediate function to avoid globals
    
    var form = document.forms[ 'conversion-form' ];
    
    // reference to controlling select box
    var sel = form.elements[ 'conversion_type' ];
    sel.selectedIndex = 0;
    
    // name of assc select box
    var fromName = 'from_unit';
    var toName = 'to_unit';
    // reference to assc select box
    var from = form.elements[ fromName ];
    var to = form.elements[ toName ];
    
    // get data for assc select box passing its name
    // and value of selected in controlling select box
    var fromData = Select_List_Data[ fromName ][ sel.value ];
    var toData = Select_List_Data[ toName ][ sel.value ];
    
    // add options to associated select box
    appendDataToSelect( from, fromData );
    appendDataToSelect( to, toData );
})