<?php
include 'functions.php';
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
        <?= make_calendar( date( 'n' ), date( 'Y' ) ); ?>
    </div>
</aside>

<div class="clear"></div>