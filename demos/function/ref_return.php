<?php
  function &ref_return($needle, &$haystack) {
    foreach ($haystack as $key => $value) {
      if ($value === $needle) {
        return $haystack[$key];
      }
    }
  }

  $arr = array('a' => 1, 'b' => 2);
  $v =& ref_return(1, $arr);
  print $v."\n";

  $v = 200;
  print_r($arr);
