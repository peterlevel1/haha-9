<?php

$str = 'aaa';

$str2 = &$str;
echo $str2.PHP_EOL;

$str2 = null;
echo $str;

if (!$str)
   echo 'no string for $str'.PHP_EOL;

// --------------------------------
$str = 'aaa';

$str2 = &$str;
echo $str2.PHP_EOL;

unset($str2);
echo $str.PHP_EOL;

echo true
   ? 'haha this work'
   : 'oh this will not work';

echo PHP_EOL;

echo false
  ? 'haha this work'
  : 'oh this will not work';






