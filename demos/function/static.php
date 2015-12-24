<?php
  function addStaticA() {
    if (!isset($a)) static $a = 0;
    $a++;
    return $a;
  }

  $n = addStaticA();
  print $n."\n";

  $n = addStaticA();
  print $n."\n";

  $n = addStaticA();
  print $n."\n";

