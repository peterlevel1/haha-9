<?php
  $arr = array(1, 2, 3);
  list($a, $b, $c) = $arr;
  // 1, 2, 3
  print $a."\n";
  print $b."\n";
  print $c."\n";

  $arr = array(1, 2, 3);
  list($a, $b) = $arr;
  // 1, 2
  print $a."\n";
  print $b."\n";

  $arr = array(1, 2, 3);
  list($a, , $b) = $arr;
  // 1, 3
  print $a."\n";
  print $b."\n";


