<?php

declare(strict_types=1);

use Rector\Set\ValueObject\DowngradeLevelSetList;
use Rector\Set\ValueObject\DowngradeSetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(DowngradeLevelSetList::DOWN_TO_PHP_56);
    $containerConfigurator->import(DowngradeSetList::PHP_56);
};