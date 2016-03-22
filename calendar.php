<?php
$monthname = date( 'M' );
$monthname = strtolower( $monthname );

$taglines = array(
    'jan'   => 'Happy New Year!',
    'feb'   => 'Happy Seollal!',
    'mar'   => 'Welcome back to school!',
    'apr'   => 'Cherry blossom season!',
    'may'   => "Happy Children's Day!",
    'jun'   => "School's out for summer!",
    'jul'   => 'Beach time!',
    'aug'   => "Now it's getting hot!",
    'sep'   => 'Back to school part 2!',
    'oct'   => 'Happy Halloween!',
    'nov'   => 'Happy Thanksgiving!',
    'dec'   => 'Merry Christmas!'
);
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet" /> <!-- CSS Link goes here -->
		<title>GPA Computer Classes : Calendar</title> <!-- Change the page title here -->
	</head>
	<body>

		<!-- HEADER ------------------------------------- -->
		<?php include './includes/header.php'; ?>

		<!-- BODY --------------------------------------- -->
		<div id="wrapper">

			<!-- CONTENT --- -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<!-- This is the only part of the page you need to rewrite in every file -->
			<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
			<section id="content" class="calendar-page">
				<h1 id="page-title">Class Calendar</h1> <!-- Enter a page title -->
                
                <section id="landing" style="background: url('<?= $siteroot; ?>/img/<?= $monthname; ?>-hero.jpg');">
                    <hgroup>
                        <h1 id="page-title"><?= date( 'F Y' ); ?></h1> <!-- Enter a page title -->
                        <h2 id="page-subtitle">
                        <?php
                            foreach( $taglines as $key => $value ) {
                                if( $monthname == $key ) {
                                    echo $value;
                                }
                            }  
                        ?>
                        </h2> <!-- Enter a page subtitle -->
                    </hgroup>

                    <div class="sns">
                        <!-- Make an unordered list of THREE links to your social media here -->
                        <ul>
                            <li><a class="gotomonth" href="#<?= ucfirst( $monthname ); ?>">Skip to current month</a></li>
                        </ul>
                    </div>
                </section>
                
                <?php
                for( $i = 1; $i < 13; $i++ ) {
                    echo '<a name="' . date( 'M', mktime( 0, 0, 0, $i, 1, date( 'Y' ) ) ) . '"></a>';
                    echo make_calendar( $i, date( 'Y' ) );
                }
                ?>
                
            </section>

			<!-- SIDEBAR --- -->
			<?php include './includes/sidebar.php'; ?>
            
		</div>

		<!-- FOOTER ------------------------------------ -->
        <?php include './includes/footer.php'; ?>
        
	</body>
</html>