<?php
/*
 * Randomizing Data
 * http://sometimesredsometimesblue.com
 * http://justflipacoin.com
 * rand($low, $high);
 */

/*
 * Other things to randomize
 * Text output
 * Adjective within the text
 * Redirect (or add link) to a URL randomly chosen from a list of URLs
 * Random quotes/movie quotes/inspirational quotes
 * Random image/set of images
 * Randomly order images in a slideshow
 * Generate random phrases (Mad Libs)
 * array_rand( $array ); // returns a random key from an array
 * -> same as rand( 0, count( $array )-1 );
 */

// Array Delete function ONE (unset) 
function array_delete_unset( $value, $array ) {
    $key = array_search( $value, $array );
    if( $key !== false ) {
        unset( $array[ $key ] );
    }
    // unset leaves the index in place
    // array_values is like "reindexing"
    return array_values( $array );
}

// Array Delete function TWO (array_splice)
function array_delete_splice( $value, $array ) {
    $key = array_search( $value, $array );
    // returns the value that was removed (so don't return this)
    array_splice( $array, $key, 1 );  
    return $array;
}

// Array Delete function THREE (array_diff)
function array_delete_diff( $value, $array ) {
    // make sure 2nd argument is an array
    return array_diff( $array, array( $value ) );
}

/**
 * Color palettes from Canva
 *
 * @link    https://designschool.canva.com/blog/brand-color-palette/
 */
$canva_palettes = array(
    array( '#c5d2db', '#2096ba', '#e7b183', '#c5919d', '#df6e21' ),
    array( '#f7dfd4', '#eabcac', '#e2b091', '#874e4c', '#32485c' ),
    array( '#edfafd', '#aed9da', '#3ddad7', '#2a93d5', '#135589' ),
    array( '#f5ab99', '#feb47b', '#ff7e5f', '#765285', '#351c4d' ),
    array( '#f4eac1', '#a0c1b8', '#709fb0', '#726a95', '#351f39' ),
    array( '#e9dccd', '#e3bab3', '#613a43', '#849974', '#36384c' ),
    array( '#f2ad9f', '#f26968', '#dfe2d2', '#6cbf84', '#323339' ),
    array( '#e7baa0', '#e5dace', '#b2b2a2', '#6d7973', '#3f3931' ),
    array( '#f8f3e6', '#e7cc8f', '#efaa52', '#ab3e16', '#48120e' ),
    array( '#dde2e3', '#9aacb8', '#b37c57', '#3c455c', '#60412b' ),
    array( '#f4e7d7', '#a1bbd0', '#d1a827', '#687672', '#3f4234' ),
    array( '#4bbcf4', '#61c0bf', '#bbded6', '#ffb6b9', '#fae3d9' ),
    array( '#7bd4cc', '#bea42e', '#7b895b', '#037367', '#00281f' ),
    array( '#fad5a6', '#fbb79e', '#866768', '#e25f70', '#4c384a' ),
    array( '#c4d4e0', '#9aabb9', '#e2b49a', '#e9c77b', '#193446' ),
    array( '#d1d3cf', '#757081', '#6b82a8', '#6c4f70', '#39324b' ),
    array( '#d0d3c5', '#56b1bf', '#08708a', '#d73a31', '#032b2f' ),
    array( '#cbc5c1', '#a2aab0', '#ebeced', '#4d586f', '#3e3e3b' ),
    array( '#dae9e4', '#8bcbc8', '#ecc7c0', '#fdae84', '#3c2e3d' ),
    array( '#91b3bc', '#5b7d87', '#45415e', '#2b4251', '#2e323c' ),
);
$america_palettes = array(
    array( '<a href="http://jeremiahgardner.com/blog/red-white-and-blue-the-american-color-palette/">Official</a>', 
            '#ffffff', '#000000', '#e0162b', '#0052a5', '#888888' ),
    array( '<a href="http://www.colourlovers.com/palette/622649/American_Solute">American Solute</a>',
            '#a80019', '#ffffff', '#a4b0bd', '#001830', '#103559' ),
    array( '<a href="http://www.colourlovers.com/palette/83708/Beautiful_American">Beautiful American</a>',
            '#ac0000', '#ffffff', '#c8d3d6', '#657fad', '#002566' ),
    array( '<a href="http://www.colourlovers.com/palette/1642150/Vintage_American_II">Vintage American II</a>',
            '#72250f', '#b32e2b', '#ebe0cd', '#476388', '#191c2f' ),
    array( '<a href="http://www.colourlovers.com/palette/53835/OBAMA_in_2008!">Obama in 2008</a>',
            '#941324', '#dc2039', '#f5f6fa', '#2a53c1', '#202a5d' ),
    array( '<a href="http://www.colourlovers.com/palette/378298/Captain_America">Captain America</a>',
            '#cbe9fc', '#ffffff', '#6e96bb', '#cc1414', '#256697' ),
    array( '<a href="http://www.colourlovers.com/palette/2865443/Funny_scarf2">Funny Scarf 2</a>',
            '#fcfbe3', '#d3817d', '#ba1717', '#306097', '#6c8fb6' ),
    array( '<a href="http://www.colourlovers.com/palette/2000268/Nights_in_America">Nights in America</a>',
            '#aa2b3a', '#364c5e', '#5a7d88', '#feffe2', '#10100f' ),
    array( '<a href="http://www.colourlovers.com/palette/3407145/Old_American">Old American</a>',
            '#e4dac6', '#333e51', '#3b586c', '#991325', '#db203e' ),
    array( '<a href="http://snapyourcolors.com/chip/qWPq9a?ow=1">Vintage Captain</a>',
            '#2B4656', '#A53830', '#548685', '#E4DDD4', '#CBAF89' ),
    array( '<a href="https://kr.pinterest.com/pin/213076626090232721/">Retro America</a>',
            '#6599A6', '#2F3448', '#F9F4EE', '#8C3307', '#403836' ),
    array( '<a href="http://www.colorcombos.com/color-schemes/7626/ColorCombo7626.html">Pastel America</a>',
            '#525564', '#74828f', '#96c0ce', '#c25b56', '#fef6eb' ),
    array( '<a href="https://kr.pinterest.com/pin/152700243585754680/">The Capn\'s Shield</a>',
            '#50add4', '#002d5c', '#870000', '#a8a8a8', '#ffffff' ),
    array( '<a href="http://www.color-hex.com/color-palette/4954">America</a>',
            '#0660a9', '#0d76bd', '#ffffff', '#ed1c23', '#888888' ),
    array( '<a href="http://www.color-hex.com/color-palette/6829">US Flag</a>', 
            '#d42729', '#0157ae', '#ffffff', '#ff0000', '#000654' ),
    array( '<a href="http://www.color-hex.com/color-palette/15734">All American</a>', 
            '#b20000', '#12127d', '#fffdfd', '#f2ecec', '#dbd7d7' ),
    array( '<a href="http://www.color-hex.com/color-palette/14151">Americana</a>', 
            '#006eb6', '#e2001a', '#1a171b', '#ffffff', '#28b9da' ),
    array( '<a href="http://www.color-hex.com/color-palette/13674">American Idiot</a>', 
            '#f60e04', '#b4140e', '#ffffff', '#303030', '#000000' ),
);
// $colors = array( 'steelblue', 'red', 'green', 'black', 'white', 'lightsteelblue' );
$colors = $america_palettes[ rand( 0, count( $america_palettes )-1 ) ];
$palette = $colors[ 0 ];
$colors = array_delete_unset( $palette, $colors );
$color_count = count( $colors ); 
$bg_color = $colors[ rand( 0, $color_count-1 ) ];

$bubble_color_array = array_delete_unset( $bg_color, $colors );
$bubble_color = $bubble_color_array[ rand( 0, count( $bubble_color_array )-1 ) ];

//while ( $bg_color == $bubble_color ) {
//    $bubble_color = $colors[ rand( 0, $color_count-1 ) ];
//}

$text_color_array = array_delete_splice( $bubble_color, $bubble_color_array );
$text_color = $text_color_array[ rand( 0, count( $text_color_array )-1 ) ];

//while ( $text_color == $bg_color || $text_color == $bubble_color ) {
//    $text_color = $colors[ rand( 0, $color_count-1 ) ];
//}

$border_color_array = array_delete_diff( $text_color, $text_color_array );
$border_color = $border_color_array[ rand( 0, count( $border_color_array )-1 ) ];

$font_size = rand( 25, 250 );
$styles = array( 'bold', 'italic', 'underline', 'uppercase' );
$style = $styles[ rand( 0, 3 ) ];
$fonts = array( 
    'Playfair+Display',
    'Work+Sans',
    'Alegrya',
    'Montserrat',
    'Volkhov',
    'Source+Sans+Pro',
    'Archivo+Narrow',
    'Chivo',
    'Old+Standard+TT',
    'Fira+Sans',
    'PT+Serif'
);
$font_count = count( $fonts ); 
$font_family = $fonts[ rand( 0, $font_count-1 ) ];

// Random sentence
$fragments = array(
    'ate your sandwich',
    'wrote you a love/hate song',
    'called your mom\'s cellphone',
    'borrowed your comb'
);
$index = array_rand( $fragments );
$sentence = 'Donald Trump ' . $fragments[ $index ] . '.';

// More complex sentence
function pick_random( $array ) {
    return $array[ array_rand( $array ) ];
}
$subjects = array( 
    'Donald', 
    'The Donald', 
    'Donald Trump', 
    'Trump', 
    'Drumpf', 
    'The Drumpfy',
    'Drumpfy the clown',
    'The Trumpinator',
    'Trumpenstein',
    'Trump Trump',
    'Little Donny',
    'Lil\' Don',
    'Donaldtello'
);
$verbs = array(
    'wants',
    'needs',
    'eats',
    'likes',
    'loves',
    'hates',
    'kicks',
    'yells at',
    'discourages',
    'fires',
    'smells',
    'laughs at',
    'shows off',
    'borrows',
    'lends',
    'has',
    'makes',
    'becomes',
    'resigns',
    'destroys'
);
$quantities = array(
    'a',
    'two',
    'three',
    'five',
    'ten',
    'fifty',
    'one hundred',
    'five hundred',
    'one thousand',
    'five thousand',
    'a million',
    'a billion',
    'a trillion',
    'a gazillion',
    'all',
    'every',
    'some',
    'a bunch of',
    'his',
    'your'
);
$adjectives = array(
    'YUGE',
    'ugly',
    'fat',
    'lazy',
    'greedy',
    'rich',
    'new',
    'old',
    'perfect',
    'terrible',
    'hot',
    'crappy',
    'American',
    'Mexican',
    'Muslim',
    'great',
    'stupid'
);
$objects = array(
    'building',
    'real estate',
    'mom',
    'Mexican',
    'Muslim',
    'himself',
    'sandwich',
    'comb',
    'money',
    'bicycle',
    'junk in the trunk',
    'pizza',
    'bath',
    'America',
    'clown'
);
$make_objs = array(
    'buildings',
    'real estate',
    'your mom',
    'Mexicans',
    'Muslims',
    'himself',
    'sandwiches',
    'combs',
    'money',
    'bicycles',
    'junk in the trunk',
    'pizzas',
    'baths',
    'America',
    'clowns'
);
$trump_sentence = pick_random( $subjects ) . " " . pick_random( $verbs ) . " " . pick_random( $objects ) . ".";

// Complex sentences $subject . $verb . $qty . $adj . $object
$subj = pick_random( $subjects );
$verb = pick_random( $verbs );
$qty = pick_random( $quantities );
$adj = pick_random( $adjectives );
$obj = pick_random( $objects );
$make_obj = pick_random( $make_objs );

// Pluralization
if( $qty != 'a' && $qty != 'every' && $qty != 'his' && $qty != 'your' ) {
    $obj .= 's';
}

$complex_trump = $subj . " " . $verb . " " . $qty . " " . $adj . " " . $obj . ".";
$trump_makes = $subj . ' makes ' . $make_obj . ' ' . $adj . ' again.';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=<?= $font_family; ?>">
    <title>The Random Page</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: <?= $bg_color; ?>;
            overflow: hidden;
            border: 30px solid <?= $border_color; ?>;
        }
        .bubble {
            position: absolute;
            background: <?= $bubble_color; ?>;
            border-radius: 50%;
        }
        h1 {
            display: none;
            position: absolute;
            top: 100px;
            width: 300px;
            text-align: center;
            left: 50%;
            margin-left: -25%;
            z-index: 999;
            color: <?= $text_color; ?>;
            font-size: <?= $font_size ?>px;
            font-family: '<?= str_replace( '+', ' ', $font_family ); ?>';
            <?php 
            switch( $style ) {
                case 'bold':
                    echo "font-weight: bold;";
                    break;
                case 'italic':
                    echo "font-style: italic;";
                    break;
                case 'underline':
                    echo "text-decoration: underline;";
                    break;
                case 'uppercase':
                    echo "text-transform: uppercase;";
                    break;
            }
            ?>
        }
        p {
            color: <?= $text_color; ?>;
            font-size: <?= $font_size ?>px;
            font-family: '<?= str_replace( '+', ' ', $font_family ); ?>';
            position: relative;
            z-index: 999;
        }
        a {
            color: <?= $text_color; ?>;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Bubbles!</h1>
    <?php 
    $num_circles = 60;
    for( $i=0; $i<$num_circles; $i++ ) { 
        $size = rand( 20, 300 ); 
        ?>
        <div class="bubble" style="width: <?= $size ?>px;
                                height: <?= $size ?>px;
                                left: <?= rand( -5, 100 ); ?>%;
                                top: <?= rand( -5, 100 ); ?>%;
                                opacity: <?= rand( 0, 8 ) / 10; ?>">
        </div>
    <?php } ?>
    <p><a href=""><?= ucfirst( $trump_makes ); ?></a></p>
</body>
</html>