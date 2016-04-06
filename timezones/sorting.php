<?php
$tz_ids = timezone_identifiers_list();
// $tz_ids = DateTimeZone::listIdentifiers();

$cities = array(
    'Africa/Algiers',
    'Africa/Cairo',
    'Africa/Casablanca',
    'Africa/Johannesburg',
    'Africa/Lagos',
    'Africa/Nairobi',
    'America/Anchorage',
    'America/Argentina/Buenos_Aires',
    'America/Boise',
    'America/Cancun',
    'America/Chicago',
    'America/Denver',
    'America/Detroit',
    'America/Halifax',
    'America/Los_Angeles',
    'America/Mexico_City',
    'America/New_York',
    'America/Phoenix',
    'America/Toronto',
    'America/Vancouver',
    'America/Winnipeg',
    'Asia/Seoul',
    'Asia/Tokyo'
);

$city_names = array(
    'Tokyo, Japan'              => 'Asia/Tokyo',
    'New York, USA'             => 'America/New_York',
    'Sao Paulo, Brazil'         => 'America/Sao_Paulo',
    'Seoul, South Korea'        => 'Asia/Seoul',
    'Mexico City, Mexico'       => 'America/Mexico_City',
    'Osaka, Japan'              => 'Asia/Tokyo',
    'Manila, Philippines'       => 'Asia/Manila',
    'Mumbai, India'             => 'Asia/Kolkata',
    'Delhi, India'              => 'Asia/Kolkata',
    'Jakarta, Indonesia'        => 'Asia/Jakarta',
    'Lagos, Nigeria'            => 'Africa/Lagos',
    'Kolkata, India'            => 'Asia/Kolkata',
    'Cairo, Egypt'              => 'Africa/Cairo',
    'Los Angeles, USA'          => 'America/Los_Angeles',
    'Buenos Aires, Argentina'   => 'America/Argentina/Buenos_Aires',
    'Rio de Janeiro, Brazil'    => 'America/Sao_Paulo',
    'Moscow, Russia'            => 'Europe/Moscow',
    'Shanghai, China'           => 'Asia/Shanghai',
    'Karachi, Pakistan'         => 'Asia/Karachi',
    'Paris, France'             => 'Europe/Paris',
    'Istanbul, Turkey'          => 'Europe/Istanbul',
    'Nagoya, Japan'             => 'Asia/Tokyo',
    'Beijing, China'            => 'Asia/Shanghai',
    'Chicago, USA'              => 'America/Chicago',
    'London, UK'                => 'Europe/London'
);

function offset_compare( $a, $b ) {
    if( $a[1] == $b[1] ) { return 0; }
    if( $a[1] > $b[1] ) { return 1; }
    if( $a[1] < $b[1] ) { return -1; }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Current World Times</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="main-content">
    
        <h1>Current World Times</h1>
        
        <?php
        $output_array = array();
        $dt = new DateTime( 'now' );
        foreach( $city_names as $city => $zone ) {
            $this_tz = new DateTimeZone( $zone );
            $dt->setTimezone( $this_tz );
            $time_in_city = $dt->format( 'g:i a' );
            $offset = $dt->format( 'Z' );
            $output_array[ $city ] = array( $time_in_city, $offset );
        }
        // asort( $output_array ); // sorts on value of array - let's create custom sort
        uasort( $output_array, 'offset_compare' );
       
        // foreach ( $cities as $zone ) : 
        foreach( $output_array as $city => $time_offset ) :
            list( $time_in_city, $offset ) = $time_offset;
            
        ?>
         
            <dl>
                <dt><?= $city; ?></dt>
                <dd><?= $time_in_city; ?></dd>
            </dl>
        
        <?php
        endforeach; ?>
    
    </div>
</body>
</html>