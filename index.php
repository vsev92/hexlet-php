<?php
/**
 *@category tag in file comment
 *@package tag in file comment
 *@author tag in file comment
 *@license tag in file comment
 *@link tag in file comment
 * Description of what this module (or file) is doing.
 */
require_once __DIR__ . '/vendor/autoload.php';

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;

print_r(Runner\run());
