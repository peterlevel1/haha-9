<?php
  $arr = array('a', 'b', 'c');

  function upper(&$str) {
    return $str = strtoupper($str);
  }

  $arr = array_map('upper', $arr);

  print_r($arr);