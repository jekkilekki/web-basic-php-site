<?php
/* 
 * Length / Distance Measures
 *  - Imperial: inch, foot, yard, mile
 *  - Metric: millimeter, centimeter, meter, kilometer
 *  - Astronomical: astronomical unit, light year, parsec
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
    $to_value = convert_length( $from_value, $from_unit, $to_unit );
    
}

$length_options = array(
    'inches',
    'feet',
    'yards',
    'miles',
    'nanometers',
    'micrometers',
    'millimeters',
    'centimeters',
    'meters',
    'kilometers',
    'astronomical units',
    'light-years',
    'parsecs',
    'fathoms',
    'cables (international)',
    'cables (US)',
    'nautical miles',
    'leagues',
    'links',
    'rods',
    'chains',
    'furlongs'
);
$silly_lengths = array(
    'attoparsecs',
    'beard-seconds',
    'Smoots',
    'Mickeys',
    'Altuves',
    'sheppies',
    'wiffles',
);

?>

<h2>Length / Distance Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $length_options as $unit ) {
                $opt = optionize( $unit );
                echo "<option value='$opt'";
                if( $from_unit == $opt ) { echo " selected"; }
                echo ">$unit</option>";
            }
            ?>
            <option value="" disabled>-- Silly Units --</option>
            <?php
            foreach( $silly_lengths as $unit ) {
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
        <input type="text" name="to_value" value="<?= float_to_string( $to_value, 20 ); ?>">
        <select name="to_unit">
            
            <?php
            foreach( $length_options as $unit ) {
                $opt = optionize( $unit );
                echo "<option value='$opt'";
                if( $from_unit == $opt ) { echo " selected"; }
                echo ">$unit</option>";
            }
            ?> 
            <option value="" disabled>-- Silly Units --</option>
            <?php
            foreach( $silly_lengths as $unit ) {
                $opt = optionize( $unit );
                echo "<option value='$opt'";
                if( $from_unit == $opt ) { echo " selected"; }
                echo ">$unit</option>";
            }
            ?>
            
        </select>
    </div>
    
    <input type="submit" name="submit" value="Submit">
    
</form>