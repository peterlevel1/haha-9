<?php
  $str = 'aa bb cc';

  $explode = explode(' ', $str);
  print_r($explode);
  if (is_array($explode))
    print 'yes, $explode is an array'."\n";
