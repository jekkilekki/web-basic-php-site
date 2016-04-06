<?php 
/*
 * Functions file - handles ALL conversion functions
 *
 * Use meters as common unit - convert ALL to meters, then convert to specified unit
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
 * LENGTH conversions
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
    'pyoung'        => 1.81818590909, // sqrt(3.3058)
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
 *
 * =================================================================================
 */
function x_to_sq_meters( $value, $from_unit ) {
    $from_unit = str_replace( 'sq_', '', $from_unit );
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