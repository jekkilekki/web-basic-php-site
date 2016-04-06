<?php
/* 
 * Length / Distance Measures
 *  - Imperial: sq.inch, sq.foot, sq.yard, sq.mile
 *  - Metric: sq.millimeter, sq.centimeter, sq.meter, sq.kilometer
 *  - Survey: acre, hectare
 *  - Korea: pyoung
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
    $to_value = convert_area( $from_value, $from_unit, $to_unit );
    
}
?>

<h2>Length / Distance Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            <option value=""<?php if( $from_unit == '' ) { echo " selected"; } ?>disabled>From Unit</option>
            <option value="sq_inches"<?php if( $from_unit == 'sq_inches' ) { echo " selected"; } ?>>square inches</option>
            <option value="sq_feet"<?php if( $from_unit == 'sq_feet' ) { echo " selected"; } ?>>square feet</option>
            <option value="sq_yards"<?php if( $from_unit == 'sq_yards' ) { echo " selected"; } ?>>square yards</option>
            <option value="sq_miles"<?php if( $from_unit == 'sq_miles' ) { echo " selected"; } ?>>square miles</option>
            <option value="sq_nanometers"<?php if( $from_unit == 'sq_nanometers' ) { echo " selected"; } ?>>square nanometers</option>
            <option value="sq_micrometers"<?php if( $from_unit == 'sq_micrometers' ) { echo " selected"; } ?>>square micrometers</option>
            <option value="sq_millimeters"<?php if( $from_unit == 'sq_millimeters' ) { echo " selected"; } ?>>square millimeters</option>
            <option value="sq_centimeters"<?php if( $from_unit == 'sq_centimeters' ) { echo " selected"; } ?>>square centimeters</option>
            <option value="sq_meters"<?php if( $from_unit == 'sq_meters' ) { echo " selected"; } ?>>square meters</option>
            <option value="sq_kilometers"<?php if( $from_unit == 'sq_kilometers' ) { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if( $from_unit == 'acres' ) { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if( $from_unit == 'hectares' ) { echo " selected"; } ?>>hectares</option>
            <option value="pyoung-ko"<?php if( $from_unit == 'pyoung-ko' ) { echo " selected"; } ?>>pyoung (KO)</option>
        </select>
    </div>
    
    <div class="entry">
        <label>To: </label>
        <input type="text" name="to_value" value="<?= $to_value; ?>">
        <select name="to_unit">
            <option value=""<?php if( $to_unit == '' ) { echo " selected"; } ?>disabled>To Unit</option>
            <option value="sq_inches"<?php if( $to_unit == 'sq_inches' ) { echo " selected"; } ?>>square inches</option>
            <option value="sq_feet"<?php if( $to_unit == 'sq_feet' ) { echo " selected"; } ?>>square feet</option>
            <option value="sq_yards"<?php if( $to_unit == 'sq_yards' ) { echo " selected"; } ?>>square yards</option>
            <option value="sq_miles"<?php if( $to_unit == 'sq_miles' ) { echo " selected"; } ?>>square miles</option>
            <option value="sq_nanometers"<?php if( $to_unit == 'sq_nanometers' ) { echo " selected"; } ?>>square nanometers</option>
            <option value="sq_micrometers"<?php if( $to_unit == 'sq_micrometers' ) { echo " selected"; } ?>>square micrometers</option>
            <option value="sq_millimeters"<?php if( $to_unit == 'sq_millimeters' ) { echo " selected"; } ?>>square millimeters</option>
            <option value="sq_centimeters"<?php if( $to_unit == 'sq_centimeters' ) { echo " selected"; } ?>>square centimeters</option>
            <option value="sq_meters"<?php if( $to_unit == 'sq_meters' ) { echo " selected"; } ?>>square meters</option>
            <option value="sq_kilometers"<?php if( $to_unit == 'sq_kilometers' ) { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if( $to_unit == 'acres' ) { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if( $to_unit == 'hectares' ) { echo " selected"; } ?>>hectares</option>
            <option value="pyoung-ko"<?php if( $to_unit == 'pyoung-ko' ) { echo " selected"; } ?>>pyoung (KO)</option>
        </select>
    </div>
    
    <input type="submit" name="submit" value="Submit">
    
</form>