<?php
function make_calendar() {
    date_default_timezone_set( 'Asia/Seoul' );
    
    // Set up variables
    $month = date( 'F Y' );
    $monthnum = date( 'n' );
    $yearnum = date( 'Y' );
    $days_this_month = date( 't' );
    $startday = date( 'w', mktime( 0, 0, 0, $monthnum, 1, $yearnum ) );
    $today = date( 'j' );
    
    // 1, 2, 3, 4, 5, 6, 0
    $headings_full = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' );
    $headings_short = array( 'M', 'T', 'W', 'R', 'F', 'S', 'S' );
    
    // Make calendar
    $calendar = '<table>';
    $calendar .= '<thead>';
    $calendar .= '<tr><th>' . implode( '</th><th>', $headings_short ) . '</th></tr>';
    $calendar .= '</thead>';
    $calendar .= '<tbody>';
    
    // Create the weeks
    $days_this_week = 0; // This variable counts the number of days in the week (up to 7)
    
    $calendar .= '<tr>'; 
    
    // If the month starts on Sunday, add 6 blank spaces at the beginning (Sunday is the end of our calendar)
    if( $startday == 0 ) {
        $calendar.= '<td></td><td></td><td></td><td></td><td></td><td></td>';
        $days_this_week = 6;
    } 
    // Or else, add empty spaces until the correct date and increment the $days_this_week count
    else {
        for( $s = 1; $s < $startday; $s++ ) {
            $calendar .= '<td></td>'; // Add empty spaces until the start day
            $days_this_week++;
        }
    }

    $days_left = $days_this_month; // Create a variable to decrement until there are no more days to count in the month
    
    // For all the days of the month, beginning at 1 (the first day)
    for( $i = 1; $i <= $days_this_month; $i++ ) {
        
        // So long as we haven't posted a full week in this row (7 days)
        if( $days_this_week < 7 ) {
            // If TODAY is the current loop iteration number, highlight it
            if( $i == $today ) {
                $calendar .= "<td class='today'>$i</td>";
            } else {
                $calendar .= "<td>$i</td>";
            }
        } 
        // Apparently, we have 7 days in the row, so end that row
        else {
            $calendar .= '</tr>';
            
            // If there are days yet to be posted for the month, create a new row and add the next date
            if( $days_left > 1 ) {
                $calendar .= "<tr>";
                if( $i == $today ) {
                    $calendar .= "<td class='today'>$i</td>";
                } else {
                    $calendar .= "<td>$i</td>";
                }
                $days_this_week = 0;
            }
        }
        
        // Increment $days_this_week counter, and decrement the number of $days_left
        $days_this_week++;
        $days_left--;
    } 
    
    $calendar .= '</tbody>';
    $calendar .= '</table>';
    
    return $calendar;
}
?>

<aside id="sidebar">
    <div class="widget facts">
        <!-- Enter an unordered list of 5 facts about this subject (with a header) -->
        <h2>Facts about Programming</h2>
        <ul>
            <li>Java was invented in 1995.</li>
            <li>Git is the best version control software available.</li>
            <li>Sass + Grunt + WordPress + Foundation = awesome.</li>
            <li>Every language has its own syntax and "grammar".</li>
            <li>Computer programming is a job that will grow greatly in the future.</li>
        </ul>
    </div>


    <div class="widget classes">
        <!-- Enter an ordered list of your GPA class schedule (with a header) -->
        <h2>GPA Classes</h2>
        <ol start="4">
            <li>Computer A: Computers + Office 101</li>
            <li>AP Computer: Java Programming</li>
            <li>Computer B: Intro to Website Programming</li>
        </ol>
    </div>


    <div class="widget calendar">
        <!-- Enter a table with a calendar for this month (with a header) -->
        <h2><?= date( 'F Y' ); ?></h2>
        <?= make_calendar(); ?>
    </div>
</aside>

<div class="clear"></div>