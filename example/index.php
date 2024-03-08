<?php


// Require dependencies
require_once __DIR__ . "/vendor/autoload.php";

// Use BLAKE2b
use Nicolasflamel\Blake2b\Blake2b;


// Initialize BLAKE2b
$blake2b = new Blake2b();

// Display message
echo "Computing hash" . PHP_EOL;

// Check if computing hash failed
$hash = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"));
if($hash === FALSE) {

	// Display message
	echo "Computing hash failed" . PHP_EOL;
}

// Otherwise
else {

	// Display message
	echo "Hash: " . bin2hex($hash) . PHP_EOL;
}

// Display message
echo "Computing hash with key" . PHP_EOL;

// Check if computing hash with key failed
$hashWithKey = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"));
if($hashWithKey === FALSE) {

	// Display message
	echo "Computing hash with key failed" . PHP_EOL;
}

// Otherwise
else {

	// Display message
	echo "Hash with key: " . bin2hex($hashWithKey) . PHP_EOL;
}

// Display message
echo "Computing hash with size" . PHP_EOL;

// Check if computing hash with size failed
$hashWithSize = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), NULL, 64);
if($hashWithSize === FALSE) {

	// Display message
	echo "Computing hash with size failed" . PHP_EOL;
}

// Otherwise
else {

	// Display message
	echo "Hash with size: " . bin2hex($hashWithSize) . PHP_EOL;
}

// Display message
echo "Computing hash with size and key" . PHP_EOL;

// Check if computing hash with size and key failed
$hashWithSizeAndKey = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), 64);
if($hashWithSizeAndKey === FALSE) {

	// Display message
	echo "Computing hash with size and key failed" . PHP_EOL;
}

// Otherwise
else {

	// Display message
	echo "Hash with size and key: " . bin2hex($hashWithSizeAndKey) . PHP_EOL;
}


?>
