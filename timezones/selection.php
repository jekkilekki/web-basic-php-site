<?php
    session_start();

    $tz_ids = timezone_identifiers_list();
    // $tz_ids = DateTimeZone::listIdentifiers();

    function format_hours_minutes( $float ) {
        $hours = floor( $float );
        $minutes = ( $float - $hours ) * 60;
        return sprintf( "%+02d:%02d", $hours, $minutes );
    }

    $user_tz_id = NULL;
    if( isset( $_POST[ 'submit' ] ) ) {
        // Save the TZ choice
        $tz_choice = $_POST[ 'tz_choice' ];
        // Only accept value if it is in the list
        if ( in_array( $tz_choice, $tz_ids ) ) {
            $_SESSION[ 'user_tz_id' ] = $tz_choice;
            $user_tz_id = $tz_choice;
        }
    } else {
        // Check for previous TZ settings
        $user_tz_id = isset( $_SESSION[ 'user_tz_id' ] ) ? $_SESSION[ 'user_tz_id' ] : 'UTC';
    }

    function get_user_timezone() {
        if( isset( $_SESSION[ 'user_tz_id' ] ) ) {
            $user_tz_id = $_SESSION[ 'user_tz_id' ];
            $user_timezone = new DateTimeZone( $user_tz_id );
        } else {
            $user_timezone = new DateTimeZone( 'UTC' );
        }
        return $user_timezone;
    }

    $user_timezone = get_user_timezone();

    $format = 'F j, g:i a T';
    $utc_tz = new DateTimeZone( 'UTC' );

    $utc_start = 'Dec 20 11:00pm';
    $dt_start = new DateTime( $utc_start, $utc_tz );
    $dt_start->setTimezone( $user_timezone );
    $start_time = $dt_start->format( $format );

    $utc_end = 'Dec 21 3:00am';
    $dt_end = new DateTime( $utc_end, $utc_tz );
    $dt_end->setTimezone( $user_timezone );
    $end_time = $dt_end->format( $format );
    
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Time Zone Selection</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="main-content">
        
        <h1>Time Zone Selection</h1>
        <div id="current-time">
            Current Time: <span class="time">
            <?php
            $dt = new DateTime( 'now', $user_timezone );
            echo $dt->format( 'F j, g:i a T' );
            ?>
            </span>
        </div>
        <form action="" method="POST">
            Preferred Time Zone:
            <select name="tz_choice">
                <?php
                $dt = new DateTime( 'now' );
                foreach ( $tz_ids as $zone ) {
                    $this_tz = new DateTimeZone( $zone );
                    $dt->setTimezone( $this_tz );
                    // $offset = $dt->getOffset() / 3600; // option 1: only number
                    // $offset = format_hours_minutes( $dt->getOffset() / 3600 ); // option 2: with function
                    $offset = $dt->format( 'P' ); // option 3
                    
                    echo "<option value='" . $zone . "'";
                    if ( $user_tz_id == $zone ) { echo " selected"; }
                    echo ">";
                    echo $zone . " (UTC/GMT $offset)";
                    echo "</option>";
                }
                ?>
            </select>
            <br>
            
            <div class="controls">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        
        <h2>Notice of Upcoming Maintenance Window</h2>
        <p>This website will be offline for routine maintenance from 
            <span class="time"><?= $start_time; ?></span> to 
            <span class="time"><?= $end_time; ?></span>.
        </p>
        
    </div>
</body>
</html>