<?php

require __DIR__.'/bootstrap.php';

require_once __DIR__.'/src/Om/Adapter/BlogAdapter.php';

$blogAdapter = new BlogAdapter($dbAdapter->getConnection());

$item = $blogAdapter->findById(2);
var_dump($item);
var_dump($blogAdapter->findAll());