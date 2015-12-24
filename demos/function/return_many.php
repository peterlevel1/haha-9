<?php
  function get_many() {
    return array(1, 2, 3);
  }
  list($a, , $c) = get_many();
  print $a."\n";
  print $c."\n";