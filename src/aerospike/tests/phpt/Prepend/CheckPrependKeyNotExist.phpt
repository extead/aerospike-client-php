--TEST--
Prepend - Basic prepend operation key not exists.

--SKIPIF--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_skipif("Prepend", "testPrependKeyNotExist");

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Prepend", "testPrependKeyNotExist");
--EXPECT--
0