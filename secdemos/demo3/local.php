<?php

/**
 * debug
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * alphanumeric english chars/ints
 */
const TOKEN = 'Hr3xDVfC';
const NORMALIZE = 100000;
const ATTEMPTS = 100000;
$token_length = 8;

/**
 * my_string_compare()
 * @return boolean
 */
function my_string_compare( string $string1, string $string2 ) {
	if( $string1 === $string2 ) {
		return true;
	}
	else {
		return false;
	}
}

/**
 * array of varying test strings
 */
$pass_tries = [
	str_repeat( "x", 1 ), 
	str_repeat( "x", 2 ), 
	str_repeat( "x", 3 ),
	str_repeat( "x", 4 ),
	str_repeat( "x", 5 ),
	str_repeat( "x", 6 ),
	str_repeat( "x", 7 ),
	str_repeat( "x", 8 ),
	str_repeat( "x", 9 ),
	str_repeat( "x", 10 )
];

echo "---BEGIN TEST---\n";
foreach( $pass_tries as $k => $v ) {
	$badTimes = [];
	$badOuts = [];
	for( $i = 0; $i < ATTEMPTS; $i++ ) {
		$begin = microtime(true);
		my_string_compare(TOKEN, $v);
		$end = microtime(true);
		if( ( $end - $begin ) > 0.0 ) {
			$badTimes[] = ( ( $end - $begin ) * NORMALIZE ); 
		}
	}
	echo "avg for ".($k+1).":     ".( array_sum($badTimes) / count($badTimes) )."\n";	
}
echo "--END TEST---\n";
