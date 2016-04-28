<?php
// 1. Create a database connection
$dbhost = 'localhost:3308';
$dbuser = 'jekkilekki';
$dbpass = 'fluffh34d';
$dbname = 'jkl_web';

// Object-orientation
//$connection = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
// Test if connection occurred.
//if( $connection->connect_errno() ) {
//    die( 'Database connection failed: ' . $connection->connect_error() . " (" . $connection->connect_errno() . ")" );
//} else {
//    echo 'Database connection success!';
//}

$db = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );
// Test if connection occurred.
if( mysqli_connect_errno() ) {
    die( 'Database connection failed: ' . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
} else {
    echo '<p>Database connection success!</p>';
}

// 2. Perform database query
$query = "SELECT * ";  // define as separate variable - useful for debugging
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$query .= "ORDER BY position ASC ";

$result = mysqli_query( $db, $query ); // this is a "resource" not an "array"
// Test if there was a query error
if ( ! $result ) {
    die( "Database query failed." );
} else {
    echo '<p>Database query success!</p>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JKLMS - Database work</title>
</head>
<body>
    
    <ul>
    <?php 
    // 3. Use returned data (if any)
    while( $subject = mysqli_fetch_assoc( $result ) ) { // while you can still fetch rows - this increments the array pointer
        // output data from each row
        echo '<li>' . $subject[ 'menu_name' ] . ' (' . $subject[ 'id' ] . ')</li>';
    }
    
    // 4. Release returned data
    mysqli_free_result( $result );
    ?>
    </ul>
    
</body>
</html>

<?php
// 5. Close database connection
mysqli_close( $db );
?>