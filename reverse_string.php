<?php
/**
 * How to reverse String?
 */
$string = count($argv) > 1 ? trim($argv[1]) : '';
if( empty($string) ){
	echo "Please pass string to be reveresed" . PHP_EOL;
	die();
}
echo "Reverse Recosively " . recoursive($string). PHP_EOL;
echo "Reverse Iteratively " . iterative($string). PHP_EOL;

function recoursive( $string )
{
	if( strlen($string) < 2 ){
		return $string;
	}
	return recoursive( substr($string, 1) ) . substr($string,0,1);
}

function iterative( $string ){
	$rString = '';
	for( $i = (strlen($string) - 1); $i>=0; $i-- ){
		$rString .= $string[$i];
	}
	return $rString;
}