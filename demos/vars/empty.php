<?php
  // empty
  // unset(default: null) + set:(null + 0 + '' + false + array())

  $null = null;
  if (empty($str))
     print '$null is empty'."\n";

  $str = '';
  if (empty($str))
     print '$str \'\' is empty'."\n";

  $n = 0;
  if (empty($n))
     print '$n 0 is empty'."\n";

  $n = 1;
  if (empty($n))
     print '$n 1 is empty'."\n";
  else
     print '$n 1 is not empty'."\n";

  $bool = false;
  if (empty($bool))
     print '$bool false is empty'."\n";

  $bool = true;
  if (empty($bool))
     print '$bool true is empty'."\n";
  else
     print '$bool true is not empty'."\n";

  $arr = array();
  if (empty($arr))
     print '$arr() is empty'."\n";
  else
     print '$arr() is not empty'."\n";

  $arr = array(1);
  if (empty($arr))
     print '$arr(1) is empty'."\n";
  else
     print '$arr(1) is not empty'."\n";

  if (empty($unset))
    print '$unset is empty'."\n";



