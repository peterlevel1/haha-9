<?php
  // number_format($n, 小数点第几位：后面那个位数四舍五入)
  $n = 1234.56;
  $n = number_format($n);
  print $n."\n";

  $n = 1234.56;
  $n = number_format($n, 2);
  print $n."\n";

  $n = 1234.56;
  $n = number_format($n, 1);
  print $n."\n";

  $n = 1234.51;
  $n = number_format($n, 1);
  print $n."\n";

  $n = 1234.55;
  $n = number_format($n, 1);
  print $n."\n";
