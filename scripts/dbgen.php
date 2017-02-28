<?php
/**
 * Generate database classes
 * First argument is database config
 */

require_once __DIR__ . '/../init.php';

$profile = empty($argv[1]) ? 'default' : $argv[1];
$dbgen = new \Dal\ModelGenerator($profile);
$dbgen->run();