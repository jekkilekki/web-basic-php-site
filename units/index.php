<?php
/**
 * Primary Measures
 *  - Length / distance
 *  - Area
 *  - Volume / capacity
 *  - Weight / mass
 *  - Speed
 *  - Temperature
 * Other Measures
 *  - Acceleration
 *  - Density
 *  - Energy
 *  - Force
 *  - Frequency
 *  - Light
 *  - Power
 *  - Pressure
 *  - Torque
 */
ini_set('display_errors', 1);
require_once( 'inc/functions-5.5.php' );

$convert_options = array(
    'area',
    'data transfer rate',
    'digital storage',
    'energy',
    'frequency',
    'fuel economy',
    'length',
    'mass',
    'plane angle',
    'pressure',
    'speed',
    'temperature',
    'time',
    'volume'
);
// https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter
$full_convert_options = array(
    'angles',
    'area',
    'currency',
    'data transfer rate',
    'electric capacitance',
    'electric charge',
    'electric conductance',
    'electric current',
    'energy',
    'flow rate',
    'force',
    'frequency',
    'fuel consumption',
    'inductance',
    'information size',
    'length',
    'light intensity',
    'magnetic flux',
    'misc',
    'power',
    'pressure',
    'radiation dosage',
    'radioactivity',
    'speed',
    'temperature',
    'time',
    'unitless (numeric)',
    'voltage',
    'volume',
    'weight'
);

$convert_this = '';

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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Unit Conversion</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <main id="content">

        <h1>Unit Conversion</h1>
        
        <ul id="unit-types">
            <li><a href="view/length.php">Length and distance</a></li>
            <li><a href="view/area.php">Area</a></li>
            <li><a href="view/volume.php">Volume</a></li>
            <li><a href="view/mass.php">Mass</a></li>
            <li><a href="view/speed.php">Speed</a></li>
            <li><a href="view/temperature.php">Temperature</a></li>
            <li><a href="view/acceleration.php">Acceleration</a></li>
            <li><a href="view/density.php">Density</a></li>
            <li><a href="view/energy.php">Energy</a></li>
            <li><a href="view/force.php">Force</a></li>
            <li><a href="view/frequency.php">Frequency</a></li>
            <li><a href="view/light.php">Light</a></li>
            <li><a href="view/power.php">Power</a></li>
            <li><a href="view/pressure.php">Pressure</a></li>
            <li><a href="view/torque.php">Torque</a></li>
        </ul>
        
        <?php
        /*
         * Make it work like Google's : https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter
         *
         * Dynamically repopulate the lower list of options based on conversion type selected
         * @link: http://stackoverflow.com/questions/22201149/ajax-javascript-select-element-change-on-page-load-in-php
         * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
         */
        ?>
        <form id="conversion-form" action="" method="POST">
            
            <div id="conversion-type">
                <select name="conversion_type">
                    <?php
                    foreach( $convert_options as $type ) {
                        $opt = optionize( $type );
                        echo "<option value='$opt'";
                        if( $convert_this == $opt ) { echo " selected"; }
                        echo ">" . ucfirst( $type ) . "</option>";
                    }
                    ?>
                </select>
            </div><!-- END #converions-type -->
            
            <div id="conversion-units">
                <div class="entry">
                    <input type="text" name="from_value" value="<?= $from_value; ?>">
                    <select name="from_unit[]">

                        <?php
//                        foreach( $area_options as $unit ) {
//                            $opt = optionize( $unit );
//                            echo "<option value='$opt'";
//                            if( $from_unit == $opt ) { echo " selected"; }
//                            echo ">$unit</option>";
//                        }
                        ?>

                    </select>
                </div>
                <span id="equal-sign">=</span>
                <div class="entry">
                    <input type="text" name="to_value" value="<?= float_to_string( $to_value ); ?>">
                    <select name="to_unit[]">

                        <?php
//                        foreach( $area_options as $unit ) {
//                            $opt = optionize( $unit );
//                            echo "<option value='$opt'";
//                            if( $from_unit == $opt ) { echo " selected"; }
//                            echo ">$unit</option>";
//                        }
                        ?>

                    </select>
                </div>
            </div><!-- END #conversion-units -->

            <input type="submit" name="submit" value="Submit">
            
        </form><!-- END #converion-form -->
        
    </main>

    <!-- <script src="js/list.js" type="text/javascript"></script> -->
    <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>