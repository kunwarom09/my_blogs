<?php


//scane all the except excpert config.php
$files = ....

$config = [];
foreach ($files as $file){
    $config[] = require $file;
}

return $config;