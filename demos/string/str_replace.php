<?php

  // Replace all occurrences of the search string with the replacement string

  $str = 'hello world';
  $new = str_replace('hello', 'haha', $str);
  print $new."\n";

  $str = 'ab ab ab cd';
  $new = str_replace('ab', 'heihei', $str);
  print $new."\n";

  $str = 'ab ab ab cd ee';
  $new = str_replace(array('ab', 'cd'), 'heihei', $str);
  print $new."\n";

  // ******************************************************
  // failed to apply regexp
  $str = 'ab ab ab cd ee';
  $new = str_replace('/ab/', 'heihei', $str);
  print $new."\n";
  // ******************************************************

