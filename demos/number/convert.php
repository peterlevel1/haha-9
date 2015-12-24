<?php
  // hex to 10
  $num = base_convert('0x11', 16, 10);
  print $num."\n";

  // hex to 10
  $num = base_convert('11', 16, 10);
  print $num."\n";

  // hex to 2
  $num = base_convert('11', 16, 2);
  print $num."\n";

  // to 10
  print bindec(11)."\n";
  print octdec(11)."\n";
  print hexdec(11)."\n";

  // 10 to ...
  print decbin(11)."\n";
  print decoct(11)."\n";
  print dechex(11)."\n";
