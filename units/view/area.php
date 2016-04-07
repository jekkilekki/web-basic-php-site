<?php
/* 
 * Length / Distance Measures
 *  - Imperial: sq.inch, sq.foot, sq.yard, sq.mile
 *  - Metric: sq.millimeter, sq.centimeter, sq.meter, sq.kilometer
 *  - Survey: acre, hectare
 *  - Korea: pyoung
 */

ini_set('display_errors', 1);
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

$area_options = array(
    'square inches',
    'square feet',
    'square yards',
    'square miles',
    'square millimeters',
    'square centimeters',
    'square meters',
    'square kilometers',
    'acres',
    'hectares',
    'pyoung (KO)'
);
?>

<h2>Length / Distance Conversion</h2>

<form action="" method="POST">

    <div class="entry">
        <label>From: </label>
        <input type="text" name="from_value" value="<?= $from_value; ?>">
        <select name="from_unit">
            
            <?php
            foreach( $area_options as $unit ) {
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
        <input type="text" name="to_value" value="<?= $to_value; ?>">
        <select name="to_unit">
            
            <?php
            foreach( $area_options as $unit ) {
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