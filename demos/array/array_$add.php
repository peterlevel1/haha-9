<?php
  // $arr3 = $arr + $arr2;
  // gaurd the 1st array's key => value

  $arr = array(1, 2);
  $arr2 = array(3, 4, 5);

  $arr3 = $arr + $arr2;
  // x：array(1, 2, 3, 4, 5);
  // √：array(1, 2, 5);
  print_r($arr3);

  $arr = array(
    'a' => 1,
    'b' => 2
  );
  $arr2 = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
  );
  $arr3 = $arr + $arr2;
  // √：
  // array(
  //  [a] => 1
  //  [b] => 2
  //  [c] => 3
  //)
  print_r($arr3);

  $arr = array(
    'a' => 1,
    'b' => 2,
    'd' => 4
  );
  $arr2 = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
  );
  $arr3 = $arr + $arr2;
  // √：
  // array(
  //  [a] => 1
  //  [b] => 2
  //  [d] => 4
  //  [c] => 3
  //)
  print_r($arr3);
  print "\n";

  $arr3[0] = 100;
  print_r($arr);





