<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import(__DIR__ . '/../../Ui/', 'annotation');

    $routingConfigurator->add('logout', '/logout')
        ->methods(['GET']);
};
