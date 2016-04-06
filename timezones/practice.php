<?php
// Returns same timezone list as http://php.net/manual/en/timezones.php

// $tz_ids = timezone_identifiers_list();
// $tz_ids = DateTimeZone::listIdentifiers();

//foreach( $tz_ids as $zone ) {
//    echo $zone . '<br>';
//}

$tz_abbr = 'EST';
$tz_name = timezone_name_from_abbr( $tz_abbr );
// echo $tz_name;


// date_default_timezone_set( 'America/New_York' );
echo date_default_timezone_get();

// time()
$current_time = time();
echo "time(): { $current_time }<br>";
echo "<br>";

// strtotime()
$tomorrow1 = $current_time + ( 60 * 60 * 24 );
echo "time() + (60*60*24): { $tomorrow1 }<br>";
$tomorrow2 = strtotime( 'tomorrow' );
echo "strtotime( 'tomorrow' ): { $tomorrow2 }<br>";
$tomorrow3 = strtotime( '+1 day' );
echo "strtotime( '+1 day' ): { $tomorrow3 }<br>";
echo "<br>";

// mktime()
$new_year1 = mktime( 0, 0, 0, 1, 1, 2017 );
echo "New Year mktime: { $new_year1 }<br>";
$new_year2 = strtotime( 'January 1, 2017' );
echo "New Year strtotime: { $new_year2 }<br>";
echo "<br>";

// date() and strftime()
echo "date(): " . date( 'l, F j, Y', $new_year1 ) . "<br>";
echo "strftime(): " . strftime( '%A, %B %e, %Y', $new_year1 ) . "<br>";
echo "<br>";

// checkdate()
$years = array( 2015, 2016, 2017, 2018, 2019, 2020 );
foreach( $years as $year ) {
    if ( checkdate( 2, 29, $year ) ) {
        echo "February in { $year } has 29 days (Leap Year).<br>";
    } else {
        echo "{ $year } is not a Leap Year.<br>";
    }
}

echo "<br>";
echo "<hr>";

// DateTime
$dt = new DateTime( 'March 1, 2018' );
echo "Date: " . $dt->format( 'l, F j, Y H:i:s' ) . "<br>";
echo "Timestamp: " . $dt->getTimestamp() . "<br>";
echo "<br>";

$timestamp = strtotime( 'June 15, 2017' ) + ( 60*60*8 );
$dt->setTimestamp( $timestamp );
echo "Date: " . $dt->format( 'l, F j, Y H:i:s' ) . "<br>";
echo "<br>";

$dt->modify( '+1 year' );
echo "Date: " . $dt->format( 'l, F j, Y H:i:s' ) . "<br>";
echo "<br>";
echo "<hr>";

// DateTimeZone
$tz = new DateTimeZone( 'Asia/Seoul' );
echo "Name: " . $tz->getName(). "<br>";
echo "Location:<br>";
$location_array = $tz->getLocation();
foreach( $location_array as $key => $value ) {
    echo "* { $key }: { $value } <br>";
}
echo "<br>";

// Create DateTime using default TZ
$dt = new DateTime( 'May 5, 2018' );
$tz = $dt->getTimezone();
echo "Default TZ: " . $tz->getName() . "<br>";
echo "Offset: " . ( $dt->getOffset() / 3600 ) . "<br>";

// Change DateTime to a new TZ
$la_tz = new DateTimeZone( 'America/Los_Angeles' );
$dt->setTimezone( $la_tz );
$tz = $dt->getTimezone();
echo "Los Angeles TZ: " . $tz->getName() . "<br>";
echo "Offset: " . ( $dt->getOffset() / 3600 ) . "<br>";

// Create a DateTime with a Custom TZ
$denver_tz = new DateTimeZone( 'America/Denver' );
$dt = new DateTime( 'July 29, 2016', $denver_tz );
$tz = $dt->getTimezone();
echo "Denver TZ: " . $tz->getName() . "<br>";
echo "Offset: " . ( $dt->getOffset() / 3600 ) . "<br>";

// DateTimeZone::getOffset( $datetime_object )
echo "TZ Offset: " . $tz->getOffset( $dt ) . "<br>"; // notice this is the same as line 102, but using the DateTimeZone object and passing in a DateTime object rather than just using the DateTime object alone
echo "<br>";
echo "<hr>";

// Daylight Savings Time
$tz = new DateTimeZone( 'America/Denver' );
$dt = new DateTime( 'March 13, 2016', $tz );
echo $dt->format( 'G:i (P, T)' ) . "<br>";
$dt->modify( '+1 day' );
echo $dt->format( 'G:i (P, T)' ) . "<br>";

$array = $tz->getTransitions();

$start = time();
$end = $start + (60*60*24*14);
$array = $tz->getTransitions( $start, $end );

// View DST transitions for this year
$this_year = (int) date( 'Y' );
$timestamp_start = mktime( 0, 0, 0, 1, 1, $this_year );
$next_year = $this_year + 1;
$timestamp_end = mktime( 0, 0, 0, 1, 1, $next_year );

$tz = new DateTimeZone( 'America/Denver' );
$transitions = $tz->getTransitions( $timestamp_start, $timestamp_end );
?>
<pre>
<?php print_r( $transitions ); ?>
</pre>
<?php
echo "<br>";
echo "<hr>";

// Transitions are maintained in UTC - use DateTime to view transitions
// Append "@" to use a timestamp (always UTC, other TZ settings ignored)
$dst_starts = new DateTime( ( "@".$transitions[1]['ts'] - 1 ) ); // remove 1 sec so it starts at the right time (2:00amish)
$dst_starts->setTimezone( $tz );
$dst_ends = new DateTime( ( "@".$transitions[2]['ts'] - 1 ) );
$dst_ends->setTimeZone( $tz );
$format_string = 'l, F j, Y H:i:s';

echo "DST starts: " . $dst_starts->format( $format_string ) . "<br>";
echo "DST ends: " . $dst_ends->format( $format_string ) . "<br>";