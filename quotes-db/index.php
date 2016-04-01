<?php

// This must come FIRST - in order to display stuff, we must accepss the database
$dbconnect = "";

// Establish database connection
try {
    $dbconnect = new PDO(
        'mysql:host=localhost; dbname=jkl_web',
        'jklwebuser',
        'J30nju-dae'
    );
    $dbconnect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $dbconnect->exec( 'SET NAMES "utf8"' );
    echo "Database connection established.";
} catch ( PDOException $e ) {
    echo 'Unable to connect to the database server: ' . $e->getMessage();
    exit();
}

// Get quotes from database
try {
    $sql = 'SELECT id, quotetext, quoteauthor, quotedate FROM quote';
    $result = $dbconnect->query( $sql );
} catch ( PDOException $e ) {
    echo 'Error fetching quotes: ' . $e->getMessage();
    exit();
}

// Store quotes in array
while ( $row = $result->fetch() ) {
    $quotes[] = array( 
        'id'        => $row[ 'id' ],
        'text'      => $row[ 'quotetext' ],
        'author'    => $row[ 'quoteauthor' ],
        'date'      => $row[ 'quotedate' ]
    );
}

// Add quotes to database
if( isset( $_POST[ 'quotetext' ] ) ) {
    try {
        $sql = 'INSERT INTO quote SET
            quotetext = :quotetext,
            quoteauthor = :quoteauthor,
            quotedate = CURDATE()';
        // Using prepared statements, SQL injection vulnerabilites don't exist
        $s = $dbconnect->prepare( $sql );
        $s->bindValue( ':quotetext', $_POST[ 'quotetext' ] );
        $s->bindValue( ':quoteauthor', $_POST[ 'quoteauthor' ] );
        $s->execute();
    } catch( PDOException $e ) {
        echo 'Error adding submitted quote: ' . $e->getMessage();
    }
    header( 'Location: .' );
}   

// DELETE quotes from the database
if( isset( $_GET[ 'deletequote' ] ) ) {
    try {
        $sql = 'DELETE FROM quote WHERE id = :id';
        $s = $dbconnect->prepare( $sql );
        $s->bindValue( ':id', $_POST[ 'quoteid' ] );
        $s->execute();
    } catch ( PDOException $e ) {
        $error = 'Error deleting quote: ' . $e->getMessage();
        echo "<script>alert( $error );</script>";
        exit();
    }
    header( 'Location: .' );
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Today&rsquo;s Date</title>
    </head>
    <body>
        <p>
            <?php date_default_timezone_set( "Asia/Seoul" ); ?>
            Today&rsquo;s date (according to this web server is)
            <?php echo date( 'l, F jS Y \@ H:ia' ); ?>
        </p>
        
        <h1>Quotes</h1>
        <?php 
        if( isset( $_GET[ 'addquote' ] ) ) {
            include 'add-quote.php';
        }
        $_GET[ 'addquote' ] = "";
        ?>
        <a href="?addquote">Add a quote</a>
        <?php foreach( $quotes as $quote ) : ?>
            <form action="?deletequote" method="POST">
            <blockquote>
                <p>
                    <?= 
                    htmlspecialchars( $quote[ 'text' ], ENT_QUOTES, 'UTF-8' ); 
                    ?> &mdash; <?=
                    htmlspecialchars( $quote[ 'author' ], ENT_QUOTES, 'UTF-8' );
                    ?>
                    <input type="hidden" name="quoteid" value="<?= $quote[ 'id' ]; ?>">
                    <input type="submit" value="&times;">
                </p>
            </blockquote>
            </form>
        <?php endforeach; ?>
    </body>
</html>