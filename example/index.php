<?php


// Require dependencies
require_once __DIR__ . "/vendor/autoload.php";

// Use BLAKE2b
use Nicolasflamel\Blake2b\Blake2b;


// Initialize BLAKE2b
$blake2b = new Blake2b();

// Display message
echo "Computing hash" . PHP_EOL;

// Compute hash
$hash = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"));

// Display message
echo "Hash: " . bin2hex($hash) . PHP_EOL;

// Display message
echo "Computing hash with key" . PHP_EOL;

// Compute hash with key
$hashWithKey = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"));

// Display message
echo "Hash with key: " . bin2hex($hashWithKey) . PHP_EOL;

// Display message
echo "Computing hash with size" . PHP_EOL;

// Compute hash with size
$hashWithSize = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), NULL, 64);

// Display message
echo "Hash with size: " . bin2hex($hashWithSize) . PHP_EOL;

// Display message
echo "Computing hash with size and key" . PHP_EOL;

// Compute hash with size and key
$hashWithSizeAndKey = $blake2b->compute(hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), hex2bin("0102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f20"), 64);

// Display message
echo "Hash with size and key: " . bin2hex($hashWithSizeAndKey) . PHP_EOL;


?>
