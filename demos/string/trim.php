<?php

  $str = '    hello   ';

  $str_left_trim = ltrim($str);
  print $str_left_trim."\n";
  print strlen($str_left_trim)."\n";

  $str_right_trim = rtrim($str);
  print $str_right_trim."\n";
  print strlen($str_right_trim)."\n";

  $str_both = trim($str);
  print $str_both."\n";
  print strlen($str_both)."\n";


