<?php

$arr = array(1, 2, 3);

$i = array_search(1, $arr);
print $i;
print "\n";

$i = array_search(2, $arr);
print $i;
print "\n";

$arr = array('a' => 1, 'b' => 2);
$key = array_search(1, $arr);
print $key;
print "\n";

$arr = array('a' => 1, 'b' => 2);
$key = array_search(2, $arr);
print $key;
print "\n";

$arr = array('a' => 1, 'b' => 2);
$key = array_search(3, $arr);
print $key;
print "\n";

if ($key === false)
  print 'false';

print "\n";

if ($key == 0)
  print '== 0';

print "\n";

echo false + 1;


