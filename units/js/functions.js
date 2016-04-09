/*
 * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
 */
// object literal holding data for option elements
var Conversion_Unit_Lists = {
    
    'from_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
        angles: {
            text: [ 'arc minutes', 'arc seconds', 'degrees', 'radians', 'revolutions', 'turns' ],
        },
        area: {
            text: [ 'acres', 'ares', 'barns', 'cricket pitches', 'dunams', 'football fields', 'football pitches', 'hectares', 'pings', 'Planck areas', 'sections', 'square centimeters', 'square feet', 'square inches', 'square kilometers', 'square meters', 'square millimeters', 'square yards', 'stokes', 'survey townships' ],
        },
        currency: {
            text: [ 'Algerian dinars', 'Argentine pesos', 'Australian cents', 'Australian dollars', 'Bahrain dinars', 'Bolivian bolivianos', 'Botswana pula', 'Brazil reais', 'British pounds', 'Brunei dollars', 'Bulgarian levs', 'Canadian cents', 'Canadian dollars', 'Cayman Islands dollars', 'Chilean pesos', 'Chinese yuan', 'Colombian pesos', 'Costa Rican colones', 'Croatian kuna', 'Czech koruna', 'Danish kroner', 'Dominican pesos', 'Egyptian pounds', 'Estonian kroons', 'Eurocents', 'Euros', 'Fiji dollars', 'Honduran lempiras', 'Hong Kong dollars', 'Hungarian forints', 'Indian rupees', 'Indonesian rupiahs', 'Israeli shekels', 'Jamaican dollars', 'Japanese yen', 'Jordanian dinars', 'Kazakh tenge', 'Kenyan shillings', 'Kuwaiti dinars', 'Latvian lats', 'Lebanese pounds', 'Lithuanian litas', 'Macedonian denari', 'Malaysian ringgits', 'Mauritian rupees', 'Mexican pesos', 'Moldovan leu', 'Moroccan dirhams', 'Namibian dollars', 'Nepalese rupees', 'Netherlands Antilles guilders', 'New Zealand dollars', 'Nicaraguan cordobas', 'Nigerian naira', 'Norwegian kroner', 'Omani rials', 'Pakistan rupees', 'Papua New Guinean kina', 'Paraguayan guaranies', 'Peruvian nuevos soles', 'Philippine pesos', 'Polish zloty', 'Qatar riyals', 'Romanian lei', 'Russian rubles', 'Salvadoran colones', 'Saudi riyals', 'Seychelles rupees', 'Sierra Leonean leones', 'Singapore dollars', 'Slovak koruna', 'South African rands', 'South Korean won', 'Sri Lankan rupees', 'Swedish kronor', 'Swiss francs', 'Taiwan dollars', 'Tanzanian shillings', 'Thai baht', 'Trinidad dollars', 'Tunisian dinar', 'Turkish liras', 'Ugandan shillings', 'Ukrainian grivnas', 'United Arab Emirates dirhams', 'Uruguayan pesos', 'U.S. cents', 'U.S. dollars', 'Uzbekistani sum', 'Venezuelan bolivares fuertes', 'Venezuelan bolivars', 'Vietnamese dong', 'Yemeni rials', 'Zambia kwacha' ],
        },
        data_transfer_rate: {
            text: [ 'bits per second (bps)', 'bytes per second (Bps)' ],
        },
        digital_storage_size: {
            text: [ 'bits', 'nybbles', 'bytes', 'metric kilobytes (kB)', 'metric megabytes (MB)', 'binary kibibytes (KiB)', 'binary mebibytes (MiB)' ],
        },
        electric_capacitance: {
            text: [ 'farads' ],
        },
        electric_charge: {
            text: [ 'ampere hours', 'coulombs', 'Faradays' ],
        },
        electric_conductance: {
            text: [ 'mhos', 'siemens' ],
        },
        electric_current: {
            text: [ 'amperes', 'biots' ],
        },
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'therms', 'tons of TNT', 'watt hours' ],
        },
        flow_rate: {
            text: [ 'cubic feet per minute', 'cubic feet per second', 'liters per minute', 'liters per second' ],
        },
        force: {
            text: [ 'dynes', 'kilograms-force', 'newtons', 'pounds-force' ],
        },
        frequency: {
            text: [ 'gigahertz', 'hertz', 'kilohertz', 'megahertz' ],
        },
        fuel_economy: {
            text: [ 'kilometers per liter', 'liters per 100 kilometers', 'miles per gallon' ],
        },
        inductance: {
            text: [ 'henries' ],
        },
        length_and_distance: {
            text: [ 'angstrom', 'Astronomical Units', 'ATA picas', 'ATA points', 'beard-seconds', 'chains', 'Ciceros', 'cubits', 'Didot points', 'English ells', 'fathoms', 'feet' , 'Flemish ells', 'football fields', 'football pitches', 'French ells', 'furlongs', 'Half Ironman Triathlon bikes', 'Half Ironman Triathlon runs', 'Half Ironman Triathlon swims', 'Half Ironman Triathlons', 'hands', 'Imperial cables', 'IN picas', 'IN Points', 'inches', 'indoor track lengths', 'international cables', 'Ironman Triathlon bikes', 'Ironman Triathlon runs', 'Ironman Triathlon swims', 'Ironman Triathlons', 'itinerary stadions', 'kilometers', 'Kpc', 'length of cricket pitches', 'light-days', 'light-hours', 'light-minutes', 'light-seconds', 'light-years', 'marathons', 'meters', 'metres', 'metres', 'microns', 'miles', 'Mpc', 'nails', 'nautical leagues', 'nautical miles', 'Olympic Pools', 'Olympic stadion', 'Olympic Triathlon bikes', 'Olympic Triathlon runs', 'Olympic Triathlon swims', 'Olympic Triathlons', 'outdoor track lengths', 'Parsecs', 'Planck Lengths', 'PostScript picas', 'PostScript points', 'Rack units', 'rods', 'Scottish ells', 'Short Course Pools', 'smoots', 'spans', 'Sprint Triathlon bikes', 'Sprint Triathlon runs', 'Sprint Triathlon swims', 'Sprint Triathlons', 'TeX picas', 'TeX points', 'thou', 'Truchet picas', 'Truchet points', 'US cables', 'yards' ],
        },
        light_intensity: {
            text: [ 'candelas', 'footcandles', 'lamberts', 'lumens', 'lux' ],
        },
        magnetic_flux: {
            text: [ 'gauss', 'maxwells', 'teslas', 'webers' ],
        },
        mass_and_weight: {
            text: [ 'atomic mass units', 'Blintzes', 'butter firkins', 'carats', 'drams', 'earth masses', 'English stones', 'Farshimmelt Blintzes', 'funt', 'Furshlugginer Blintzes', 'grains', 'grams', 'imperial tons', 'jupiter masses', 'kilograms', 'lunar masses', 'metric tonnes', 'micrograms', 'ounces', 'pennyweights', 'pood', 'pounds', 'short tons', 'slugs', 'soap firkins', 'solar masses', 'stones', 'troy drams', 'troy ounces' ],
        },
        misc: {
            text: [ 'dioptres', 'emus', 'katal', 'moles' ],
        },
        power: {
            text: [ 'British horsepower', 'donkeypower', 'kilowatts', 'metric horsepower', 'watts' ],
        },
        pressure: {
            text: [ 'atmospheres', 'barries', 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'pascals', 'poises', 'pounds per square inch' ],
        },
        radiation_dosage: {
            text: [ 'grays', 'sieverts', 'rads', 'rems' ],
        },
        radioactivity: {
            text: [ 'becquerels', 'curies', 'rutherfords' ],
        },
        speed: {
            text: [ 'feet per second', 'kilometers per hour', 'meters per second', 'miles per hour', 'nautical miles per hour' ],
        },
        temperature: {
            text: [ 'Celsius', 'Fahrenheit', 'Kelvin', 'Rankine' ],
        },
        time: {
            text: [ 'centuries', 'days', 'decades', 'fortnights', 'halakim', 'hours', 'leap years', 'lunar cycles', 'lustrum', 'millennium', 'minutes', 'months', 'seconds', 'sidereal days', 'sidereal years', 'weeks', 'years' ],
        },
        unitless_numeric: {
            text: [ 'baker\'s dozens', 'dozens', 'googols', 'great gross', 'gross', 'percent', 'scores' ],
        },
        voltage: {
            text: [ 'volts' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', 'cups', 'English tierces', 'fluid barrels', 'fluid drams', 'fluid ounces', 'full kegs', 'gallons', 'gills', 'Gross Register Tonnes', 'half barrels', 'hogsheads', 'Imperial beer barrels', 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial fluid ounces', 'Imperial fluid ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'litres', 'minims', 'pecks', 'pints', 'puncheons', 'quarter barrels', 'quarts', 'register tonnes', 'shots', 'sixth barrels', 'sticks of butter', 'tablespoons', 'teaspoons', 'tierces', 'wine firkins', 'wine rundlets' ],
        },
        
    },
    
    'to_unit[]': {   // name of associated select box
        
        // names match option values in controlling select box
        angles: {
            text: [ 'arc minutes', 'arc seconds', 'degrees', 'radians', 'revolutions', 'turns' ],
        },
        area: {
            text: [ 'acres', 'ares', 'barns', 'cricket pitches', 'dunams', 'football fields', 'football pitches', 'hectares', 'pings', 'Planck areas', 'sections', 'square centimeters', 'square feet', 'square inches', 'square kilometers', 'square meters', 'square millimeters', 'square yards', 'stokes', 'survey townships' ],
        },
        currency: {
            text: [ 'Algerian dinars', 'Argentine pesos', 'Australian cents', 'Australian dollars', 'Bahrain dinars', 'Bolivian bolivianos', 'Botswana pula', 'Brazil reais', 'British pounds', 'Brunei dollars', 'Bulgarian levs', 'Canadian cents', 'Canadian dollars', 'Cayman Islands dollars', 'Chilean pesos', 'Chinese yuan', 'Colombian pesos', 'Costa Rican colones', 'Croatian kuna', 'Czech koruna', 'Danish kroner', 'Dominican pesos', 'Egyptian pounds', 'Estonian kroons', 'Eurocents', 'Euros', 'Fiji dollars', 'Honduran lempiras', 'Hong Kong dollars', 'Hungarian forints', 'Indian rupees', 'Indonesian rupiahs', 'Israeli shekels', 'Jamaican dollars', 'Japanese yen', 'Jordanian dinars', 'Kazakh tenge', 'Kenyan shillings', 'Kuwaiti dinars', 'Latvian lats', 'Lebanese pounds', 'Lithuanian litas', 'Macedonian denari', 'Malaysian ringgits', 'Mauritian rupees', 'Mexican pesos', 'Moldovan leu', 'Moroccan dirhams', 'Namibian dollars', 'Nepalese rupees', 'Netherlands Antilles guilders', 'New Zealand dollars', 'Nicaraguan cordobas', 'Nigerian naira', 'Norwegian kroner', 'Omani rials', 'Pakistan rupees', 'Papua New Guinean kina', 'Paraguayan guaranies', 'Peruvian nuevos soles', 'Philippine pesos', 'Polish zloty', 'Qatar riyals', 'Romanian lei', 'Russian rubles', 'Salvadoran colones', 'Saudi riyals', 'Seychelles rupees', 'Sierra Leonean leones', 'Singapore dollars', 'Slovak koruna', 'South African rands', 'South Korean won', 'Sri Lankan rupees', 'Swedish kronor', 'Swiss francs', 'Taiwan dollars', 'Tanzanian shillings', 'Thai baht', 'Trinidad dollars', 'Tunisian dinar', 'Turkish liras', 'Ugandan shillings', 'Ukrainian grivnas', 'United Arab Emirates dirhams', 'Uruguayan pesos', 'U.S. cents', 'U.S. dollars', 'Uzbekistani sum', 'Venezuelan bolivares fuertes', 'Venezuelan bolivars', 'Vietnamese dong', 'Yemeni rials', 'Zambia kwacha' ],
        },
        data_transfer_rate: {
            text: [ 'bits per second (bps)', 'bytes per second (Bps)' ],
        },
        digital_storage_size: {
            text: [ 'bits', 'nybbles', 'bytes', 'metric kilobytes (kB)', 'metric megabytes (MB)', 'binary kibibytes (KiB)', 'binary mebibytes (MiB)' ],
        },
        electric_capacitance: {
            text: [ 'farads' ],
        },
        electric_charge: {
            text: [ 'ampere hours', 'coulombs', 'Faradays' ],
        },
        electric_conductance: {
            text: [ 'mhos', 'siemens' ],
        },
        electric_current: {
            text: [ 'amperes', 'biots' ],
        },
        energy: {
            text: [ 'barrels of oil equivalent', 'British thermal units', 'calories', 'electron volts', 'ergs', 'foot-pounds', 'grams of TNT', 'joules', 'kilocalories', 'kilograms of TNT', 'megatons of TNT', 'megawatt hours', 'therms', 'tons of TNT', 'watt hours' ],
        },
        flow_rate: {
            text: [ 'cubic feet per minute', 'cubic feet per second', 'liters per minute', 'liters per second' ],
        },
        force: {
            text: [ 'dynes', 'kilograms-force', 'newtons', 'pounds-force' ],
        },
        frequency: {
            text: [ 'gigahertz', 'hertz', 'kilohertz', 'megahertz' ],
        },
        fuel_economy: {
            text: [ 'kilometers per liter', 'liters per 100 kilometers', 'miles per gallon' ],
        },
        inductance: {
            text: [ 'henries' ],
        },
        length_and_distance: {
            text: [ 'angstrom', 'Astronomical Units', 'ATA picas', 'ATA points', 'beard-seconds', 'chains', 'Ciceros', 'cubits', 'Didot points', 'English ells', 'fathoms', 'feet' , 'Flemish ells', 'football fields', 'football pitches', 'French ells', 'furlongs', 'Half Ironman Triathlon bikes', 'Half Ironman Triathlon runs', 'Half Ironman Triathlon swims', 'Half Ironman Triathlons', 'hands', 'Imperial cables', 'IN picas', 'IN Points', 'inches', 'indoor track lengths', 'international cables', 'Ironman Triathlon bikes', 'Ironman Triathlon runs', 'Ironman Triathlon swims', 'Ironman Triathlons', 'itinerary stadions', 'kilometers', 'Kpc', 'length of cricket pitches', 'light-days', 'light-hours', 'light-minutes', 'light-seconds', 'light-years', 'marathons', 'meters', 'metres', 'metres', 'microns', 'miles', 'Mpc', 'nails', 'nautical leagues', 'nautical miles', 'Olympic Pools', 'Olympic stadion', 'Olympic Triathlon bikes', 'Olympic Triathlon runs', 'Olympic Triathlon swims', 'Olympic Triathlons', 'outdoor track lengths', 'Parsecs', 'Planck Lengths', 'PostScript picas', 'PostScript points', 'Rack units', 'rods', 'Scottish ells', 'Short Course Pools', 'smoots', 'spans', 'Sprint Triathlon bikes', 'Sprint Triathlon runs', 'Sprint Triathlon swims', 'Sprint Triathlons', 'TeX picas', 'TeX points', 'thou', 'Truchet picas', 'Truchet points', 'US cables', 'yards' ],
        },
        light_intensity: {
            text: [ 'candelas', 'footcandles', 'lamberts', 'lumens', 'lux' ],
        },
        magnetic_flux: {
            text: [ 'gauss', 'maxwells', 'teslas', 'webers' ],
        },
        mass_and_weight: {
            text: [ 'atomic mass units', 'Blintzes', 'butter firkins', 'carats', 'drams', 'earth masses', 'English stones', 'Farshimmelt Blintzes', 'funt', 'Furshlugginer Blintzes', 'grains', 'grams', 'imperial tons', 'jupiter masses', 'kilograms', 'lunar masses', 'metric tonnes', 'micrograms', 'ounces', 'pennyweights', 'pood', 'pounds', 'short tons', 'slugs', 'soap firkins', 'solar masses', 'stones', 'troy drams', 'troy ounces' ],
        },
        misc: {
            text: [ 'dioptres', 'emus', 'katal', 'moles' ],
        },
        power: {
            text: [ 'British horsepower', 'donkeypower', 'kilowatts', 'metric horsepower', 'watts' ],
        },
        pressure: {
            text: [ 'atmospheres', 'barries', 'bars', 'inches of mercury', 'inches of water', 'millibars', 'millimeters of mercury', 'pascals', 'poises', 'pounds per square inch' ],
        },
        radiation_dosage: {
            text: [ 'grays', 'sieverts', 'rads', 'rems' ],
        },
        radioactivity: {
            text: [ 'becquerels', 'curies', 'rutherfords' ],
        },
        speed: {
            text: [ 'feet per second', 'kilometers per hour', 'meters per second', 'miles per hour', 'nautical miles per hour' ],
        },
        temperature: {
            text: [ 'Celsius', 'Fahrenheit', 'Kelvin', 'Rankine' ],
        },
        time: {
            text: [ 'centuries', 'days', 'decades', 'fortnights', 'halakim', 'hours', 'leap years', 'lunar cycles', 'lustrum', 'millennium', 'minutes', 'months', 'seconds', 'sidereal days', 'sidereal years', 'weeks', 'years' ],
        },
        unitless_numeric: {
            text: [ 'baker\'s dozens', 'dozens', 'googols', 'great gross', 'gross', 'percent', 'scores' ],
        },
        voltage: {
            text: [ 'volts' ],
        },
        volume: {
            text: [ 'acre-feet', 'barrels of oil', 'beer barrels', 'beer firkins', 'beer hogsheads', 'beer kilderkins', 'board feet', 'bushels', 'cords', 'cubic centimeters', 'cubic feet', 'cubic inches', 'cubic kilometers', 'cubic meters', 'cubic millimeters', 'cups', 'English tierces', 'fluid barrels', 'fluid drams', 'fluid ounces', 'full kegs', 'gallons', 'gills', 'Gross Register Tonnes', 'half barrels', 'hogsheads', 'Imperial beer barrels', 'Imperial bushels', 'Imperial dessertspoons', 'Imperial fluid drams', 'Imperial fluid ounces', 'Imperial fluid ounces', 'Imperial gallons', 'Imperial gills', 'Imperial minims', 'Imperial pecks', 'Imperial pints', 'Imperial quarts', 'Imperial tablespoons', 'Imperial teaspoons', 'liters', 'litres', 'minims', 'pecks', 'pints', 'puncheons', 'quarter barrels', 'quarts', 'register tonnes', 'shots', 'sixth barrels', 'sticks of butter', 'tablespoons', 'teaspoons', 'tierces', 'wine firkins', 'wine rundlets' ],
        },
        
    }
    
}

// removes all option elements in select box
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions( sel, removeGrp ) {
    var len, groups, par;
//    if( removeGrp ) {
//        groups = sel.getElementsByTagName( 'optgroup' );
//        len = groups.length;
//        for( var i=len; i; i-- ) {
//            sel.removeChild( groups[ i-1 ] );
//        }
//    }
    len = sel.options.length;
    for( var i=len; i; i-- ) {
        par = sel.options[ i-1 ].parentNode;
        par.removeChild( sel.options[ i-1 ] );
    }
}

function appendDataToSelect( sel, obj ) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions( obj ) {
        var f = document.createDocumentFragment();
        var o;
        
        for( var i=0, len=obj.text.length; i<len; i++ ) {
            o = document.createElement( 'option' );
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if( obj.value ) {
                o.value = obj.value[ i ];
            }
            
            f.appendChild( o );
        }
        return f;
    }
    
    if( obj.text ) {
        opts = addOptions( obj );
        f.appendChild( opts );
    } else {
        for( var prop in obj ) {
            if( obj.hasOwnProperty( prop ) ) {
                labels.push( prop );
            }
        }
        for( var i=0, len=labels.length; i<len; i++ ) {
            group = document.createElement( 'optgroup' );
            group.label = labels[ i ];
            f.appendChild( group );
            opts = addOptions( obj[ labels[ i ] ] );
            group.appendChild( opts );
        }
    }
    sel.appendChild( f );
}

// anonymous function assigned to onchange event of controlling select box
document.forms[ 'conversion-form' ].elements[ 'conversion_type' ].onchange = function( e ) {
    // name of associated select box
    var fromName = 'from_unit[]';
    var toName = 'to_unit[]';
    
    // reference to associated select box
    var fromList = this.form.elements[ fromName ];
    var toList = this.form.elements[ toName ];
    
    // remove current option elements
    removeAllOptions( fromList, true );
    removeAllOptions( toList, true );
    
    // call function to add optgroup/option elements
    // pass reference to assc select box and data for new options
    
    appendDataToSelect( fromList, Conversion_Unit_Lists[ fromName ][ this.value ] );
    appendDataToSelect( toList, Conversion_Unit_Lists[ toName ][ this.value ] );
};

// populate associated select box as page loads
window.onload = function() { // immediate function to avoid globals
    
    var form = document.forms[ 'conversion-form' ];
    
    // reference to controlling select box
    var sel = form.elements[ 'conversion_type' ];
    sel.selectedIndex = 0;
    
    // name of assc select box
    var fromName = 'from_unit[]';
    var toName = 'to_unit[]';
    // reference to assc select box
    var from = form.elements[ fromName ];
    var to = form.elements[ toName ];
    
    // get data for assc select box passing its name
    // and value of selected in controlling select box
    var fromData = Conversion_Unit_Lists[ fromName ][ sel.value ];
    var toData = Conversion_Unit_Lists[ toName ][ sel.value ];
    
    // add options to associated select box
    appendDataToSelect( from, fromData );
    appendDataToSelect( to, toData );
};