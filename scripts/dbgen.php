<?php

require_once __DIR__ . '/../init.php';

$profile = empty($argv[1]) ? 'default' : $argv[1];

$configFile = ROOT . '/config/database.json';
$targetDirectory = ROOT . '/src';

if (!file_exists($configFile)) {
    echo "Config file not found\n";
    exit(1);
}

try {
    \Dal\Dal::loadConfiguration($configFile);
    $generator = \Dal\Model\GeneratorFactory::createGenerator($targetDirectory, $profile);
    $generator->run();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit(1);
}