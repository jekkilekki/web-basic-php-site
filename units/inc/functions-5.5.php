<?php 
/*
 * Functions file - handles ALL conversion functions
 * 
 * In alphabetical order, the functions found in this file are:
 *  1. acceleration         convert_acceleration()      * non
 *  2. angles               convert_angles()            DEFAULT
 *  3. area                 convert_area()              DEFAULT
 *  4. currency             convert_currency()          * 
 *  5. data transfer rate   convert_data_transfer()     DEFAULT
 *  6. density              convert_density()           * non
 *  7. digital storage size convert_digital_storage()   DEFAULT
 *  8. electric capacitance convert_electric_cap()      *
 *  9. electric charge      convert_electric_charge()   *
 * 10. electric conductance convert_electric_cond()     *
 * 11. electric current     convert_electric_curr()     *
 * 12. energy               convert_energy()            DEFAULT
 * 13. flow rate            convert_flow()              *
 * 14. force                convert_force()             *
 * 15. frequency            convert_frequency()         DEFAULT
 * 16. fuel economy         convert_fuel()              DEFAULT
 * 17. inductance           convert_inductance()        *
 * 18. length and distance  convert_length()            DEFAULT
 * 19. light intensity      convert_light()             *
 * 20. magnetic flux        convert_magnetic()          *
 * 21. mass and weight      convert_mass()              DEFAULT
 * 22. misc                 convert_misc()              *
 * 23. power                convert_power()             *
 * 24. pressure             convert_pressure()          DEFAULT
 * 25. radiation dosage     convert_radiation()         *
 * 26. radioactivity        convert_radioactivity()     *
 * 27. speed                convert_speed()             DEFAULT
 * 28. temperature          convert_temperature()       DEFAULT
 * 29. time                 convert_time()              DEFAULT
 * 30. torque               convert_torque()            * non
 * 31. unitless numeric     convert_unitless()          *
 * 32. voltage              convert_voltage()           *
 * 33. volume               convert_volume()            DEFAULT
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
 * Formatting scientific notation
 * number_format( $float, $precision, $point, $sep );
 * sprintf( '%F', 1/1000000 ); => sprintf( '%.6F', 1/1000000 );
 * 
 * Formats a float into a string, avoids default scientific notation, rounds to $precision and trims trailing zeroes.
 */
function float_to_string( $float, $precision=10 ) {
    // Typecast to insure value is a float
    $float = (float) $float;
    $string = number_format( $float, $precision, '.', '' );
    $string = rtrim( $string, '0' );
    $string = rtrim( $string, '.' );
    return $string;
}

/*
 * =================================================================================
 *
 * #1 : LENGTH conversions
 * Use METERS as common unit - convert ALL to meters, then convert to specified unit
 *
 * =================================================================================
 */
$length_to_meter = array(
    'inches'                => 0.0254,
    'feet'                  => 0.3048,
    'yards'                 => 0.9144,
    'miles'                 => 1609.344,
    'nanometers'            => 0.000000001,
    'micrometers'           => 0.000001,
    'millimeters'           => 0.001,
    'centimeters'           => 0.01,
    'meters'                => 1,
    'kilometers'            => 1000,
    'astronomical_units'    => 149600000000,
    'light-years'           => 9461000000000000,
    'light-days'            => 25900000000000,
    'light-hours'           => 1079000000000,
    'light-minutes'         => 17990000000,
    'light-seconds'         => 299800000,
    'parsecs'               => 30860000000000000,
    'fathoms'               => 1.8288,
    'international_cables'  => 185.2,
    'imperial_cables'       => 185.318,
    'us_cables'             => 219.456,
    'nautical_miles'        => 1852,
    'leagues'               => 5556,
    'links'                 => 0.201168,
    'rods'                  => 5.0292,
    'chains'                => 20.1168,
    'furlongs'              => 201.168,
    
    // Area - take the sqrt as it will be squared in the function
    'acres'                 => 63.6149072341,   // sqrt(4046.8564224) 
    //'ares'                  => , // sqrt()
    //'barns'                 => , // sqrt()
    //'cricket_pitches'       => , // sqrt()
    //'dunams'                => , // sqrt()
    //'football_fields'       => , // sqrt()
    //'football_pitches'      => , // sqrt()
    'hectares'              => 100,             // sqrt(10000)
    //'pings'                 => , // sqrt()
    //'Planck areas'          => , // sqrt()
    'pyoung-ko'             => 1.81818590909,   // sqrt(3.3058)
    //'sections'              => , // sqrt()
    //'stokes'                => , // sqrt()
    //'survey_townships'      => , // sqrt()
    
    // Unusual Units
    // http://io9.gizmodo.com/5827925/ten-unbelievably-strange-units-of-measurement
    // https://en.wikipedia.org/wiki/List_of_humorous_units_of_measurement#Length
    // http://www.kylesconverter.com/length/
    'angstroms'             => 0.0000000001,
    'ata_picas'             => 0.004217,
    //'ATA_points'            => ,
    'attoparsec'            => 0.03086,
    'beard-seconds'         => 0.000000005, 
    'ciceros'               => 0.00451167,
    'cubits'                => 0.4572,
    //'Didot_points'          => ,
    'english_ells'          => 1.143,
    'flemish_ells'          => 0.686,
    'french_ells'           => 1.372,
    'polish_ells'           => 0.787, // new
    'danish_ells'           => 0.635, // new
    'swedish_alns'          => 0.59,  // new
    'german_ells'           => 0.579, // new
    'scottish_ells'         => 0.94,
    //'Half_Ironman_Triathlon_bikes'  => ,
    //'Half_Ironman_Triathlon_runs'   => ,
    //'Half_Ironman_Triathlon_swims'  => ,
    //'Half_Ironman_Triathlons'       => ,
    'hands'                 => 0.1016,
    //'IN_picas'              => ,
    //'IN_points'             => ,
    //'indoor_track_lengths'  => , 
    //'Ironman_Triathlon_bikes'       => ,
    //'Ironman_Triathlon_runs'        => ,
    //'Ironman_Triathlon_swims'       => ,
    //'Ironman_Triathlons'            => ,
    'itinerary_stadions'    => 157,
    'ptolemaic_stadions'    => 185,
    'attic_stadions'        => 185,
    'babylonian_stadions'   => 196,
    'persian_stadions'      => 196,
    'phoenician_stadions'   => 209,
    'egyptian_stadions'     => 209,
    'marathons'             => 42195,
    'microns'               => 0.000001, 
    //'nails'                 => , 
    //'Olympic_pools'         => ,
    'olympic_stadions'      => 176,
    //'Olympic_Triathlon_bikes'       => ,
    //'Olympic_Triathlon_runs'        => ,
    //'Olympic_Triathlon_swims'       => ,
    //'Olympic_Triathlons'            => ,
    //'outdoor_track_lengths' => ,
    //'PostScript_picas'      => ,
    //'PostScript_points'     => ,
    //'Rack_units'            => ,
    //'Short_Course_pools'    => ,
    'smoots'                => 1.7018,
    'spans'                 => 0.2286,
    //'Sprint_Triathlon_bikes'        => ,
    //'Sprint_Triathlon_runs'         => ,
    //'Sprint_Triathlon_swims'        => ,
    //'Sprint_Triathlons'             => ,
    //'TeX_picas'             => ,
    //'TeX_points'            => ,
    'thou'                 => 0.0000254,
    //'Truchet_picas'         => ,
    //'Truchet_points'        => ,
    'mickeys'               => 0.000127,
    'altuves'               => 1.65,
    'sheppies'              => 1400,
    'wiffles'               => 0.089,
    
);

function x_to_meters( $value, $from_unit ) {
    global $length_to_meter;
    if( array_key_exists( $from_unit, $length_to_meter ) ) {
        return $value * $length_to_meter[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_meters( $value, $to_unit ) {
    global $length_to_meter;
    if( array_key_exists( $to_unit, $length_to_meter ) ) {
        return $value / $length_to_meter[ $to_unit ];
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
    global $length_to_meter;
    $from_unit = str_replace( 'square ', '', $from_unit );
    if( array_key_exists( $from_unit, $length_to_meter ) ) {
        return $value * pow( $length_to_meter[ $from_unit ], 2 );
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_sq_meters( $value, $to_unit ) {
    global $length_to_meter;
    $to_unit = str_replace( 'square ', '', $to_unit );
    if( array_key_exists( $to_unit, $length_to_meter ) ) {
        return $value / pow( $length_to_meter[ $to_unit ], 2 );
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
$volume_to_liter = array(
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
    global $volume_to_liter;
    if( array_key_exists( $from_unit, $volume_to_liter ) ) {
        return $value * $volume_to_liter[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_liters( $value, $to_unit ) {
    global $volume_to_liter;
    if( array_key_exists( $to_unit, $volume_to_liter ) ) {
        return $value / $volume_to_liter[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_volume( $value, $from_unit, $to_unit ) {
    $liter_value = x_to_liters( $value, $from_unit );
    $new_value = x_from_liters( $liter_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * MASS conversions
 * Use KILOGRAMS as common unit - convert ALL to kilograms, then convert to specified unit
 *
 * =================================================================================
 */
$mass_to_kilogram = array(
    'ounces'        => 0.0283495,
    'pounds'        => 0.453592,
    'stones'        => 6.35029,
    'long_tons'     => 1016.05,
    'short_tons'    => 907.185,
    'milligrams'    => 0.000001,
    'grams'         => 0.001,
    'kilograms'     => 1,
    'metric_tonnes' => 1000,
    'carats'        => 0.0002,
);

function x_to_kilograms( $value, $from_unit ) {
    global $mass_to_kilogram;
    if( array_key_exists( $from_unit, $mass_to_kilogram ) ) {
        return $value * $mass_to_kilogram[ $from_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function x_from_kilograms( $value, $to_unit ) {
    global $mass_to_kilogram;
    if( array_key_exists( $to_unit, $mass_to_kilogram ) ) {
        return $value / $mass_to_kilogram[ $to_unit ];
    } else {
        return 'Unsupported unit.';
    }
}

function convert_mass( $value, $from_unit, $to_unit ) {
    $kg_value = x_to_kilograms( $value, $from_unit );
    $new_value = x_from_kilograms( $kg_value, $to_unit );
    return $new_value;
}

/*
 * =================================================================================
 *
 * SPEED conversions
 * Use METERS PER SECOND as common unit - convert ALL to m/s, then convert to specified unit
 *
 * =================================================================================
 *
 * Requires 2 steps:
 *  1. convert times (if necessary), first and last
 *  2. convert distances (using convert_length())
 */

function convert_speed( $value, $from_unit, $to_unit ) {
    if( $from_unit == 'knots' ) { $from_unit = 'nautical_miles_per_hour'; }
    if( $to_unit == 'knots' ) { $to_unit = 'nautical_miles_per_hour'; } 
    
    list( $from_dist, $from_time ) = explode( '_per_', $from_unit );
    list( $to_dist, $to_time ) = explode( '_per_', $to_unit );
    
    if( $from_time == 'hour' ) { $value /= 3600; }
    $new_value = convert_length( $value, $from_dist, $to_dist );
    if( $to_time == 'hour' ) { $value *= 3600; }
    
    return $new_value;
}

/*
 * =================================================================================
 *
 * TEMPERATURE conversions
 * Use CELSIUS as common unit - convert ALL to Celsius, then convert to specified unit
 *
 * =================================================================================
 */
function x_to_celsius( $value, $from_unit ) {
    switch( $from_unit ) {
        case 'celsius': return $value; break;
        case 'fahrenheit': return ( $value - 32 ) / 1.8; break;
        case 'kelvin': return $value - 273.15;
        default: return 'Unsupported unit.';          
    }
}

function x_from_celsius( $value, $to_unit ) {
    switch( $to_unit ) {
        case 'celsius': return $value; break;
        case 'fahrenheit': return ( $value * 1.8 ) + 32; break;
        case 'kelvin': return $value + 273.15;
        default: return 'Unsupported unit.';          
    }
}

function convert_temperature( $value, $from_unit, $to_unit ) {
    $temp_value = x_to_celsius( $value, $from_unit );
    $new_value = x_from_celsius( $temp_value, $to_unit );
    return $new_value;
}