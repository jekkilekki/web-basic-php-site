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

// Often these are form values in $_POST
$menu_name = "Today's Widget Trivia";
$position = 4;
$visible = 1;

$menu_name = mysqli_real_escape_string( $db, $menu_name );

// 2. Perform database query
//$query = "INSERT INTO subjects (menu_name, position, visible) VALUES ({$menu_name}, {$position}, {$visible})";
$query = "INSERT INTO subjects (";
$query .= " menu_name, position, visible ";
$query .= ") VALUES (";
$query .= " '{$menu_name}', {$position}, {$visible}";
$query .= ")";

$result = mysqli_query( $db, $query ); // this is a "resource" not an "array"
// Test if there was a query error
if ( $result ) {
    // Success
    // redirect_to( "somepage.php" );
    echo '<p>Database query success!</p>';
} else {
    // Failure
    // $message = "Subject creation failed";
    die( "Database query failed: " . mysqli_error( $db ) );
}

// Often these are form values in $_POST
$update_id = 6;
$update_menu_name = "Delete me";
$update_position = 4;
$update_visible = 1;
// 2. Perform update query
$update_query = "UPDATE subjects SET ";
$update_query .= "menu_name = '{$update_menu_name}', ";
$update_query .= "position = {$update_position}, ";
$update_query .= "visible = {$update_visible} ";
$update_query .= "WHERE id = {$update_id}";

$update_result = mysqli_query( $db, $update_query ); // this is a "resource" not an "array"
// Test if there was a query error
if ( $update_result && mysqli_affected_rows( $db ) == 1 ) {
    // Success
    // redirect_to( "somepage.php" );
    echo '<p>Database query success!</p>';
} else {
    // Failure
    // $message = "Subject creation failed";
    die( "Database query failed: " . mysqli_error( $db ) );
}

// Delete queries
$delete_id = 6;

$delete_query = "DELETE FROM subjects ";
$delete_query .= "WHERE id = {$delete_id} ";
$delete_query .= "LIMIT 1";

$delete_result = mysqli_query( $db, $delete_query ); // this is a "resource" not an "array"
// Test if there was a query error
if ( $delete_result && mysqli_affected_rows( $db ) == 1 ) {
    // Success
    // redirect_to( "somepage.php" );
    echo '<p>Database query success!</p>';
} else {
    // Failure
    // $message = "Subject creation failed";
    die( "Database query failed: " . mysqli_error( $db ) );
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JKLMS - Database work</title>
</head>
<body>
    
    
    
</body>
</html>

<?php
// 5. Close database connection
mysqli_close( $db );
?>