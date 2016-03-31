<?php 
// IP address 
echo $_SERVER[ 'REMOTE_ADDR' ]; 
echo '<br>';

/* 
 * For proxy servers
 * HTTP_X_FORWARDED_FOR
 * HTTP_X_FORWARDED
 * HTTP_FORWARDED_FOR
 * HTTP_FORWARDED
 * HTTP_CLIENT_IP
 * HTTP_X_CLUSTER_CLIENT_IP
 * Might include a list of IPs
 */
// Returns first forwarded IP match it finds
function forwarded_ip() {
    $keys = array(
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_X_CLUSTER_CLIENT_IP'
    );
    foreach( $keys as $key ) {
        if( isset( $_SERVER[ $key ] ) ) {
            $ip_array = explode( ',', $_SERVER[ $key ] );
            foreach( $ip_array as $ip ) {
                $ip = trim( $ip );
                if( validate_ip( $ip ) ) {
                    echo 'Valid IP';
                } else {
                    echo 'Invalid IP';
                }
                return $ip;
            }
        }
    }
    return 'None';
}
echo forwarded_ip();
echo '<br>';

// Validating an IP
/* 
 * FILTER_FLAG_IPV4
 * FILTER_FLAG_IPV6
 * FILTER_FLAG_NO_PRIV_RANGE (private)
 * FILTER_FLAG_NO_RES_RANGE (reserved)
 */
function validate_ip( $ip ) {
    if( filter_var( $ip, FILTER_VALIDATE_IP, 
            FILTER_FLAG_IPV4 |
            FILTER_FLAG_NO_PRIV_RANGE |
            FILTER_FLAG_NO_RES_RANGE 
          ) === false ) {
        return false;
    } else {
        return true;
    }
}
if( validate_ip( $_SERVER[ 'REMOTE_ADDR' ] ) ) {
    echo 'Valid IP';
} else {
    echo 'Invalid IP';
}

// For full list of server super globals
// http://php.net/manual/en/reserved.variables.server.php
/*
 * HTTP_USER_AGENT (browser type)
 *      http://php.net/get_browser
 *      Browser, platform, version, features
 *      But needs browscap.ini (not bundled with PHP, must manually keep up to date, large file )
 * HTTP_REFERER (where did you just come from?)
 * Great for web analytics
 * REQUEST_TIME
 * REQUEST_URI
 * REQUEST_METHOD (get/post - also put/patch/head)
 * QUERY_STRING
 * HTTP_ACCEPT (which media types are acceptable for response)
 * HTTP_ACCEPT_CHARSET
 * HTTP_ACCEPT_ENCODING
 * HTTP_ACCEPT_LANGUAGE
 * HTTPS
 * REMOTE_PORT
 */

date_default_timezone_set( 'Asia/Seoul' );

require_once( 'browser_detective.php' );
$bd = new BrowserDetective();
$bd->detect();
?>
<hr>
<h4>Browser Mirror</h4>
<p>Remote IP: <?= $_SERVER[ 'REMOTE_ADDR' ]; ?></p>
<p>User Agent: <?= $_SERVER[ 'HTTP_USER_AGENT' ]; ?></p>
<p>Platform: <?= $bd->platform; ?></p>
<p>Browser: <?= $bd->browser_name; ?></p>

<p>Browser width: <span id="window-width"></span></p>
<p>Browser height: <span id="window-height"></span></p>

<p>Referer: <?= $_SERVER[ 'HTTP_REFERER' ]; ?></p>
<p>Request Time (Unix): <?= $_SERVER[ 'REQUEST_TIME' ]; ?></p>
<p>Request Time (formatted): <?= date( 'l, F j, Y g:ia', $_SERVER[ 'REQUEST_TIME' ] ); ?></p>
<p>Request URI: <?= $_SERVER[ 'REQUEST_URI' ]; ?></p>
<p>Request Method: <?= $_SERVER[ 'REQUEST_METHOD' ]; ?></p>
<p>Query String: <?= $_SERVER[ 'QUERY_STRING' ]; ?></p>
<p>HTTP Accept: <?= $_SERVER[ 'HTTP_ACCEPT' ]; ?></p>
<p>HTTP Accept Charset: <?= $_SERVER[ 'HTTP_ACCEPT_CHARSET' ]; ?></p>
<p>HTTP Accept Encoding: <?= $_SERVER[ 'HTTP_ACCEPT_ENCODING' ]; ?></p>
<p>HTTP Accept Language: <?= $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ]; ?></p>
<p>HTTPS?: <?= $_SERVER[ 'HTTPS' ]; ?></p>
<p>Remote Port: <?= $_SERVER[ 'REMOTE_PORT' ]; ?></p>

<script>
    var width = window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth ||
                document.body.offsetWidth;
    var height = window.innerHeight ||
                document.documentElement.clientHeight ||
                document.body.clientHeight ||
                document.body.offsetHeight;
    
    document.getElementById( "window-width" ).innerHTML = width + "px";
    document.getElementById( "window-height" ).innerHTML = height + "px";
</script>
