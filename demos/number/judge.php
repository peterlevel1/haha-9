<?php
  $num = 1;
  if (is_int($num)) print "$num is int"."\n"; else print "$num is not int"."\n";
  $num = 1.2;
  if (is_int($num)) print "$num is int"."\n"; else print "$num is not int"."\n";
  // *************
  $num = 1.2;
  if (is_float($num)) print "$num is float"."\n"; else print "$num is not float"."\n";
  $num = 1;
  if (is_float($num)) print "$num is float"."\n"; else print "$num is not float"."\n";
  // *************
  // 4个0 + 最后1位
  $a = 1.00000;
  $b = 1.00001;
  // 3个0 + 最后1位
  $delta = 0.0001;
  if (abs($a - $b) <= $delta) print "$a is equals $b"."\n"; else print "$a is not equals $b"."\n";




