<?php

declare(strict_types=1);

namespace Sylius\Telemetry;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TelemetryCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        // noop
    }
}