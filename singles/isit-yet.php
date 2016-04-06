<?php 
/*
 * Single-question sites
 * https://isitchristmas.com
 * http://islostarepeat.com
 * http://whatcoloristheempirestatebuilding.com 
 * http://hasstephenharpersteppeddownyet.com 
 *
 * Ideas
 * Is it graduation day yet?
 * Is it summer vacation?
 * Are Steve and Lucy married yet?
 * Is Daylight Savings Time in effect?
 * What is the current season?
 * What month is it?
 * What is the current phase of the moon?
 * Is Neptune closer to the Sun than Pluto?
 *
 * Our Projects
 * Is it Friday yet?
 * Is it a leap year?
 * Is Star Wars out yet?
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Is it ... yet?</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: steelblue;
        }
        #main-content {
            margin: 30px;
            text-align: center;
            color: white;
        }
        #main-content p {
            font: 40px Helvetica, Arial, sans-serif;
        }
        #main-content h1 {
            font: 24px Georgia, "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <div id="main-content">
        <h1>Is It Friday yet?</h1>
        <p>
            <?php date_default_timezone_set( "Asia/Seoul" ); ?>
            <?= date( 'l' ); ?>
            <?php /* Notes
                * date( 'l' ) = day name
                * date( 'D' ) = abbr
                * date( 'N' ) = num (Sunday is 0)
                * getdate()['weekday'] = day name
                * getdate()['wday'] = num (Sunday is 7)
                * strftime( "%A" ) = day name
                * strftime( "%a" ) = abbr
                * strftime( "%u" ) = num (Sunday is 7)
                * strftime( "%w" ) = num (Sunday is 0)
                */ 
            if( date( 'D' ) == 'Fri' ) {
                echo "YES! It's Friday!!";
            } else {
                $remaining = 5 - date( 'N' );
                if( $remaining < 0 ) { $remaining += 7; }
                echo "Sorry, not yet. But, only $remaining days to go.";
            }
            ?>
        </p>
        <h1>Is it a Leap Year?</h1>
        <p>
            <?php /* Notes
                * Years divisible by 100, but not 400 are NOT Leap years 
                */
            
            function is_leap_year( $year ) {
                if( $year % 4 > 0 ) {
                    return false;  // 2015
                } elseif( $year % 100 > 0 ) {
                    return true;   // 1984
                } elseif( $year % 400 > 0 ) {
                    return false;  // 2100
                } else {
                    return true;   // 2000
                }
            }
            if( isset( $_GET[ 'year' ] ) ) {
                $year = $_GET[ 'year' ];
            } else {
                $year = date( 'Y' );
            }
            if( is_leap_year($year) ) {
                echo "Yes, $year is a leap year.";
            } else {
                echo "No, $year is not a leap year.";
            }
            ?>
        </p>
        <form action="" method="GET">
            Enter a year:<br>
            <input type="text" name="year" value="<?= $year; ?>"><br>
            <input type="submit" value="Submit">
        </form>
        
        <h1>Is the semester over yet?</h1>
        <p>
            <?php
            $jju_ends = strtotime( "17 June 2016" );
            $gpa_ends = strtotime( "24 June 2016" );
            
            if( $jju_ends < time() ) {
                echo "Yes! JJU is over!";
            } elseif ( $gpa_ends < time() ) {
                echo "Yes! JJU AND GPA are both over!";
            } else {
                $still = ( $gpa_ends - time() ) / 3600;
                echo "Sorry sucker, but you've got a looooong way to go. Still $still days 'til the very end...";
            }
            ?>
        </p>
        
        <h1>Is Star Wars out yet?</h1>
        <p>
        <?php
        $star_wars_dates = array(
            1 => '1999-05-19',
            2 => '2002-05-16',
            3 => '2005-05-19',
            4 => '1977-05-25',
            5 => '1980-05-21',
            6 => '1983-05-25',
            7 => '2015-12-18',
            8 => '2017-05-26',
            9 => NULL
        );
        if( isset( $_GET[ 'episode' ] ) ) {
            $episode = intval( $_GET[ 'episode' ] );
        } else {
            $episode = 8;
        }
        $release_date_s = $star_wars_dates[ $episode ];
        $release_date_t = strtotime( $release_date_s ); // timestamp
        $release_date_p = strftime( "%B %d, %Y", $release_date_t ); // pretty print
        
        if( is_null( $release_date_s ) ) {
            echo "No. Episode #$episode does not have a release date yet.";
        } elseif( time() >= $release_date_t ) {
            echo "Yes! Episode #$episode was released on $release_date_p.";
        } else {
            echo "No, sorry, Episode #$episode will be released on $release_date_p.";
        }
        ?>
        </p>
        
        <form action="" method="GET">
            Which Star Wars Episode<br>
            <select name="episode">
                <?php
                for ( $i=1; $i <= 9; $i++ ) { ?>
                    <option value="<?= $i; ?>" <?php if( $i == $episode ) echo " selected"; ?>>#<?= $i; ?></option>;
                <?php }    
                ?>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>