<?php
$startYear = 2015;
$thisYear = date( 'Y' );
if ( $thisYear > $startYear ) {
    $thisYear = date( 'y' );
    $copyright = "$startYear &ndash; $thisYear";
} else {
    $copyright = $thisYear;
}
?>

<footer>
<div class="footer-wrapper">

    <?php include 'menu.php'; ?>

    <div class="sns">
        <!-- Make an unordered list of THREE links to your social media here -->
        <ul>
            <li><a class="github" href="https://github.com/jekkilekki">GitHub</a></li>
            <li><a class="facebook" href="https://www.facebook.com/jekkilekki">Facebook</a></li>
            <li><a class="email" href="mailto:asnowberger@gpa.ac.kr">Email</a></li>
        </ul>
    </div>

    <p>&copy; <?= $copyright; ?> Aaron Snowberger</p> <!-- Enter your name -->
</div>
</footer>