<?php

  // Replace text within a portion of a string

  $str = 'hello world';
  $new = substr_replace($str, 'haha', 0);
  print $new."\n";

  $str = 'hello world';
  $new = substr_replace($str, 'haha', 0, 1);
  print $new."\n";

  $str = 'hello world';
  $new = substr_replace($str, 'haha', -1);
  print $new."\n";

  $str = 'hello world';
  $new = substr_replace($str, 'haha', -100);
  print $new."\n";
