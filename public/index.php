<?php
/**
 * Porpoise
 * A PHP framework for web beginner.
 */

// 加载基础文件
require __DIR__ . '/../porpoise/Loader.php';
spl_autoload_register('\\Porpoise\\Loader::autoload');

// 执行应用并响应
Porpoise\Application::getInstance(__DIR__)->dispatch();
