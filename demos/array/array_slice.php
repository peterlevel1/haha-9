<?php
  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1);
  // array(2, 3, 4, 5);
  print_r($part);

  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1, 2);
  // array(2, 3);
  print_r($part);

  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1, -1);
  // array(2, 3, 4);
  print_r($part);

  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1, -2);
  // array(2, 3);
  print_r($part);

  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1, -6);
  // array();
  print_r($part);

  $arr = array(1, 2, 3, 4, 5);
  $part = array_slice($arr, 1, 1);
  // array(2);
  print_r($part);




