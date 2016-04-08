/*
 * @link: http://www.dyn-web.com/tutorials/forms/select/paired.php
 */
// object literal holding data for option elements
var Conversion_Unit_Lists = {
    
    'unit': {   // name of associated select box
        
        // names match option values in controlling select box
        angles: {
            text: [ 'arc minutes', 'arc seconds', 'degrees', 'radians', 'revolutions', 'turns' ],
        },
        area: {
            text: [ 'acres', 'ares', 'barns', 'cricket pitches', 'dunams', 'football fields', 'football pitches', 'hectares', 'pings', 'Planck areas', 'sections', 'square centimeters', 'square feet', 'square inches', 'square kilometers', 'square meters', 'square millimeters', 'square yards', 'stokes', 'survey townships' ],
        },
        currency: {
            text: [ 'Algerian dinars', 'Argentine pesos', 'Australian cents', 'Australian dollars', 'Bahrain dinars', 'Bolivian bolivianos', 'Botswana pula', 'Brazil reais', 'British pounds', 'Brunei dollars', 'Bulgarian levs', 'Canadian cents', 'Canadian dollars', 'Cayman Islands dollars', 'Chilean pesos', 'Chinese yuan', 'Colombian pesos', 'Costa Rican colones', 'Croatian kuna', 'Czech koruna', 'Danish kroner', 'Dominican pesos', 'Egyptian pounds', 'Estonian kroons', 'Eurocents', 'Euros', 'Fiji dollars', 'Honduran lempiras', 'Hong Kong dollars', 'Hungarian forints', 'Indian rupees', 'Indonesian rupiahs', 'Israeli shekels', 'Jamaican dollars', 'Japanese yen', 'Jordanian dinars', 'Kazakh tenge', 'Kenyan shillings', 'Kuwaiti dinars', 'Latvian lats', 'Lebanese pounds', 'Lithuanian litas', 'Macedonian denari', 'Malaysian ringgits', 'Mauritian rupees', 'Mexican pesos', 'Moldovan leu', 'Moroccan dirhams', 'Namibian dollars', 'Nepalese rupees', 'Netherlands Antilles guilders', 'New Zealand dollars', 'Nicaraguan cordobas', 'Nigerian naira', 'Norwegian kroner', 'Omani rials', 'Pakistan rupees', 'Papua New Guinean kina', 'Paraguayan guaranies', 'Peruvian nuevos soles', 'Philippine pesos', 'Polish zloty', 'Qatar riyals', 'Romanian lei', 'Russian rubles', 'Salvadoran colones', 'Saudi riyals', 'Seychelles rupee's, 'Sierra Leonean leones', 'Singapore dollars', 'Slovak koruna', 'South African rands', 'South Korean won', 'Sri Lankan rupees', 'Swedish kronor', 'Swiss francs', 'Taiwan dollars', 'Tanzanian shillings', 'Thai baht', 'Trinidad dollars', 'Tunisian dinar', 'Turkish liras', 'Ugandan shillings', 'Ukrainian grivnas', 'United Arab Emirates dirhams', 'Uruguayan pesos', 'U.S. cents', 'U.S. dollars', 'Uzbekistani sum', 'Venezuelan bolivares fuertes', 'Venezuelan bolivars', 'Vietnamese dong', 'Yemeni rials', 'Zambia kwacha' ],
        },
        data_transfer_rate: {
            text: [ 'bits per second (bps)', 'bytes per second (Bps)' ],
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
        fuel_consumption: {
            text: [ 'kilometers per liter', 'liters per 100 kilometers', 'miles per gallon' ],
        },
        inductance: {
            text: [ 'henries' ],
        },
        information_size: {
            text: [ 'bits', 'nybbles', 'bytes', 'metric kilobytes (kB)', 'metric megabytes (MB)', 'binary kibibytes (KiB)', 'binary mebibytes (MiB)' ],
        },
        length: {
            text: [ 'angstrom', 'Astronomical Units', 'ATA picas', 'ATA points', 'beard-seconds', 'chains', 'Ciceros', 'cubits', 'Didot points', 'English ells', 'fathoms', 'feet' , 'Flemish ells', 'football fields', 'football pitches', 'French ells', 'furlongs', 'Half Ironman Triathlon bikes', 'Half Ironman Triathlon runs', 'Half Ironman Triathlon swims', 'Half Ironman Triathlons', 'hands', 'Imperial cables', 'IN picas', 'IN Points', 'inches', 'indoor track lengths', 'international cables', 'Ironman Triathlon bikes', 'Ironman Triathlon runs', 'Ironman Triathlon swims', 'Ironman Triathlons', 'itinerary stadions', 'kilometers', 'Kpc', 'length of cricket pitches', 'light-days', 'light-hours', 'light-minutes', 'light-seconds', 'light-years', 'marathons', 'meters', 'metres', 'metres', 'microns', 'miles', 'Mpc', 'nails', 'nautical leagues', 'nautical miles', 'Olympic Pools', 'Olympic stadion', 'Olympic Triathlon bikes', 'Olympic Triathlon runs', 'Olympic Triathlon swims', 'Olympic Triathlons', 'outdoor track lengths', 'Parsecs', 'Planck Lengths', 'PostScript picas', 'PostScript points', 'Rack units', 'rods', 'Scottish ells', 'Short Course Pools', 'smoots', 'spans', 'Sprint Triathlon bikes', 'Sprint Triathlon runs', 'Sprint Triathlon swims', 'Sprint Triathlons', 'TeX picas', 'TeX points', 'thou', 'Truchet picas', 'Truchet points', 'US cables', 'yards' ],
        },
        light_intensity: {
            text: [ 'candelas', 'footcandles', 'lamberts', 'lumens', 'lux' ],
        },
        magnetic_flux: {
            text: [ 'gauss', 'maxwells', 'teslas', 'webers' ],
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
        weight: {
            text: [ 'atomic mass units', 'Blintzes', 'butter firkins', 'carats', 'drams', 'earth masses', 'English stones', 'Farshimmelt Blintzes', 'funt', 'Furshlugginer Blintzes', 'grains', 'grams', 'imperial tons', 'jupiter masses', 'kilograms', 'lunar masses', 'metric tonnes', 'micrograms', 'ounces', 'pennyweights', 'pood', 'pounds', 'short tons', 'slugs', 'soap firkins', 'solar masses', 'stones', 'troy drams', 'troy ounces' ],
        }
        
    }
    
}