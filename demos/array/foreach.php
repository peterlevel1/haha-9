<?php
  $arr = array(1, 2, 3, 4, 5);
  foreach($arr as $value) {
    print $value."\n";
  }

  print "\n";

  $arr = array(1, 2, 3, 4, 5);
  foreach($arr as $key => $value) {
    print 'key: '.$key.' => '.'value: '.$value."\n";
  }

  print "\n";

  $hash = array('a' => 1, 'b' => 2);
  foreach($hash as $key => $value) {
    print 'key: ' . $key . ' => ' . 'value: ' . $value . "\n";
  }


