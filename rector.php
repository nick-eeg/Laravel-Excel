<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/docs',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    // Set Rector to only handle up to PHP 7.4
    ->withPhpVersion(70400) 
    ->withSets([
        LevelSetList::UP_TO_PHP_74, // Ensures transformations are within PHP 7.4 compatibility
    ])
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);

