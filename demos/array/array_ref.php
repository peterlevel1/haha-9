<?php
  $arr = array(1, 2, 3, 4, 5);
  $arr2 = $arr;

  // *********************************************
  // $arr is also changed;
  $arr2[1] = 20;
  // XXXXX ----- wrong ----- XXXX
  print_r($arr);
  // *********************************************

  $arr2 =& $arr;
  $arr2[1] = 20;
  print_r($arr);

