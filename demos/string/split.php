<?php
  $str = 'aa    bb  cc';

  $split = split(' +', $str);
  print_r($split);
  if (is_array($split))
    print 'yes, $split is an array'."\n";

  $preg_split = preg_split('/ +/', $str);
  print_r($preg_split);
  if (is_array($preg_split))
    print 'yes, $preg_split is an array'."\n";
