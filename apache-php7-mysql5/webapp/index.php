<?php

require_once(__DIR__.'/DatabaseConnectionTest.php');
require_once(__DIR__.'/MemcachedConnectionTest.php');

DatabaseConnectionTest::run();
DatabaseConnectionTest::showResult();

MemcachedConnectionTest::run();
MemcachedConnectionTest::showResult();

phpinfo();
