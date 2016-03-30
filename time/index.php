<?php
require_once( 'functions.php' );

if( isset( $_POST[ 'submit' ] ) ) {
    $from_month = $_POST[ 'from_month' ];
    $from_day = $_POST[ 'from_day' ];
    $from_year = $_POST[ 'from_year' ];
    $from_hour = $_POST[ 'from_hour' ];
    $from_minute = $_POST[ 'from_minute' ];
    
    // Do some error checking / sanitizing here
    $from_time = $from_year . "/" . $from_month . "/" . $from_day . " " . $from_hour . ":" . $from_minute;
    $from_tz = $_POST[ 'from_tz' ];
    $to_tz = $_POST[ 'to_tz' ];
    
    // Prevent injection/hacking
    $tz_ids = timezone_identifiers_list();
    if( in_array( $from_tz, $tz_ids ) && in_array( $to_tz, $tz_ids ) ) {
        $from_tz_obj = new DateTimeZone( $from_tz );
        $to_tz_obj = new DateTimeZone( $to_tz );
        $converted_time = new DateTime( $from_time, $from_tz_obj );
        $converted_time->setTimezone( $to_tz_obj );
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Timezone Calculator</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="main-content">
    
        <h1>Timezone Calculator</h1>
        
        <form action="" method="POST">
        
            <dl>
                <dt>From Time:</dt>
                <dd>
                    <select name="from_month">
                        <?= month_select_options( $from_month ); ?>
                    </select>
                    <select name="from_day">
                        <?= day_select_options( $from_day ); ?>
                    </select>
                    <select name="from_year">
                        <?= year_select_options( $from_year ); ?>
                    </select>
                    -
                    <select name="from_hour">
                        <?= hour_select_options( $from_hour ); ?>
                    </select>
                    :
                    <select name="from_minute">
                        <?= minute_select_options( $from_minute ); ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>From Timezone:</dt>
                <dd>
                    <select name="from_tz">
                        <?= timezone_select_options( $from_tz ); ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>To Timezone:</dt>
                <dd>
                    <select name="to_tz">
                        <?= timezone_select_options( $to_tz ); ?>
                    </select>
                </dd>
            </dl>
            <?php if ( isset( $converted_time ) ) : ?>
            <dl>
                <dt>Converted Time:</dt>
                <dd><?= $converted_time->format( 'F j, Y \a\t g:i a' ); ?></dd>
            </dl>
            <?php endif; ?>
            <br>
            
            <div class="controls">
                <input type="submit" name="submit" value="Go">
            </div>
        
        </form>
    
    </div>
</body>
</html>