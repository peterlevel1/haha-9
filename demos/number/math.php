<?php
  // PHP 会将非数值的 string 当成 0，但如果这个正是最大的数值则仍然会返回一个字符串。如果多个参数的值都是 0，max()
  // 将返回第一个（最左边的值）。

  echo max(1, 3, 5, 6, 7)."\n";  // 7
  echo max(array(2, 4, 5))."\n"; // 5
  echo max(0, 'hello')."\n";     // 0: the left value
  echo max('hello', 0)."\n";     // hello: 0
  echo max(-1, 'hello')."\n";    // hello: 0

  // 对多个数组，max 从左向右比较。
  // 因此在本例中：2 == 2，但 4 < 5
  $val = max(array(2, 4, 8), array(2, 5, 7)); // array(2, 5, 7)
  var_dump($val);
  // 如果同时给出数组和非数组作为参数，则总是将数组视为
  // 最大值返回
  $val = max('string', array(2, 5, 7), 42);   // array(2, 5, 7)
  var_dump($val);

  // min .............
  // PHP 会将非数值的 string 当成 0，但如果这个正是最小的数值则仍然会返回一个字符串。如果多个参数的值都是 0，min()
  //    将返回第一个（最左边的值）。
  echo min(1, 3, 5, 6, 7)."\n";  // 1
  echo min(array(2, 4, 5))."\n"; // 2
  echo min(0, 'hello')."\n";     // 0: the left value
  echo min('hello', 0)."\n";     // hello: 0: the left value
  echo min(-1, 'hello')."\n";    // -1

  // 对多个数组，min 从左向右比较。
  // 因此在本例中：2 == 2，但 4 < 5
  $val = min(array(2, 4, 8), array(2, 5, 7)); // array(2, 4, 8)
  var_dump($val);
  // 如果同时给出数组和非数组作为参数，则总是将数组视为
  // 最大值返回
  $val = min('string', array(2, 5, 7), 42);   // "string"
  var_dump($val);

  // pi
  print "\n";
  print pi()."\n"; // 3.1415926535898
  print M_PI."\n"; // 3.1415926535898

  // 1 du <===> PI
  $deg_1_n_rad = 3.1415926535898 / 180;
  $sin_60 = sin(60 * $deg_1_n_rad);
  print $sin_60."\n";

  $sin_90 = sin(90 * $deg_1_n_rad);
  print $sin_90."\n";

  $cos_30 = cos(30 * $deg_1_n_rad);
  print $cos_30."\n";

  $cos_60 = cos(60 * $deg_1_n_rad);
  print $cos_60."\n";

  $tan_45 = tan(45 * $deg_1_n_rad);
  print $tan_45."\n";

  // deg --> rad
  $rad = deg2rad(180);
  print $rad."\n";

  // abs
  print abs(-1.2222)."\n";


