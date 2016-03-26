<?php
function timezone_select_options( $selected_timezone=NULL ) {
    $tz_ids = timezone_identifiers_list();
    // $tz_ids = DateTimeZone::listIdentifiers();
    
    $output = "";
    
    $dt = new DateTime( 'now' );
    foreach( $tz_ids as $zone ) {
        $this_tz = new DateTimeZone( $zone );
        $dt->setTimezone( $this_tz );
        $offset = $dt->format( 'P' );
        
        $output .= "<option value='" . $zone . "'";
        if( $selected_timezone == $zone ) { $output .= " selected"; }
        $output .= ">";
        $output .= $zone . " (UTC/GMT $offset)";
        $output .= "</option>";
    }
    return $output;
}