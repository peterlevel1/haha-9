<?php
  $arr = array(1, 2);
  if (in_array(1, $arr))
    print 'haha';
  else
    print 'o o';

  print "\n";

  if (in_array('a', $arr))
    print 'haha';
  else
    print 'o o';

  print "\n";

  // *******************************
  $arr2 = array(1, 2);
  $arr = array(
    $arr2
  );

  if (in_array($arr2, $arr))
    print 'haha';
  else
    print 'o o';














