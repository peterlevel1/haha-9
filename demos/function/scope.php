<?php
  // ============================================================
  function local_ref_global($n) {
    global $a;
    return $a + $n;
  }

  $a = 10;
  $b = local_ref_global(2);
  print $b."\n";

  // ============================================================
  $a = 10;
  function test_local_change_global_1() {
    // get:
    global $a;
    // modify:
    // global $a now is 50
    $a = 50;
    // delete:
    // $a: only unset within this closure
    unset($a);
  }

  test_local_change_global_1();
  print $a."\n";

  // ============================================================
  function unset_a() {
    global $a;
    unset($GLOBALS['a']);
  }
  unset_a();
  if (!isset($a))
    print '$a is unset'."\n";


