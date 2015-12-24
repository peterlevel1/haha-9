<?php
  // *******************************************************
  // warning: array can't contain function
  //function a() {}
  //$arr = array(a);
  //var_dump($arr);
  // *******************************************************

  function hello($mr) {
    print 'hello: Mr.'.$mr."\n";
  }

  call_user_func('hello', 'Peter');

  class A {
    public function hello($mr, $miss) {
      print 'class A:'."\n";
      print 'hello: Mr.'.$mr."\n";
      print 'Miss.'.$miss.' is waiting for you'."\n";
    }
  }
  $a = new A;
  call_user_func_array(array($a, 'hello'), array('Peter', 'Angella'));

