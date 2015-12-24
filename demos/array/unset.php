<?php
  $arr = array(1, 2, 3);
  unset($arr[1]);

  // 1, 3
  print_r($arr);

  $arr = array(1, 2, 3);
  $arr[1] = null;
  // 1, , 3
  print_r($arr);

  $arr = array(1, 2, 3);
  $arr[1] = '';
  // 1, , 3
  print_r($arr);
