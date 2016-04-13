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

$basic_options = array( 
    'area',
    'length and distance',
    'mass and weight',
    'speed',
    'temperature',
    'volume',
);
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
    'acceleration',
    'angles',
    'area',
    'currency',
    'data transfer rate',
    'density',
    'digital storage size',
    'electric capacitance',
    'electric charge',
    'electric conductance',
    'electric current',
    'energy',
    'flow rate',
    'force',
    'frequency',
    'fuel economy',
    'inductance',
    'length and distance',
    'light intensity',
    'magnetic flux',
    'mass and weight',
    'misc',
    'power',
    'pressure',
    'radiation dosage',
    'radioactivity',
    'speed',
    'temperature',
    'time',
    'torque',
    'unitless numeric',
    'voltage',
    'volume',
);

$convert_this = 'length_and_distance';
$convert_string = '';
$list_choice = 'default';
$show_str_input = '';
$show_all_units = '';

// Set defaults
$from_value = '';
$from_unit_str = '';
$from_unit = '';
$to_unit_str = '';
$to_unit = '';
$to_value = '';

if( isset( $_POST[ 'submit' ] ) ) {
    
    $list_choice = $_POST[ 'remember_options' ];
    $show_str_input = isset( $_POST[ 'show_str_input' ] ) ? ' checked' : '';
    $show_all_units = isset( $_POST[ 'show_all_units' ] ) ? ' checked' : '';
    
    //$convert_this = optionize( $_POST[ 'conversion_type' ] );
    $convert_this = $_POST[ 'conversion_type' ][0];
    $convert_string = $_POST[ 'convert_string' ];
    $from_value = $_POST[ 'from_value' ];
    
    // These variables maintain spaces and capitalization for output later
    $from_unit_str = str_replace( '_', ' ', $_POST[ 'from_unit' ][0] );
    $to_unit_str = str_replace( '_', ' ', $_POST[ 'to_unit' ][0] );
    
    // These variables replace spaces with underscores and lowercase everything to be sent to the functions
    $from_unit = optionize( $from_unit_str );
    $to_unit = optionize( $to_unit_str );
    
    switch( $convert_this ) {
        case 'acceleration':        
                                    $to_value = convert_acceleration( $from_value, $from_unit, $to_unit ); break;
        case 'angles': include_once( 'inc/formulas/angles.php' );              
                                    $to_value = convert_angle( $from_value, $from_unit, $to_unit ); break;
        case 'area': include_once( 'inc/formulas/length-area-speed.php' );             
                                    $to_value = convert_area( $from_value, $from_unit, $to_unit ); break;
        case 'currency':            
                                    $to_value = convert_currency( $from_value, $from_unit, $to_unit ); break;
        case 'data_transfer_rate': include_once( 'inc/formulas/data.php' ); 
                                    $to_value = convert_data_speed( $from_value, $from_unit, $to_unit ); break;
        case 'density':             
                                    $to_value = convert_density( $from_value, $from_unit, $to_unit ); break;
        case 'digital_storage': include_once( 'inc/formulas/data.php' );
                                    $to_value = convert_data( $from_value, $from_unit, $to_unit ); break;
        case 'electric_capacitance':
                                    $to_value = convert_electric_cap( $from_value, $from_unit, $to_unit ); break;
        case 'electric_charge':     
                                    $to_value = convert_electric_charge( $from_value, $from_unit, $to_unit ); break;
        case 'electric_conductance':
                                    $to_value = convert_electric_cond( $from_value, $from_unit, $to_unit ); break;
        case 'electric_current':    
                                    $to_value = convert_electric_curr( $from_value, $from_unit, $to_unit ); break;
        case 'energy': include_once( 'inc/formulas/energy.php' );             
                                    $to_value = convert_energy( $from_value, $from_unit, $to_unit ); break;
        case 'flow_rate':           
                                    $to_value = convert_flow( $from_value, $from_unit, $to_unit ); break;
        case 'force':               
                                    $to_value = convert_force( $from_value, $from_unit, $to_unit ); break;
        case 'frequency':           
                                    $to_value = convert_frequency( $from_value, $from_unit, $to_unit ); break;
        case 'fuel_economy':        
                                    $to_value = convert_fuel( $from_value, $from_unit, $to_unit ); break;
        case 'inductance':          
                                    $to_value = convert_inductance( $from_value, $from_unit, $to_unit ); break;
        case 'length_and_distance': include_once( 'inc/formulas/length-area-speed.php' );
                                    $to_value = convert_length( $from_value, $from_unit, $to_unit ); break;
        case 'light_intensity':     
                                    $to_value = convert_light( $from_value, $from_unit, $to_unit ); break;
        case 'magnetic_flux':       
                                    $to_value = convert_magnetic( $from_value, $from_unit, $to_unit ); break;
        case 'mass_and_weight': include_once( 'inc/formulas/mass.php' );
                                    $to_value = convert_mass( $from_value, $from_unit, $to_unit ); break;
        case 'misc':                
                                    $to_value = convert_misc( $from_value, $from_unit, $to_unit ); break;
        case 'power':               
                                    $to_value = convert_power( $from_value, $from_unit, $to_unit ); break;
        case 'pressure':            
                                    $to_value = convert_pressure( $from_value, $from_unit, $to_unit ); break;
        case 'radiation_dosage':    
                                    $to_value = convert_radiation( $from_value, $from_unit, $to_unit ); break;
        case 'radioactivity':       
                                    $to_value = convert_radioactivity( $from_value, $from_unit, $to_unit ); break;
        case 'speed': include_once( 'inc/formulas/length-area-speed.php' );              
                                    $to_value = convert_speed( $from_value, $from_unit, $to_unit ); break;
        case 'temperature': include_once( 'inc/formulas/temperature.php' );        
                                    $to_value = convert_temperature( $from_value, $from_unit, $to_unit ); break;
        case 'time':                
                                    $to_value = convert_time( $from_value, $from_unit, $to_unit ); break;
        case 'torque':              
                                    $to_value = convert_torque( $from_value, $from_unit, $to_unit ); break;
        case 'unitless_numeric':    
                                    $to_value = convert_unitless( $from_value, $from_unit, $to_unit ); break;
        case 'voltage':             
                                    $to_value = convert_voltage( $from_value, $from_unit, $to_unit ); break;
        case 'volume': include_once( 'inc/formulas/volume.php' );             
                                    $to_value = convert_volume( $from_value, $from_unit, $to_unit ); break;
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
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <main id="content">

<!--        <h1>Unit Converter</h1>-->
        
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
//        echo '<pre>';
//        var_dump( $_POST );
//        echo '</pre>';
        ?>
        <form id="conversion-form" action="" method="POST">
            <h2>Unit Converter</h2>
            
            <ol id="list-options">
                <li name="basic" value="0" class="convert-list-options <?= $list_choice == 'basic' ? ' active' : ''; ?>">Basic</li>
                <li name="default" value="1" class="convert-list-options <?= $list_choice == 'default' ? ' active' : ''; ?>">Default</li>
                <li name="advanced" value="2" class="convert-list-options <?= $list_choice == 'advanced' ? ' active' : ''; ?>">Advanced</li>
            </ol>
            <input type="hidden" id="remember_options" value="<?= $list_choice; ?>" name="remember_options">
            
            <div id="show-input-option" class="convert-list-options no-border">
                <input type="checkbox" name="show_str_input" id="show_str_input" <?= $show_str_input; ?>>Show input field
            </div>
            
            <div id="conversion-type">
                <input type="text" id="convert_string" name="convert_string" value="<?= $convert_string; ?>" placeholder="Format: X [units] to [units]">
                <select name="conversion_type[]">
                    
                    <?php
//                    if( $list_choice == 'advanced' ) {
//                        foreach( $full_convert_options as $type ) {
//                            $opt = optionize( $type );
//                            echo "<option value='$opt'";
//                            if( $convert_this == $opt ) { echo " selected"; }
//                            echo ">" . ucfirst( $type ) . "</option>";
//                        }
//                    } elseif( $list_choice == 'default' ) {
//                        foreach( $convert_options as $type ) {
//                            $opt = optionize( $type );
//                            echo "<option value='$opt'";
//                            if( $convert_this == $opt ) { echo " selected"; }
//                            echo ">" . ucfirst( $type ) . "</option>";
//                        }
//                    } else {
//                        foreach( $basic_options as $type ) {
//                            $opt = optionize( $type );
//                            echo "<option value='$opt'";
//                            if( $convert_this == $opt ) { echo " selected"; }
//                            echo ">" . ucfirst( $type ) . "</option>";
//                        }
//                    }
                    ?>
                    
                </select>
                <input type="hidden" id="selected_list" value="<?= $convert_this; ?>">
            </div><!-- END #converions-type -->
            
            <div id="conversion-units">
                <div class="entry">
                    <p>From:</p>
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
                    <input type="hidden" id="from-units" value="<?= $from_unit_str; ?>">
                </div>
                <span id="equal-sign">=</span>
                <div class="entry">
                    <p>To:</p>
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
                    <input type="hidden" id="to-units" value="<?= $to_unit_str; ?>">
                </div>
            </div><!-- END #conversion-units -->
            
            <div class="convert-list-options no-border">
                <input id="full_options" name="show_all_units" type="checkbox" <?= $show_all_units; ?>>Show ALL units
            </div>
            
            <div class="convert-list-options no-border right">
                <input type="submit" name="submit" value="Convert">
            </div>
            
        </form><!-- END #converion-form -->
        
    </main>
    
    <!-- <script src="js/list.js" type="text/javascript"></script> -->
    <script src="js/list-choice.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>