<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// Load Composer's autoloader
// require __DIR__ . '/../vendor/autoload.php';

// Load Yii framework
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// Load the application configuration
$config = require __DIR__ . '/../config/web.php';

// Create and run the application
(new yii\web\Application($config))->run();
