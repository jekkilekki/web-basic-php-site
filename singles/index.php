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

?>