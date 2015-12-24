<?php

  $str = 'hello world';

  $sub = substr($str, 6);
  // world
  print $sub;
  print "\n";

  $hello = substr($str, 0, 5);
  // hello
  print $hello;
  print "\n";

  $miss_last_1 = substr($str, 6, -1);
  // worl
  print $miss_last_1;
  print "\n";

  $empty = substr($str, 6, -5);
  // ''
  print $empty;
  print "\n";
  if ($empty === '')
    print 'yes, it is a empty string'."\n";

  // ???????????????????
  $empty2 = substr($str, 6, -10);
  // ''
  print $empty2;
  print "\n";
  if ($empty2 === '')
    print 'yes, it is a empty string too'."\n";
  else if ($empty2 === null)
    print 'oh, its null'."\n";
  // ???????????????????


  // start is length - 1;
  $negtive_start = substr($str, -1, 1);
  print $negtive_start."\n";

  // start is 0
  $negtive_exceed = substr($str, -20, 1);
  print $negtive_exceed."\n";
