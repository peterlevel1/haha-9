<?php
  $arr = array(1, 2, 3, 4, 5);
  function bigger_than_3_saved($n) {
    return $n > 3;
  }

  // can not quit interway
  $arr = array_filter($arr, 'bigger_than_3_saved');

  print_r($arr);