<?php

$password = crypt('mypassword'); // let the salt be automatically generated
$user_input = 'mypassword';
/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
if (crypt($user_input, $password) == $password) {
  echo "Password verified!";
}

echo PHP_EOL;

echo $password;

echo PHP_EOL;

// Set the password
$password = 'mypassword';

// Get the hash, letting the salt be automatically generated
$hash = crypt($password);

var_dump($hash);

if (CRYPT_STD_DES == 1) {
  echo 'Standard DES: ' . crypt('rasmuslerdorf', 'rl') . "\n";
}

if (CRYPT_EXT_DES == 1) {
  echo 'Extended DES: ' . crypt('rasmuslerdorf', '_J9..rasm') . "\n";
}

if (CRYPT_MD5 == 1) {
  echo 'MD5:          ' . crypt('rasmuslerdorf', '$1$rasmusle$') . "\n";
}

if (CRYPT_BLOWFISH == 1) {
  echo 'Blowfish:     ' . crypt('rasmuslerdorf', '$2a$07$rasmuslerd...........$') . "\n";
}