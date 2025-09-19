<?php
function head_to($location){
    $config = require __DIR__ . '/../config/config.php';
    header("Location:{$config['site']['base_url']}/index.php?pages=".$location);
}
?>