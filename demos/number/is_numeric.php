<?php
  $num = 0;
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = 1;
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = '5';
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = 'hello';
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = .5;
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = 07;
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = 0x11;
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  // ******************
  $num = '1,000';
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  $num = str_replace(',', '', $num);
  if (is_numeric($num)) print "$num is numeric"."\n"; else print "$num is not numeric"."\n";
  // ******************
