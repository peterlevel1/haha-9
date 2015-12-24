<?php

  $str = 'aaa';
  addWorld($str);
  print $str."\n";

  function addWorld(&$str) {
    $str .= ' world';
  }

  func_arg('aaa', 'bbb');
  function func_arg() {
    $list = func_get_args();
    var_dump($list);
    print 'arg_list '.(is_array($list) ? 'is' : 'is not').' array'."\n";
    print $list[0]."\n";
    print $list[1]."\n";
  }
