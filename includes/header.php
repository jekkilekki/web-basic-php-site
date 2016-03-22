<?php
// $siteroot points to the dev folder - Reset to empty string on live site.
$siteroot = "/comp-a"; 
// date_default_timezone_set('Asia/Seoul'); if need to set the timezone

include_once './includes/functions.php';
?>

<header>
<div class="footer-wrapper">
    <img src="<?= $siteroot; ?>/img/logo.png" width="30" /> <!-- Put your logo here -->
    <h1>GPA Computer Classes</h1> <!-- Put your website title here -->
    
    <?php include 'menu.php'; ?>
    
</div>
</header>