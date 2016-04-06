<?php
/*
 * Randomizing Data
 * http://sometimesredsometimesblue.com
 * http://justflipacoin.com
 * rand($low, $high);
 */
$colors = array( 'steelblue', 'red', 'green', 'black', 'white', 'lightsteelblue' );
$color_count = count( $colors ); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Random Page</title>
    <style type="text/css">
        <?php 
        $color1 = $colors[ rand( 0, $color_count-1 ) ];
        $color2 = $colors[ rand( 0, $color_count-1 ) ];
        while ( $color1 == $color2 ) {
            $color2 = $colors[ rand( 0, $color_count-1 ) ];
        }
        ?>
        body {
            margin: 0;
            padding: 0;
            background: <?= $color1; ?>;
            overflow: hidden;
        }
        .box {
            /* position: absolute;*/
            /* background: ;*/
            /* border-radius: 50%;*/
            width: 10px;
            height: 10px;
            /* float: left; */
            display: inline-block;
            margin: 0;
            padding: 0;
        }
        h1 {
            position: absolute;
            top: 100px;
            width: 300px;
            text-align: center;
            left: 50%;
            margin-left: -150px;
        }
    </style>
</head>
<body>
    <h1>The Random Page!</h1>
    <?php 
    $num_squares = 10000;
    for( $i=0; $i<$num_squares; $i++ ) { ?>
        <div class="box" style="background: <?= $colors[ rand( 0, $color_count-1 ) ]; ?>">
        </div>
    <?php } ?>
</body>
</html>