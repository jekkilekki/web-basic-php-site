<?php
/* 
 * Length / Distance Measures
 *  - cubic inch, cubic foot, cubic centimeter, cubic meter
 *  - Imperial: gallon, quart, pint, cup, ounce, tablespoon, teaspoon 
 *      // almost 80% size of US measures
 *  - US: gallon, quart, pint, cup, ounce, tablespoon, teaspoon
 *  - Metric: milliliter, liter
 *  - Maritime: fathom, cable, nautical mile, league
 *  - Survey: link, rod, chain, furlong
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
    $to_value = convert_volume( $from_value, $from_unit, $to_unit );
    
}

$volume_options = array(
    'cubic inches',
    'cubic feet',
    'Imperial gallons',
    'Imperial quarts',
    'Imperial pints',
    'Imperial cups',
    'Imperial ounces',
    'Imperial tablespoons',
    'Imperial teaspoons',
    'US gallons',
    'US quarts',
    'US pints',
    'US cups',
    'US ounces',
    'US tablespoons',
    'US teaspoons',
    'cubic centimeters',
    'cubic meters',
    'liters',
    'milliliters'
);

?>

<h2>Volume Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $volume_options as $unit ) {
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
            foreach( $volume_options as $unit ) {
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