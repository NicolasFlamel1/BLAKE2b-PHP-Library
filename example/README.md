# BLAKE2b PHP Library Example

Run the following commands from inside this directory to run this example. This example demonstrates how to get the BLAKE2b hash of some data with and without a key and a specified size.
```
composer require nicolasflamel/blake2b
php index.php
```

If ran successfully, it should display something similar to the following.
```
Computing hash
Hash: 441edc56cebc8e285d02267aa650819f15add7b06ef9b41b2690128dce655924
Computing hash with key
Hash with key: 4afd3fdc130450283ddddfc33728208f58e906c309209e298399f0cba39594f7
Computing hash with size
Hash with size: 45ba7364fa0071c91802cff284861e52b656972d77002f29e4807fdb21b909134ac8ac110c6d15c5a1c6e0950fa2fbb29933fced1b924d1b1fe7aeee29d426cb
Computing hash with size and key
Hash with size and key: d2990f4e7cc542401777c68ccbf7ba0ed91267e5e48c91e8bf08a8777996ac7fb1891cff04c936cd8c6e44657b6f3a50a7e8c5c278bddf1cd0e9651ab9bf921c
```
