<?php
/* 
 * Mass / Weight Measures
 *  : mass = amount of matter (doesn't change) - uses a balance : standard unit = kilogram
 *  : weight = amount of gravity pull (can change (on the moon)) - uses a scale = newton
 *      weight in Newtons = 9.8 * mass in kg
 *
 *  - Imperial: ounce, pound, stone, long ton 
 *  - US: short ton
 *  - Metric: milligram, gram, kilogram, tonne
 *  - Other: troy ounce, solar mass, Plank mass
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
    $to_value = convert_mass( $from_value, $from_unit, $to_unit );
    
}

$mass_options = array(
    'ounces',
    'pounds',
    'stones',
    'long tons',
    'short tons',
    'milligrams',
    'grams',
    'kilograms',
    'metric tonnes',
    'carats'            // http://io9.gizmodo.com/5827925/ten-unbelievably-strange-units-of-measurement
);

?>

<h2>Mass Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $mass_options as $unit ) {
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
            foreach( $mass_options as $unit ) {
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