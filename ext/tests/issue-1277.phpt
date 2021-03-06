--TEST--
Phalcon\Config after clone is empty - https://github.com/phalcon/cphalcon/issues/1277
--SKIPIF--
<?php include('skipif.inc'); ?>
--FILE--
<?php
$c1 = new Phalcon\Config();
$c1["test"] = 1;
$c2 = clone $c1;
var_dump($c1);
var_dump($c2);
?>
--EXPECT--
object(Phalcon\Config)#1 (1) {
  ["test"]=>
  int(1)
}
object(Phalcon\Config)#2 (1) {
  ["test"]=>
  int(1)
}
