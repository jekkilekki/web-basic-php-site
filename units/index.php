<?php
// Another excellent conversion chart http://m.convert-me.com/en/convert/length/picaata.html

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
    'angles',
    'area',
    'data transfer rate',
    'digital storage',
    'energy',
    'frequency',
    'fuel economy',
    'length and distance',
    'mass and weight',
    'pressure',
    'speed',
    'temperature',
    'time',
    'volume'
);
// https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter
$full_convert_options = array(
    //'acceleration',
    //'angles',
    'area',
    //'currency',
    //'data transfer rate',
    //'density',
    //'digital storage size',
    //'electric capacitance',
    //'electric charge',
    //'electric conductance',
    //'electric current',
    //'energy',
    //'flow rate',
    //'force',
    //'frequency',
    //'fuel economy',
    //'inductance',
    'length and distance',
    //'light intensity',
    //'magnetic flux',
    'mass and weight',
    //'misc',
    //'power',
    //'pressure',
    //'radiation dosage',
    //'radioactivity',
    'speed',
    'temperature',
    //'time',
    //'torque',
    //'unitless numeric',
    //'voltage',
    'volume',
);

$convert_this = '';
$convert_string = '';

// Set defaults
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if( isset( $_POST[ 'submit' ] ) ) {
    
    //$convert_this = optionize( $_POST[ 'conversion_type' ] );
    $convert_this = $_POST[ 'conversion_type' ];
    $convert_string = $_POST[ 'convert_string' ];
    $from_value = $_POST[ 'from_value' ];
    $from_unit = $_POST[ 'from_unit' ][0];
    $to_unit = $_POST[ 'to_unit' ][0];
    
    echo '<script>alert(' . $convert_this . ');</script>';
    
    switch( $convert_this ) {
        case 'acceleration':
            $to_value = convert_acceleration( $from_value, $from_unit, $to_unit );
            break;
        case 'angles':
            $to_value = convert_angles( $from_value, $from_unit, $to_unit );
            break;
        case 'area':
            $to_value = convert_area( $from_value, $from_unit, $to_unit );
            break;
        case 'currency':
            $to_value = convert_currency( $from_value, $from_unit, $to_unit );
            break;
        case 'data_transfer_rate':
            $to_value = convert_data_transfer( $from_value, $from_unit, $to_unit );
            break;
        case 'density':
            $to_value = convert_density( $from_value, $from_unit, $to_unit );
            break;
        case 'digital_storage_size':
            $to_value = convert_digital_storage( $from_value, $from_unit, $to_unit );
            break;
        case 'electric_capacitance':
            $to_value = convert_electric_cap( $from_value, $from_unit, $to_unit );
            break;
        case 'electric_charge':
            $to_value = convert_electric_charge( $from_value, $from_unit, $to_unit );
            break;
        case 'electric_conductance':
            $to_value = convert_electric_cond( $from_value, $from_unit, $to_unit );
            break;
        case 'electric_current':
            $to_value = convert_electric_curr( $from_value, $from_unit, $to_unit );
            break;
        case 'energy':
            $to_value = convert_energy( $from_value, $from_unit, $to_unit );
            break;
        case 'flow_rate':
            $to_value = convert_flow( $from_value, $from_unit, $to_unit );
            break;
        case 'force':
            $to_value = convert_force( $from_value, $from_unit, $to_unit );
            break;
        case 'frequency':
            $to_value = convert_frequency( $from_value, $from_unit, $to_unit );
            break;
        case 'fuel_economy':
            $to_value = convert_fuel( $from_value, $from_unit, $to_unit );
            break;
        case 'inductance':
            $to_value = convert_inductance( $from_value, $from_unit, $to_unit );
            break;
        case 'length_and_distance':
            $to_value = convert_length( $from_value, $from_unit, $to_unit );
            break;
        case 'light_intensity':
            $to_value = convert_light( $from_value, $from_unit, $to_unit );
            break;
        case 'magnetic_flux':
            $to_value = convert_magnetic( $from_value, $from_unit, $to_unit );
            break;
        case 'mass_and_weight':
            $to_value = convert_mass( $from_value, $from_unit, $to_unit );
            break;
        case 'misc':
            $to_value = convert_misc( $from_value, $from_unit, $to_unit );
            break;
        case 'power':
            $to_value = convert_power( $from_value, $from_unit, $to_unit );
            break;
        case 'pressure':
            $to_value = convert_pressure( $from_value, $from_unit, $to_unit );
            break;
        case 'radiation_dosage':
            $to_value = convert_radiation( $from_value, $from_unit, $to_unit );
            break;
        case 'radioactivity':
            $to_value = convert_radioactivity( $from_value, $from_unit, $to_unit );
            break;
        case 'speed':
            $to_value = convert_speed( $from_value, $from_unit, $to_unit );
            break;
        case 'temperature':
            $to_value = convert_temperature( $from_value, $from_unit, $to_unit );
            break;
        case 'time':
            $to_value = convert_time( $from_value, $from_unit, $to_unit );
            break;
        case 'torque':
            $to_value = convert_torque( $from_value, $from_unit, $to_unit );
            break;
        case 'unitless_numeric':
            $to_value = convert_unitless( $from_value, $from_unit, $to_unit );
            break;
        case 'voltage':
            $to_value = convert_voltage( $from_value, $from_unit, $to_unit );
            break;
        case 'volume':
            $to_value = convert_volume( $from_value, $from_unit, $to_unit );
            break;
        default:
            $to_value = 'Unsupported conversion type.';
    }
    
    // $to_value = convert_area( $from_value, $from_unit, $to_unit );
    
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
<!--            <li><a href="view/length.php">Length and distance</a></li>-->
<!--            <li><a href="view/area.php">Area</a></li>-->
<!--            <li><a href="view/volume.php">Volume</a></li>-->
<!--            <li><a href="view/mass.php">Mass</a></li>-->
<!--            <li><a href="view/speed.php">Speed</a></li>-->
<!--            <li><a href="view/temperature.php">Temperature</a></li>-->
<!--            <li><a href="view/acceleration.php">Acceleration</a></li>-->
<!--            <li><a href="view/density.php">Density</a></li>-->
<!--            <li><a href="view/energy.php">Energy</a></li>-->
<!--            <li><a href="view/force.php">Force</a></li>-->
<!--            <li><a href="view/frequency.php">Frequency</a></li>-->
<!--            <li><a href="view/light.php">Light</a></li>-->
<!--            <li><a href="view/power.php">Power</a></li>-->
<!--            <li><a href="view/pressure.php">Pressure</a></li>-->
<!--            <li><a href="view/torque.php">Torque</a></li>-->
        </ul>
        
        <?php
        /*
         * Make it work like Google's : https://support.google.com/websearch/answer/3284611?hl=en-KR#unitconverter
         *
         * Dynamically repopulate the lower list of options based on conversion type selected
         * @link: http://stackoverflow.com/questions/22201149/ajax-javascript-select-element-change-on-page-load-in-php
         * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
         */
        echo '<pre>';
        var_dump( $_POST );
        echo '</pre>';
        ?>
        <form id="conversion-form" action="" method="POST">
            
            <div id="conversion-type">
                <p></p>
                <input type="text" id="convert_string" name="convert_string" value="<?= $convert_string; ?>">
                <select name="conversion_type">
                    
                    <?php
                    if( false ) {
                        foreach( $convert_options as $type ) {
                            $opt = optionize( $type );
                            echo "<option value='$opt'";
                            if( $convert_this == $opt ) { echo " selected"; }
                            echo ">" . ucfirst( $type ) . "</option>";
                        }
                    } else {
                        foreach( $full_convert_options as $type ) {
                            $opt = optionize( $type );
                            echo "<option value='$opt'";
                            if( $convert_this == $opt ) { echo " selected"; }
                            echo ">" . ucfirst( $type ) . "</option>";
                        }
                    }
                    ?>
                    
                </select>
            </div><!-- END #converions-type -->
            
            <div id="conversion-units">
                <div class="entry">
                    <p id="from-units"><?= "From: $from_unit"; ?></p>
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
                    <p id="to-units"><?= "To: $to_unit"; ?></p>
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