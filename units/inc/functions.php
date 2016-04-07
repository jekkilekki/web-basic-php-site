<?php 
/*
 * Functions file - handles ALL conversion functions
 */

/*
 * PHP Notes
 *  - in 5.3, can't assign arrays to constants
 *  - in 5.6, CAN assign arrays to constants USE const
 *  - in 7.0, can use define rather than const
 */

/*
 * =================================================================================
 *
 * GENERAL functions 
 *
 * =================================================================================
 */
function optionize( $string ) {
    return str_replace( ' ', '_', strtolower( $string ) );
}

/*
 * =================================================================================
 *
 * LENGTH conversions
 * Use METERS as common unit - convert ALL to meters, then convert to specified unit
 *
 * =================================================================================
 */
const LENGTH_TO_METER = array(
    'inches'        => 0.0254,
    'feet'          => 0.3048,
    'yards'         => 0.9144,
    'miles'         => 1609.344,
    'nanometers'    => 0.000000001,
    'micrometers'   => 0.000001,
    'millimeters'   => 0.001,
    'centimeters'   => 0.01,
    'meters'        => 1,
    'kilometers'    => 1000,
    'astro-units'   => 149600000000,
    'light-years'   => 9461000000000000,
    'parsecs'       => 30860000000000000,
    'fathoms'       => 1.8288,
    'cables-intl'   => 185.2,
    'cables-us'     => 219.456,
    'naut-miles'    => 1852,
    'leagues'       => 5556,
    'links'         => 0.201168,
    'rods'          => 5.0292,
    'chains'        => 20.1168,
    'furlongs'      => 201.168,
    // Area
    'acres'         => 63.6149072341, // sqrt(4046.8564224) - it will be squared in the function
    'hectares'      => 100,           // sqrt(10000)
    'pyoung-ko'     => 1.81818590909, // sqrt(3.3058)
);

function x_to_meters( $value, $from_unit ) {
    if( array_key_exists( $from_unit, LENGTH_TO_METER ) ) {
        return $value * LENGTH_TO_METER[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_meters( $value, $to_unit ) {
    if( array_key_exists( $to_unit, LENGTH_TO_METER ) ) {
        return $value / LENGTH_TO_METER[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_length( $value, $from_unit, $to_unit ) {
    $meter_value = x_to_meters( $value, $from_unit );
    $new_value = x_from_meters( $meter_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * AREA conversions
 * Use METERS as common unit - convert ALL to meters, then convert to specified unit
 *
 * =================================================================================
 */
function x_to_sq_meters( $value, $from_unit ) {
    $from_unit = str_replace( 'square_', '', $from_unit );
    if( array_key_exists( $from_unit, LENGTH_TO_METER ) ) {
        return $value * pow( LENGTH_TO_METER[ $from_unit ], 2 );
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_sq_meters( $value, $to_unit ) {
    $to_unit = str_replace( 'sq_', '', $to_unit );
    if( array_key_exists( $to_unit, LENGTH_TO_METER ) ) {
        return $value / pow( LENGTH_TO_METER[ $to_unit ], 2 );
    } else {
        return 'Unsupported unit.';
    }
}

function convert_area( $value, $from_unit, $to_unit ) {
    $sq_meter_value = x_to_sq_meters( $value, $from_unit );
    $new_value = x_from_sq_meters( $sq_meter_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * VOLUME conversions
 * Use LITERS as common unit - convert ALL to liters, then convert to specified unit
 *
 * =================================================================================
 */
const VOLUME_TO_LITER = array(
    'cubic_inches'          => 0.0163871,
    'cubic_feet'            => 28.3168,
    'cubic_centimeters'     => 0.001,
    'cubic_meters'          => 1000,
    'imperial_gallons'      => 4.54609,
    'imperial_quarts'       => 1.13652,
    'imperial_pints'        => 0.568261,
    'imperial_cups'         => 0.284131,
    'imperial_ounces'       => 0.0284131,
    'imperial_tablespoons'  => 0.0177582,
    'imperial_teaspoons'    => 0.00591939,
    'us_gallons'            => 3.78541,
    'us_quarts'             => 0.946353,
    'us_pints'              => 0.473176,
    'us_cups'               => 0.24,
    'us_ounces'             => 0.0295735,
    'us_tablespoons'        => 0.0147868,
    'us_teaspoons'          => 0.00492892,
    'liters'                => 1,
    'milliliters'           => 0.001,
);

function x_to_liters( $value, $from_unit ) {
    echo '<script>alert("X to liters");</script>';
    if( array_key_exists( $from_unit, VOLUME_TO_LITER ) ) {
        return $value * VOLUME_TO_LITER[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_liters( $value, $to_unit ) {
    echo '<script>alert("X from liters");</script>';
    if( array_key_exists( $to_unit, VOLUME_TO_LITER ) ) {
        return $value / VOLUME_TO_LITER[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_volume( $value, $from_unit, $to_unit ) {
    echo '<script>alert("convert volume");</script>';
    $liter_value = x_to_liters( $value, $from_unit );
    $new_value = x_from_liters( $liter_value, $to_unit );
    return $new_value;
}