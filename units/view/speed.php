<?php
/* 
 * Speed Measures ( speed = distance / time )
 *  - Imperial: feet per second, miles per hour 
 *  - Metric: meters per second, kilometers per hour
 *  - Maritime: knot
 */

ini_set('display_errors', 1);
// require_once( '../inc/functions.php' );
require_once( '../inc/functions-5.5.php' );

/*
 * Form submitted
 */
// Set defaults
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if( isset( $_POST[ 'submit' ] ) ) {
    
    $from_value = $_POST[ 'from_value' ];
    $from_unit = $_POST[ 'from_unit' ];
    $to_unit = $_POST[ 'to_unit' ];
    $to_value = convert_speed( $from_value, $from_unit, $to_unit );
    
}

$speed_options = array(
    'feet per second',
    'miles per hour',
    'meters per second',
    'kilometers per hour',
    'knots'
);

?>

<h2>Speed Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $speed_options as $unit ) {
                $opt = optionize( $unit );
                echo "<option value='$opt'";
                if( $from_unit == $opt ) { echo " selected"; }
                echo ">$unit</option>";
            }
            ?>
            
        </select>
    </div>
    
    <div class="entry">
        <label>To: </label>
        <input type="text" name="to_value" value="<?= float_to_string( $to_value ); ?>">
        <select name="to_unit">
            
            <?php
            foreach( $speed_options as $unit ) {
                $opt = optionize( $unit );
                echo "<option value='$opt'";
                if( $to_unit == $opt ) { echo " selected"; }
                echo ">$unit</option>";
            }
            ?>
            
        </select>
    </div>
    
    <input type="submit" name="submit" value="Submit">
    
</form>