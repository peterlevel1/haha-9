<?php
  function defaults($str = 'hello', $n = 1) {
    print $str."\n";
    print $n."\n";
  }

  defaults();

  defaults('hello world', 111);
