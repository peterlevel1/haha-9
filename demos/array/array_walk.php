<?php
  $arr = array(1, 2, 3);
  array_walk($arr, 'add_1');
  print_r($arr);
  print "\n";

  $arr = array(1, 2, array(3, 4, 5));
  array_walk_recursive($arr, 'add_1');
  print_r($arr);
  print "\n";

  function add_1(&$n) {
    ++$n;
  }
