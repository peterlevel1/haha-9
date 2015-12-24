<?php
  $arr = array('a' => 1);
  if (array_key_exists('a', $arr))
    print 'yes';
  else
    print 'no';

  print "\n";

  if (array_key_exists('b', $arr))
    print 'yes';
  else
    print 'no';

  print "\n";

  // use directly
  $str = $arr['b'] + 'aaa';
  // Notice: Undefined index: b ...... on line 18
  // 0
  print $str;
