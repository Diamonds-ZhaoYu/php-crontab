<?php
include __DIR__ . '/lib/Cron.php';
$cron = new Cron(array(
    'group' => 'www', 
    'user' => 'www', 
    'cron_path' => __DIR__ . '/cron', 
    'config' => __DIR__ . '/config.php')
);
$cron->run();