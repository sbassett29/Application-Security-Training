<?php

/* to be run at cli */

/**
 * debug
 */
#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
#error_reporting(E_ALL);

/**
 * alphanumeric english chars/ints
 */
const TOKEN = 'Hr3xDVfC';
const NORMALIZE = 100;
const ATTEMPTS = 64;
$token_length = 8;
$base_curl = "/usr/bin/curl -k -X POST -d ";
$target_url = "https://localhost/secdemos/demo3/";

/**
 * array of varying test strings
 */
$pass_tries = [ 
	TOKEN, 
	"Hr".str_repeat('x', 6), 
	str_repeat('x', 8) 
];

/**
 * test
 */
$ch = curl_init();
echo "---BEGIN TEST---\n";
foreach( $pass_tries as $k => $v ) {
	$badTimes = [];
	$badOuts = [];
	for( $i = 0; $i < ATTEMPTS; $i++ ) {
		$token = $v;
		curl_setopt( $ch, CURLOPT_URL, $target_url );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, [ "token" => $token] );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		$begin = microtime(true);
		$output = curl_exec( $ch );
		$end = microtime(true);
		if( $end - $begin > 0 ) {
			$badTimes[] = ( ( $end - $begin ) * NORMALIZE ); 
		}
	}
	echo "avg for ".($k+1).":     ".( array_sum($badTimes) / count($badTimes) )."\n";	
}
echo "--END TEST---\n";
curl_close( $ch );
