<?php

    session_cache_expire(120);
    ini_set("session.gc_maxlifetime","7200");
    session_start();

    if(getenv('DEV_MODE')) {
        $devMode = getenv('DEV_MODE');
    } else {
        $devMode = 'prod';
    }
    defined('DEV_MODE') || define('DEV_MODE', $devMode);

    $dbHost           = '127.0.0.1:3306';
    $dbName           = 'PHPBlog';
    $dbUsername       = 'root';
    $dbPwd            = '';
    $websiteUrl       = $http . $_SERVER['HTTP_HOST'];

    defined('WEBSITE_URL')        || define('WEBSITE_URL', $websiteUrl);  
    defined('DB_HOST') || define('DB_HOST', $dbHost);
    defined('DB_NAME') || define('DB_NAME', $dbName);
    defined('DB_USERNAME') || define('DB_USERNAME', $dbUsername);
    defined('DB_PWD') || define('DB_PWD', $dbPwd);    


        
