<?php
  if (!isset($str))
     $str = 'aaa';
  print $str."\n";

  // ****************************
  // this expression is not as good as tenary
  $n = (!isset($n) && 1) || 0;
  print $n."\n";
  // ****************************

  $tenary = !isset($tenary) ? 'tenary' : $tenary;
  print $tenary."\n";

  $tenary2 = 'haha, this is a var which has been set';
  $tenary2 = !isset($tenary2) ? 'tenary' : $tenary2;
  print $tenary2."\n";

  $defaults = array(
    'a' => 1,
    'b' => 2,
    'c' => array(1, 2, 3)
  );
  foreach($defaults as $key => $value) {
    // $$key is set to be "true", this type expression should not be adopted in daily use
    // $$key = (!isset($$key) && $value) || $$key;

    $$key = !isset($$key) ? $value : $$key;
    //echo $$key."\n";
    //echo $value."\n";
    echo $key."\n";
    //var_dump($value);

    // ********************************************
    // yes, set the default value
    var_dump($$key);
    // ********************************************
  }

  print_r($a);
  print "\n";

  print_r($b);
  print "\n";

  print_r($c);
  print "\n";


