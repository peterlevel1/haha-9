<?php
  $a = 1;
  $b = 2;
  list($b, $a) = array($a, $b);

  print $a."\n";
  print $b."\n";