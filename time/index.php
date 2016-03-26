<?php
// Returns same timezone list as http://php.net/manual/en/timezones.php

// $tz_ids = timezone_identifiers_list();
// $tz_ids = DateTimeZone::listIdentifiers();

//foreach( $tz_ids as $zone ) {
//    echo $zone . '<br>';
//}
?>

<hr>

<?php 
$tz_abbr = 'EST';
$tz_name = timezone_name_from_abbr( $tz_abbr );
// echo $tz_name;


// date_default_timezone_set( 'America/New_York' );
echo date_default_timezone_get();
?>