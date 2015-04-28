<?php
/**
 * Init Application
 */
include __DIR__ . '/../core/init/init.php';

$app = new Silex\Application();
$app->get('/hello', function(){
    return 'Test is running...';
});
$app->run();