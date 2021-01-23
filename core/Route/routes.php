<?php

use SlimCms\Route\Interfaces\RouterInterface;

/**
 * @var RouterInterface $route
 */

$route->get('/', function () {
    echo 'work!';
});