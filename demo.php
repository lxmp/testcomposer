<?php
require __DIR__ . '/vendor/autoload.php';

lxmp\Tools::hello();

lxmp\orm\Db::table('test');

testHelper();