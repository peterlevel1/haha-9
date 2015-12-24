<?php
  $arr = array(1, 2, 3, 4, 5);
  array_splice($arr, 2, 2); // array(1, 2, 5);
  print_r($arr);

  $arr = array(1, 2, 3, 4, 5);
  $spliced = array_splice($arr, 2, 2);
  // array(3, 4);
  print_r($spliced);

  $arr = array(1, 2, 3, 4, 5);
  array_splice($arr, 2, 2, 10);
  // array(1, 2, 10, 5);
  print_r($arr);

  $arr = array(1, 2, 3, 4, 5);
  array_splice($arr, 2, 2, array(10, 20));
  // array(1, 2, 10, 20, 5);
  print_r($arr);

  $arr = array(1, 2, 3, 4, 5);
  array_splice($arr, 1, 0, array(10, 20));
  // array(1, 10, 20, 2, 3, 4, 5);
  print_r($arr);

  $arr = array(1, 2, 3, 4, 5);
  array_splice($arr, 1);
  // array(1);
  print_r($arr);

  $arr = array(1, 2, 3, 4, 5);
  $spliced_is_array = array_splice($arr, 1, 1);
  // array(2);
  print_r($spliced_is_array);

  $arr = array(1, 2, 3, 4, 5);
  $spliced_is_array = array_splice($arr, 1, 0);
  // array();
  print_r($spliced_is_array);








