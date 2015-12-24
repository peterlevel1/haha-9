<?php
// PHP_EOL
// the end of line

// declare a string
$str = '11';

// print the string
echo $str.PHP_EOL;

// judge the str
if (is_string($str))
   echo '$str is a string'.PHP_EOL;

// "": \n would be recognized by php
echo "hello\nworld\n";

// <<< style
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

echo $str;

// $str in quoted string
try {
  echo "\nhi: another e.g.:\n $str";
} catch (Error $err) {
  echo '---------'.PHP_EOL;
  echo $err;
}

// in curly brace
$great = 'fantacy';

echo PHP_EOL;
  echo "{$great}";
  echo "${great}";
echo PHP_EOL;

// e.g. from doc
// *************************************************************************

// Unset AND unreferenced (no use context) variable; outputs NULL
var_dump($unset_var);

// Boolean usage; outputs 'false' (See ternary operators for more on this syntax)
echo($unset_bool ? "true\n" : "false\n");

// String usage; outputs 'string(3) "abc"'
$unset_str .= 'abc';
var_dump($unset_str);

// Integer usage; outputs 'int(25)'
$unset_int += 25; // 0 + 25 => 25
var_dump($unset_int);

// Float/double usage; outputs 'float(1.25)'
$unset_float += 1.25;
var_dump($unset_float);

// Array usage; outputs array(1) {  [3]=>  string(3) "def" }
$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
var_dump($unset_arr);

// Object usage; creates new stdClass object (see http://www.php.net/manual/en/reserved.classes.php)
// Outputs: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
$unset_obj->foo = 'bar';
var_dump($unset_obj);

// refed
$foo = 'Bob';              // 将 'Bob' 赋给 $foo
$bar = &$foo;              // 通过 $bar 引用 $foo
$bar = "My name is $bar";  // 修改 $bar 变量
echo $bar;
echo $foo;                 // $foo 的值也被修改
echo PHP_EOL;


function test() {
  static $a = 0;
  echo $a;
  $a++;
}

test();
test();
test();
test();

