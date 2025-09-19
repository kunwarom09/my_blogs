<?php

require_once __DIR__.'/src/Om/Adapter/DatabaseAdapter.php';

$config = require __DIR__.'/config/config.php';
$dbAdapter = new DatabaseAdapter($config['db']);