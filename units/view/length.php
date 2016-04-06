<?php
/* 
 * Length / Distance Measures
 *  - Imperial: inch, foot, yard, mile
 *  - Metric: millimeter, centimeter, meter, kilometer
 *  - Astronomical: astronomical unit, light year, parsec
 *  - Maritime: fathom, cable, nautical mile, league
 *  - Survey: link, rod, chain, furlong
 */

require_once( '../inc/functions.php' );

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
?>

<h2>Area Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            <option value=""<?php if( $from_unit == '' ) { echo " selected"; } ?>disabled>From Unit</option>
            <option value="inches"<?php if( $from_unit == 'inches' ) { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if( $from_unit == 'feet' ) { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if( $from_unit == 'yards' ) { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if( $from_unit == 'miles' ) { echo " selected"; } ?>>miles</option>
            <option value="nanometers"<?php if( $from_unit == 'nanometers' ) { echo " selected"; } ?>>nanometers</option>
            <option value="micrometers"<?php if( $from_unit == 'micrometers' ) { echo " selected"; } ?>>micrometers</option>
            <option value="millimeters"<?php if( $from_unit == 'millimeters' ) { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if( $from_unit == 'centimeters' ) { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if( $from_unit == 'meters' ) { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if( $from_unit == 'kilometers' ) { echo " selected"; } ?>>kilometers</option>
            <option value="astro-units"<?php if( $from_unit == 'astro-units' ) { echo " selected"; } ?>>astronomical units</option>
            <option value="light-years"<?php if( $from_unit == 'light-years' ) { echo " selected"; } ?>>light-years</option>
            <option value="parsecs"<?php if( $from_unit == 'parsecs' ) { echo " selected"; } ?>>parsecs</option>
            <option value="fathoms"<?php if( $from_unit == 'fathoms' ) { echo " selected"; } ?>>fathoms</option>
            <option value="cables-intl"<?php if( $from_unit == 'cables-intl' ) { echo " selected"; } ?>>cables (international)</option>
            <option value="cables-us"<?php if( $from_unit == 'cables-us' ) { echo " selected"; } ?>>cables (US)</option>
            <option value="naut-miles"<?php if( $from_unit == 'naut-miles' ) { echo " selected"; } ?>>nautical miles</option>
            <option value="leagues"<?php if( $from_unit == 'leagues' ) { echo " selected"; } ?>>leagues</option>
            <option value="links"<?php if( $from_unit == 'links' ) { echo " selected"; } ?>>links</option>
            <option value="rods"<?php if( $from_unit == 'rods' ) { echo " selected"; } ?>>rods</option>
            <option value="chains"<?php if( $from_unit == 'chains' ) { echo " selected"; } ?>>chains</option>
            <option value="furlongs"<?php if( $from_unit == 'furlongs' ) { echo " selected"; } ?>>furlongs</option>
        </select>
    </div>
    
    <div class="entry">
        <label>To: </label>
        <input type="text" name="to_value" value="<?= $to_value; ?>">
        <select name="to_unit">
            <option value=""<?php if( $to_unit == '' ) { echo " selected"; } ?>disabled>To Unit</option>
            <option value="inches"<?php if( $to_unit == 'inches' ) { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if( $to_unit == 'feet' ) { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if( $to_unit == 'yards' ) { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if( $to_unit == 'miles' ) { echo " selected"; } ?>>miles</option>
            <option value="nanometers"<?php if( $to_unit == 'nanometers' ) { echo " selected"; } ?>>nanometers</option>
            <option value="micrometers"<?php if( $to_unit == 'micrometers' ) { echo " selected"; } ?>>micrometers</option>
            <option value="millimeters"<?php if( $to_unit == 'millimeters' ) { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if( $to_unit == 'centimeters' ) { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if( $to_unit == 'meters' ) { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if( $to_unit == 'kilometers' ) { echo " selected"; } ?>>kilometers</option>
            <option value="astro-units"<?php if( $to_unit == 'astro-units' ) { echo " selected"; } ?>>astronomical units</option>
            <option value="light-years"<?php if( $to_unit == 'light-years' ) { echo " selected"; } ?>>light-years</option>
            <option value="parsecs"<?php if( $to_unit == 'parsecs' ) { echo " selected"; } ?>>parsecs</option>
            <option value="fathoms"<?php if( $to_unit == 'fathoms' ) { echo " selected"; } ?>>fathoms</option>
            <option value="cables-intl"<?php if( $to_unit == 'cables-intl' ) { echo " selected"; } ?>>cables (international)</option>
            <option value="cables-us"<?php if( $to_unit == 'cables-us' ) { echo " selected"; } ?>>cables (US)</option>
            <option value="naut-miles"<?php if( $to_unit == 'naut-miles' ) { echo " selected"; } ?>>nautical miles</option>
            <option value="leagues"<?php if( $to_unit == 'leagues' ) { echo " selected"; } ?>>leagues</option>
            <option value="links"<?php if( $to_unit == 'links' ) { echo " selected"; } ?>>links</option>
            <option value="rods"<?php if( $to_unit == 'rods' ) { echo " selected"; } ?>>rods</option>
            <option value="chains"<?php if( $to_unit == 'chains' ) { echo " selected"; } ?>>chains</option>
            <option value="furlongs"<?php if( $to_unit == 'furlongs' ) { echo " selected"; } ?>>furlongs</option>
        </select>
    </div>
    
    <input type="submit" name="submit" value="Submit">
    
</form>