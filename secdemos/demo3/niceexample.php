<?php

/**
 * based upon publicly-posted code snippet from: 
 * <https://stackoverflow.com/questions/25844354/timing-attack-in-php>
 * - a sample timing attack analysis under "perfect" conditions
 */

/* to be run at cli */

$nchars = 1000;
$s1 = str_repeat( 'a', $nchars + 1 );

$s2 = str_repeat( 'a', $nchars ) . 'b';
$s3 = 'b' . str_repeat( 'a', $nchars );

$times = 100000;

function my_strcmp( string $s1, string $s2 ) {
	return $s1 === $s2;
}

$start = microtime( true );
for ( $i = 0; $i < $times; $i++ ) {
	my_strcmp( $s1, $s2 );
}
$timeForSameAtStart = microtime( true ) - $start;

$start = microtime( true );
for ( $i = 0; $i < $times; $i++ ) {
	my_strcmp( $s1, $s3 );
}
$timeForSameAtEnd = microtime( true ) - $start;

printf( "'b' at the end: %.4f\n'b' at the front: %.4f\n", $timeForSameAtStart, $timeForSameAtEnd );
