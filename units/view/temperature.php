<?php
/* 
 * Temperature Measures
 *  - Systems: Celsius, Fahrenheit, Kelvin
 *  : F = (C * 180/100) + 32 = (C * 9/5) + 32 = (C * 1.8) + 32
 *  : C = (F - 32) * 100/180 = (F - 32) * 5/9 = (F - 32) / 1.8
 *  : 0K = -273.15C && 0C = 273.15K
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
    $to_value = convert_temperature( $from_value, $from_unit, $to_unit );
    
}

$temperature_options = array(
    'Celsius',
    'Fahrenheit',
    'Kelvin',
);

?>

<h2>Temperature Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $temperature_options as $unit ) {
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
            foreach( $temperature_options as $unit ) {
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